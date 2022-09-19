@extends('authors.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Authors list</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('authors.create') }}"> Create New Author</a>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('books.index') }}"> Return to Books List</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<form action="{{ route('authors.index') }}" method="GET" role="search">

    <div class="input-group">
        <button class="btn btn-info" type="submit" title="Search authors">
            Search<span class="fas fa-search"></span>
        </button>
        <input type="text" class="form-control mr-2" name="term" placeholder="Search authors" id="term">
        <a href="{{ route('authors.index') }}" class=" mt-1">
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
        <th>Surname</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($authors as $author)
    <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>      
        <td>{{ $author->surname }}</td>
        <td>
            <form action="{{ route('authors.destroy',$author->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('authors.show',$author->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('authors.edit',$author->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $authors->links() }}


@endsection