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

    <br><h4>コメントする</h4>

    <form action="/photo/photoDetail" method="post">
        <table>
            @csrf
            <input type="hidden" name="photo_id" value="{{$record -> id}}">
            <tr>
                <td><input type="text" class="form-control" name="comment"></td>
                <td><input type="submit" class="form-control" value="送信"></td>
            </tr>
        </table>
    </form>

    @if (isset($comments))
        @foreach($comments as $value)
            <p>user: {{$value -> user -> getName()}} comment: {{$value -> comment}} created_at: {{$value -> created_at}}</p>

            @if ($value -> user -> getId() == $login_id)
                <button class="btn btn-dark" 
                onclick="location.href='/photo/photoCommentRemove?id={{$value->id}}&photo_id={{$record -> id}}'">削除</button>
            @endif

        @endforeach
    @endif



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