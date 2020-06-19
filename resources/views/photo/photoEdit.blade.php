@extends('layouts.auth')

@section('title', 'photo/photoEdit')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection



@section('content')
    <div class="mx-auto col-lg-4 col-md-5 col-sm-5 col-12">
    
        <h3>投稿を編集する</h3>
        <p>更新日時：{{$data -> updated_at}}</p>
        <img src="{{$data -> url}}" alt="{{$data -> file_name}}" width="100%"><br><br>

        
        <div>
            <form action="/photo/photoEdit" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data -> id}}">

                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" name="title" value="{{$data -> title}}">
                    <small class="form-text text-muted">タイトルは20字以内</small>
                </div>

                @if ($errors -> has('title'))
                    <p class="alert alert-danger">{{$errors->first('title')}}</p>
                @endif

                <div class="form-group">
                    <label for="content">コンテツ</label>
                    <textarea class="form-control" name="content">{{$data -> content}}</textarea>
                    <small class="form-text text-muted">コンテンツは400字以内</small>
                </div>

                @if ($errors -> has('content'))
                    <p class="alert alert-danger">{{$errors->first('content')}}</p>
                @endif

                <input type="submit" class="form-control btn btn-dark" value="保存する">
            </form>
        </div>
        

    </div>


@endsection



@section('footer')

@endsection