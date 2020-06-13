@extends('layouts.auth')

@section('title', 'photo/photoEdit')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    
    <h3>投稿を編集する</h3>

    <form action="/photo/photoEdit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$data -> id}}">
            <tr><th>title: </th><td><input type="text" name="title" value="{{$data -> title}}"></td></tr>
            <tr><th>content: </th><td><input type="textarea" name="content" value="{{$data -> content}}"></td></tr>
            <tr><th></th><td><input type="submit" value="保存する"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    <p>フッター</p>
@endsection