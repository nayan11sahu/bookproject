<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(Request $request)
    {
            $title = $request->query('title');
            $author = $request->query('author');
            $query = Book::query();
            if ($title) {
                $query->where('title', 'like', "%$title%");
            }
            if ($author) {
                $query->where('author', 'like', "%$author%");
            }

            $books = $query->paginate(10);

    return view('books.index', ['books' => $books]);
    }


    public function show(Request $request)
    {;
        $id= $request->book_id;
        $book = Book::where('books.id','=',$id)->leftjoin('ratings','books.id','=','ratings.book_id')->select('ratings.*','books.*')->first();
        $comments = Comment::where('comments.book_id','=',$id)->join('users','comments.user_id','=','users.id')->select('users.*','comments.*')->OrderBy('comments.id','DESC')->get();
        return view('books.show', [
            'book' => $book,
            'comments' => $comments,
        ]);
    }
    public function addCommentstore(Request $request)
    {
        $bookId = $request->book_id;
        $content = $request->content;
        $request->validate([
            'content' => 'required'
        ]);

        Comment::create([
            'book_id' => $bookId,
            'user_id' => Auth::id(),
            'content' => $content
        ]);
            session()->flash('success', 'Your comment has been added successfully!');
        
        return redirect()->back();
    }

    public function addRatingstore(Request $request)
    {
        $bookId = $request->book_id;
        $rating = $request->rating;

        $request->validate([
            'rating' => 'required|integer|between:1,5'
        ]);

        Rating::create([
            'book_id' => $bookId,
            'user_id' => Auth::id(),
            'rating' => $rating
        ]);
         session()->flash('success', 'Your Rating has been added successfully!');
        return redirect()->back();
    }
}
