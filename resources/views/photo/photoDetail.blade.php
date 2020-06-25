@extends('layouts.auth')

@section('title', 'photo/photoDetail')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection


@section('content')
    <div class="mx-auto col-lg-4 col-md-5 col-sm-5 col-12">
        <p>投稿者: {{$record -> user->getName()}} さん</p>
        <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="100%"><br><br>
        
        <h3>{{$record -> title}}</h3>
        <p>{!! nl2br(e($record -> content)) !!}</p>
        <p>投稿日時：{{$record -> created_at}}</p>

        <br><h4>コメントする</h4>

        <form action="/photo/photoDetail" method="post">
            @csrf
            <input type="hidden" name="photo_id" value="{{$record -> id}}">
            <textarea type="textarea" class="form-control" name="comment">{{ old('comment') }}</textarea>
            <small class="form-text text-muted">コメントは140字以内</small>
            @if ($errors -> has('comment'))
                <p class="alert alert-danger">{{$errors->first('comment')}}</p>
            @endif
            <br><input type="submit" class="form-control btn btn-dark" value="送信">
        </form>


        @if (isset($comments))
            <br>
            @foreach($comments as $value)
                <div class="card mb-1">
                    <div class="card-body">
                        <p><i class="fas fa-user-circle"></i> {{$value -> user -> getName()}} さん</p>
                        <p>{!! nl2br(e($value -> comment)) !!}</p>
                        <p>{{ $value -> created_at }}</p>
                        <p>
                            @if ($value -> user -> getId() == $login_id)
                                <a href="/photo/photoCommentRemove?id={{$value->id}}&photo_id={{$record -> id}}">削除</a>
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach    
        @endif

        <br><br>
        @if ($record -> getUserId() == $login_id)
            <button class="btn btn-dark" onclick="location.href='/photo/photoEdit'">編集する</button>
            <button class="btn btn-dark" onclick="location.href='/photo/photoDelete'">削除する</button>
        @endif
        <br><br>
    </div>
@endsection