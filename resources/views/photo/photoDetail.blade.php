@extends('layouts.auth')

@section('title', 'photo/photoDetail')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/uploader/show" name="id">全表示</a>
    <a href="/uploader/add" name="id">投稿</a>
@endsection

@section('content')
    @foreach($data as $record)
        <p>イメージID：{{$record -> id}}</p>
        <p>イメージ名：{{$record -> file_name}}</p>
        <p>ユーザーID：{{$record -> user_id}}</p>
        <p>ユーザー名：</p>
        <p>タイトル名：{{$record -> title}}</p>
        <p>コンテンツ：{{$record -> content}}</p>
        <p>投稿日時：{{$record -> created_at}}</p>
        <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="400px">
    @endforeach

    <h2>投稿の編集</h2>
    <form action="/uploader/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$record -> id}}">
        <label for="edit_title">タイトル名：</label>
        <input type="text" name="title" id="edit_title">
        <input type="submit" value="編集する">
    </form>
    <br><br>
    <button onclick="location.href='/uploader/delete?id={{$record -> id}}'">投稿を削除する</button>
@endsection

@section('footer')
    <p>フッター</p>
@endsection