@extends('layouts.auth')

@section('title', 'photo/photoDetail')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection


@section('content')
    
    <p>ユーザー名：{{$record -> user->getName()}}</p>
    <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="400px"><br><br>
    <h3>{{$record -> title}}</h3>
    <p>コンテンツ：{{$record -> content}}</p>
    <p>投稿日時：{{$record -> created_at}}</p>

    <br><br>
    @if ($record -> getUserId() == $login_id)
        <button class="btn btn-dark" onclick="location.href='/photo/photoEdit?id={{$record -> getId()}}'">編集する</button>
        <button class="btn btn-dark" onclick="location.href='/photo/photoDelete?id={{$record -> getId()}}'">削除する</button>
    @else
        <p>ROM ONLY</p>
    @endif
    <br><br>



@endsection

@section('footer')
    
@endsection