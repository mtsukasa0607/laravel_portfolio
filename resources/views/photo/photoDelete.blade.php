@extends('layouts.auth')

@section('title', 'photo/photoDelete')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    
    <h3>投稿を削除する</h3>

    <form action="/photo/photoDelete" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <tr><th>user_id: </th><td>{{$data -> user_id}}</td></tr>

            <tr><th>イメージ名：</th><td>{{$data -> file_name}}</td></tr>
            <tr><th>タイトル名：</th><td>{{$data -> title}}</td></tr>
            <tr><th>コンテンツ：</th><td>{{$data -> content}}</td></tr>
            
            <tr><th></th><td><input type="submit" value="削除する"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    <p>フッター</p>
@endsection