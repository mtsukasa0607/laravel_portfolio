@extends('layouts.auth')

@section('title', 'photo/photoDetail')



@section('nav')
    <li class="list-inline-item"><a href="/photo/photoAdd">投稿</a></li>
@endsection



@section('content')
    <div class="mx-auto col-lg-4 col-md-5 col-sm-5 col-12">
        <p>投稿者: {{ $photo->user->getName() }} さん</p>
        <img src="{{ $photo->url }}" alt="{{ $photo->file_name }}" width="100%"><br><br>
        
        <h3>{{ $photo->title }}</h3>
        <p>{!! nl2br(e( $photo->content )) !!}</p>
        <p>投稿日時：{{ $photo->created_at }}</p><br>
        
        <h4>コメントする</h4>

        <form action="/photo/photoDetail" method="post">
            @csrf
            <input type="hidden" name="photo_id" value="{{ $photo->id }}">
            <textarea type="textarea" class="form-control" name="comment">{{ old('comment') }}</textarea>
            <small class="form-text text-muted">コメントは140字以内</small>
            @if ($errors -> has('comment'))
                <p class="alert alert-danger">{{$errors->first('comment')}}</p>
            @endif<br>
            <input type="submit" class="form-control btn btn-dark" value="送信">
        </form>

        @if (isset($comments))<br>
            @foreach( $comments as $comment )
                <div class="card mb-1">
                    <div class="card-body">
                        <p><i class="fas fa-user-circle"></i> {{ $comment->user->getName() }} さん</p>
                        <p>{!! nl2br(e( $comment->comment )) !!}</p>
                        <p>{{ $comment->created_at }}</p>
                        <p>
                            @if(Auth::check())
                                @if ( $comment->user->id === Auth::user()->id )
                                    <form action="/photo/photoCommentRemove" method="post">
                                        @csrf
                                        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                        <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                                        <input type="submit" class="btn btn-dark" value="削除">
                                    </form>
                                @endif
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach    
        @endif<br><br>

        @if(Auth::check())
            @if (Auth::user()->id === $photo->user_id)
                <button class="btn btn-dark" onclick="location.href='/photo/photoEdit'">編集する</button>
                <button class="btn btn-dark" onclick="location.href='/photo/photoDelete'">削除する</button>
            @endif
        @endif<br><br>
    </div>
@endsection