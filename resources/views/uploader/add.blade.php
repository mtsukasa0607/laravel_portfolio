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
        <input type="file" name="file">
        <input type="submit">
    </form>
@endsection

@section('footer')
    <p>フッター</p>
@endsection