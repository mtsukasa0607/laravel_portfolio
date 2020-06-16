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

    <form action="/photo/photoEdit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$data -> id}}">
            <tr><th>title: </th><td><input type="text" name="title" value="{{$data -> title}}"></td></tr>
            <tr><th>content: </th><td><input type="textarea" name="content" value="{{$data -> content}}"></td></tr>
            <tr><th></th><td><input type="submit" value="保存する"></td></tr>
        </table>
    </form>

    <div class="row">
        <form action="/photo/photoCreate" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="content">コンテツ</label>
                <textarea type="textarea" class="form-control" name="content"></textarea>
            </div>

            <div class="form-group">
                <p>画像選択</p>
                <input type="file" name="file">
            </div>
            
            <br><input type="submit" class="form-control">
        </form>
    </div>

@endsection



@section('footer')

@endsection