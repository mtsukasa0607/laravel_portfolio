@extends('layouts.auth')

@section('title', 'photo/photoAdd')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
@endsection


    
@section('content')

    <div class="mx-auto col-lg-4 col-md-5 col-sm-5 col-12">

        <h2>画像の投稿</h2>
        <form action="/photo/photoCreate" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                <small class="form-text text-muted">タイトルは20字以内</small>
            </div>

            @if ($errors -> has('title'))
                <p class="alert alert-danger">{{$errors->first('title')}}</p>
            @endif

            <div class="form-group">
                <label for="content">コンテンツ</label>
                <textarea type="textarea" class="form-control" name="content">{{ old('content') }}</textarea>
                <small class="form-text text-muted">コンテンツは400字以内</small>
            </div>

            @if ($errors -> has('content'))
                <p class="alert alert-danger">{{$errors->first('content')}}</p>
            @endif

            <div class="form-group">
                <p>画像選択</p>
                <input type="file" name="file">
                <small class="form-text text-muted">ファイルサイズ10MBまで</small>
            </div>

            @if ($errors -> has('file'))
                <p class="alert alert-danger">{{$errors->first('file')}}</p>
            @endif
            
            <br><input type="submit" class="form-control btn btn-dark">
        </form>

    </div>
    

@endsection

@section('footer')
    
@endsection