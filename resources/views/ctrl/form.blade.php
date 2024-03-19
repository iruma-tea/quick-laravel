@extends('layouts.base')
@section('title', 'フォームの基本')
@section('main')
    <form action="/ctrl/result" method="post">
        {{-- CSRF対策(おまじない) --}}
        @csrf
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" value="" />
        <button type="submit">送信</button>
        <p>{{$result}}</p>
    </form>
@endsection
