@extends('layouts.auth')

@section('title', 'photo/photoEdit')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection



@section('content')
    
    <h3>投稿を編集する</h3>
    <p>更新日時：{{$data -> updated_at}}</p>
    <img src="{{$data -> url}}" alt="{{$data -> file_name}}" width="400px"><br><br>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <form action="/photo/photoEdit" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data -> id}}">

                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" name="title" value="{{$data -> title}}">
                </div>

                <div class="form-group">
                    <label for="content">コンテツ</label>
                    <textarea class="form-control" name="content">{{$data -> content}}</textarea>
                </div>
                <input type="submit" class="form-control" value="保存する">
            </form>
        </div>
    </div>



@endsection



@section('footer')

@endsection