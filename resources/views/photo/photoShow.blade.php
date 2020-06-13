@extends('layouts.auth')

@section('title', 'photo/photoShow')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/photo/photoAdd" name="id">投稿</a>
    <p>編集・削除は画像をクリック</p>
@endsection
    
@section('content')
    @foreach($data as $record)
        <p>イメージID：{{$record -> id}}</p>
        <p>ユーザーID：{{$record -> user_id}}</p>

        <p>ユーザー名：{{$record -> user -> getName()}}</p>

        <p>イメージ名：{{$record -> file_name}}</p>
        <p>タイトル名：{{$record -> title}}</p>
        <p>コンテンツ：{{$record -> content}}</p>
        <p>投稿日時：{{$record -> created_at}}</p>
        <a href="/photo/photoDetail?id={{$record -> id}}" name="id">
            <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="360px">
        </a>
    @endforeach
    {{ $data->links() }}
@endsection

@section('footer')
    <p>フッター</p>
@endsection
