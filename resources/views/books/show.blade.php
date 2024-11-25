<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} - Book Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">Book Management</a>
            
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="display-4 text-primary">{{ $book->title }}</h1>
                    <p class="lead"><strong>Author:</strong> {{ $book->author }}</p>
                    @if(empty($book->rating) || $book->rating === null)
                        <p><strong>Rating:</strong> No Rating Yet</p>
                    @else
                        <p><strong>Rating:</strong> {{ $book->rating }} Star{{ $book->rating > 1 ? 's' : '' }}</p>
                    @endif
                </div>
            </div>
            <div class="mt-4">
                <h3 class="h4 mb-3">Comments</h3>

                @forelse ($comments as $comment)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comment->name }}</h5>
                            <p class="card-text">{{ $comment->content }}</p>
                        </div>
                    </div>
                @empty
                    <p>No comments yet.</p>
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
