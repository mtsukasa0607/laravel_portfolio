@extends('layouts.helloapp')

@section('title', 'uploader/show')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/uploader/add" name="id">投稿</a>
    <p>編集・削除は画像をクリック</p>
@endsection
    
@section('content')
    @foreach($data as $record)
        <p>イメーID：{{$record -> id}}</p>
        <p>イメージ名：{{$record -> file_name}}</p>
        <p>タイトル名：{{$record -> title}}</p>
        <p>投稿日時：{{$record -> created_at}}</p>
        <a href="/uploader/edit?id={{$record -> id}}" name="id"><img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="600px"></a>
    @endforeach
@endsection

@section('footer')
    <p>フッター</p>
@endsection
