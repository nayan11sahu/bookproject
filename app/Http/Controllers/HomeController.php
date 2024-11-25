<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
}
