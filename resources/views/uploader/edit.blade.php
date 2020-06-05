@extends('layouts.helloapp')

@section('title', 'uploader/edit')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/uploader/show" name="id">全表示</a>
    <a href="/uploader/add" name="id">投稿</a>
@endsection

@section('content')
    @foreach($data as $record)
        <p>イメーID：{{$record -> id}}</p>
        <p>イメージ名：{{$record -> file_name}}</p>
        <p>投稿日時：{{$record -> created_at}}</p>
        <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="600px">
        <br><br>
        <button onclick="location.href='/uploader/show'">編集</button>
        <button onclick="location.href='/uploader/delete?id={{$record -> id}}?file_name={{$record -> file_name}}'">削除</button>
    @endforeach
@endsection

@section('footer')
    <p>フッター</p>
@endsection