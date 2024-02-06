@extends('layout')

@section('page-content')
<table width="30%" border="1">
        <tr>
            <th>ID</th>
            <td>{{$book->id}}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{$book->title}}</td>
        </tr>
        <tr>
            <th>Author</th>
            <td>{{$book->author}}</td>
        </tr>
        <tr>
            <th>isbn</th>
            <td>{{$book->isbn}}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{$book->stock}}</td>
        </tr>
    </table>
    <a class="btn btn-success" href="{{route('book.index')}}"> <i class="bi bi-arrow-left-circle-fill"></i> Go Back</a>

@endsection