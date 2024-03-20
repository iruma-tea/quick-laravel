@extends('layouts.base')
@section('title', 'アップロード')
@section('main')
    <form action="/ctrl/uploadfile" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="upfile" id="upfile">
        <button type="submit">送信</button>
        <p>{{$result}}</p>
    </form>
@endsection
