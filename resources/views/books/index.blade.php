@extends('books.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Books list</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<form action="{{ route('books.index') }}" method="GET" role="search">

    <div class="input-group">
        <button class="btn btn-info" type="submit" title="Search books">
            Search<span class="fas fa-search"></span>
        </button>
        <input type="text" class="form-control mr-2" name="term" placeholder="Search books" id="term">
        <a href="{{ route('books.index') }}" class=" mt-1">

            <button class="btn btn-danger" type="button" title="Refresh page">Refresh
                <span class="fas fa-sync-alt"></span>
            </button>

        </a>
    </div>
</form>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Author</th>
        <th>Co-Author</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->name }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->co_author }}</td>
        <td>
            <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $books->links() }}


@endsection