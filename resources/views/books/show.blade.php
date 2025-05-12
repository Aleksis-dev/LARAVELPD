<h2>{{ $book->title }}</h2>
<h3>{{ $book->author }}</h3>
<p>{{ $book->released_at }}</p>
<form action="/books/{{ $book->id }}/destroy" method="post" style="display:inline">
    @csrf
    @method('DELETE')
    <button>Delete</button>
</form>
<a href="/books">All books</a>