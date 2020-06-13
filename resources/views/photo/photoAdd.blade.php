@extends('layouts.auth')

@section('title', 'photo/photoAdd')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <p><a href="/photo/photoShow" name="id">全表示</a></p>
@endsection
    
@section('content')
    <h2>画像の投稿</h2>
    <form action="/photo/photoCreate" method="post" enctype="multipart/form-data">
        @csrf
        <p>タイトル名：<p>
        <input type="text" name="title">
        <p>コンテンツ：<p>
        <input type="textarea" name="content">
        <p>画像選択：<p>
        <input type="file" name="file">
        <input type="submit">
    </form>
@endsection

@section('footer')
    <p>フッター</p>
@endsection