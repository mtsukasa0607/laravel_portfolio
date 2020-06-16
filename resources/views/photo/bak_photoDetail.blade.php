@extends('layouts.auth')

@section('title', 'photo/photoDetail')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection


@section('content')
    
    <p>イメージ名/ID：{{$record -> file_name}}({{$record -> id}})</p>
    <p>ユーザー名/ID：{{$record -> user->getName()}}({{$record -> user_id}})</p>
    <p>投稿日時：{{$record -> created_at}}</p>
    <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="400px">
    <h3>タイトル名：{{$record -> title}}</h3>
    <p>コンテンツ：{{$record -> content}}</p>

    <div class="card mx-auto my-5" style="width:300px;">

        <a href="/photo/photoDetail?id={{$record -> id}}" name="id">
            <img src="{{$record -> url}}" alt="{{$record -> file_name}}" style="width:298px;">
        </a>

        <div class="card-body">
            <h4 class="card-title">{{$record -> title}}</h4>
            <p>{{$record -> user -> getName()}}</p>
            <p>投稿日時：{{$record -> created_at}}</p>
        </div>
    </div>

    <br><br>
    @if ($record -> getUserId() == $login_id)
        <button class="btn btn-dark" onclick="location.href='/photo/photoEdit?id={{$record -> getId()}}'">編集する</button>
        <button class="btn btn-dark" onclick="location.href='/photo/photoDelete?id={{$record -> getId()}}'">削除する</button>
    @else
        <p>ROM ONLY</p>
        <p>ROM ONLY</p>
    @endif
    <br><br>



@endsection

@section('footer')
    
@endsection