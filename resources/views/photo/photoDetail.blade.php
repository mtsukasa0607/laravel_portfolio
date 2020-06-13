@extends('layouts.auth')

@section('title', 'photo/photoDetail')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/uploader/show" name="id">全表示</a>
    <a href="/uploader/add" name="id">投稿</a>
@endsection

@section('content')
    
        
    <p>イメージ名/ID：{{$record -> file_name}}({{$record -> id}})</p>
    <p>ユーザー名/ID：{{$record -> user->getName()}}({{$record -> user_id}})</p>
    <p>投稿日時：{{$record -> created_at}}</p>
    <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="400px">
    <h3>タイトル名：{{$record -> title}}</h3>
    <p>コンテンツ：{{$record -> content}}</p>


    <br><br>
    @if ($record -> getUserId() == $login_id)
        <p><a href="/photo/photoEdit?id={{$record -> getId()}}">編集する</a></p>
        <p><a href="/photo/photoDelete?id={{$record -> getId()}}">削除する</a></p>
    @else
        <p>ROM ONLY</p>
        <p>ROM ONLY</p>
    @endif
    <br><br>



@endsection

@section('footer')
    <p>フッター</p>
@endsection