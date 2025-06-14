<h1>Books</h1>
<a href="/books/create">Create a book</a>
<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <p>{{ $book->author }}</p>
            <p>{{ $book->released_at }}</p>
            <div>
                <a href="/books/{{ $book->id }}">Show</a>
                <a href="/books/{{ $book->id }}/edit">Edit</a>
                <form action="/books/{{ $book->id }}/destroy" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>