@extends('layouts.helloapp')

@section('title', 'hello/auth')

@section('header')
    <p>ヘッダー</p>
@endsection
    
@section('content')

    <p>ユーザー認証ページ</p>
    <p>{{$message}}</p>
    <form action="/hello/auth" method="post">
        <table>
        @csrf
            <tr><th>mail: </th><td><input type="text" name="email"></td></tr>
            <tr><th>pass: </th><td><input type="password" name="password"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    <p>フッター</p>
@endsection