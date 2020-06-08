@extends('layouts.helloapp')

@section('title', 'hello/session')

@section('header')
    <p>ヘッダー</p>
@endsection
    
@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    <p>{{$session_data}}</p>
    <form action="/hello/session" method="post">
        @csrf
        <input type="text" name="input">
        <input type="submit" value="send">
    </form>
@endsection

@section('footer')
    <p>フッター</p>
@endsection