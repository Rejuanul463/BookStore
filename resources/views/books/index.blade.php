@extends('layout')

@section('page-content')
<h1>My Bookstore</h1>
    <div class="row">
    <div class="col-10">
            <form method="get" action="{{ route('book.index') }}" >
                <div class="form-row">
                    <div class="col-8">
                        <input type="text" name="search" id = "search" placeholder="Search"
                        value="{{ request('search') }}">
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-2">
            <p class = "right-text"> <a class="btn btn-success" href="{{route('book.create')}}",>+ New Book</a> </p>
        </div>
    </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>isbn</th>
            <th>stock</th>
            <th>price</th>
            <th colspan = "2">Action</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->stock}}</td>
                <td>{{$book->price}}</td>
                <td><a class="btn btn-success" href="{{route('book.show' , $book->id)}}",>view</a></td>
                <td><a class="btn btn-success" href="{{route('book.edit' , $book->id)}}",>Edit</a></td>
                <td>
                    <form method="post" action="{{route('book.destroy')}}" onsubmit="return confirm('Confirm, please.')">
                        @csrf
                        <input type="hidden" name="id" value="{{$book->id}}">
                        <input type="submit" name="delete" value="Delete" class="btn-link">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{$books->links()}}
@endsection
