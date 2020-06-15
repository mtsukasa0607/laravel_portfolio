@extends('layouts.auth')

@section('title', 'photo/photoShow')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/photo/photoShow">一覧へ</a>
    <a href="/photo/photoAdd" name="id">投稿</a>
    <p>編集・削除は画像をクリック</p>

    <form action="/photo/photoFind" method="post">
        <table>
            @csrf
            <tr><th>search: </th><td><input type="text" name="input" value="{{$input}}"></td></tr>
            <tr><th></th><td><input type="submit" value="検索する"></td></tr>
        </table>
    </form>


@endsection
    
@section('content')

@if (isset($data))
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
    
@endif

@endsection

@section('footer')
    <p>フッター</p>
@endsection
