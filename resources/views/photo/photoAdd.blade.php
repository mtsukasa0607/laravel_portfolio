@extends('layouts.auth')

@section('title', 'photo/photoAdd')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
@endsection


    
@section('content')
    <h2>画像の投稿</h2>

    <div class="row">
        <form action="/photo/photoCreate" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" name="title">
                <small class="form-text text-muted">タイトルは20字以内</small>
            </div>

            @if ($errors -> has('title'))
                <p style="color:red;">{{$errors->first('title')}}</p>
            @endif

            <div class="form-group">
                <label for="content">コンテツ</label>
                <textarea type="textarea" class="form-control" name="content"></textarea>
                <small class="form-text text-muted">コンテンツは400字以内</small>
            </div>

            @if ($errors -> has('content'))
                <p style="color:red;">{{$errors->first('content')}}</p>
            @endif

            <div class="form-group">
                <p>画像選択</p>
                <input type="file" name="file">
            </div>

            @if ($errors -> has('file'))
                <p style="color:red;">{{$errors->first('file')}}</p>
            @endif
            
            <br><input type="submit" class="form-control btn btn-dark">
        </form>
    </div>


@endsection

@section('footer')
    
@endsection