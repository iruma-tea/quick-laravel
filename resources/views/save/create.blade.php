@extends('layouts.base')
@section('title', '書籍フォーム')
@section('main')
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $err)
            <li class="text-danger">{{$err}}</li>
        @endforeach
    </ul>
@endif
    <form action="/save" method="post">
        @csrf
        <div class="pl-2">
            <label for="isbn">ISBNコード：</label><br />
            <input type="text" name="isbn" id="isbn" size="15" value="{{old('isbn')}}" class="@error('isbn')
                bg-danger
            @enderror"/>
        </div>
        @error('isbn')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="pl-2">
            <label for="title">書名：</label><br />
            <input type="text" name="title" id="title" size="30" value="{{old('title')}}" class="@error('title')
                bg-danger
            @enderror"/>
        </div>
        @error('title')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="pl-2">
            <label for="price">価格：</label>
            <input type="text" name="price" id="price" size="5" value="{{old('price')}}" class="@error('price')
                bg-danger
            @enderror" />円
        </div>
        @error('price')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="pl-2">
            <label for="publisher">出版社：</label><br />
            <input type="text" name="publisher" id="publisher" size="10" value="{{old('publisher')}}" class="@error('publisher')
                bg-danger
            @enderror" />
        </div>
        @error('publisher')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="pl-2">
            <label for="published">刊行日：</label><br />
            <input type="text" name="published" id="published" size="10" value="{{old('published')}}" class="@error('published')
                bg-danger
            @enderror"/>
        </div>
        @error('published')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="pl-2">
            <button type="submit">送信</button>
        </div>
    </form>
@endsection
