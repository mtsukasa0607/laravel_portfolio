@extends('layouts.helloapp')

@section('title', 'uploader/add')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/uploader/show" name="id">全表示</a>
@endsection
    
@section('content')
    <h2>画像の投稿</h2>
    <form action="/uploader/create" method="post" enctype="multipart/form-data">
        @csrf
        <label for="edit_title">タイトル名：</label>
        <input type="text" name="title" id="edit_title"><br><br>
        <input type="file" name="file">
        <input type="submit">
    </form>
@endsection

@section('footer')
    <p>フッター</p>
@endsection