@extends('layout')

@section('page-content')
    <a class="btn btn-primary" href="{{route('book.index')}}">GoBack</a>
    <h2>Edit book</h2>
    <form method="Post" action="{{route('book.update')}}">
        @csrf
        <input type="hidden" name="id" value="{{$book->id}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title',$book->title)}}" placeholder="Title">
            <div>{{$errors->first('title')}}</div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Author</label>
            <input type="text" class="form-control" name="author" value="{{old('author',$book->author)}}" placeholder="Author Name">
            <div>{{$errors->first('author')}}</div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">ISBN</label>
            <input type="text" class="form-control" name="isbn" value="{{old('isbn',$book->isbn)}}" placeholder="isbn">
            <div>{{$errors->first('isbn')}}</div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Stock</label>
            <input type="text" class="form-control" name="stock" value="{{old('stock',$book->stock)}}" placeholder="stock">
            <div>{{$errors->first('stock')}}</div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">price</label>
            <input type="text" class="form-control" name="price" value="{{old('price',$book->price)}}" placeholder="price">
            <div>{{$errors->first('price')}}</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endSection