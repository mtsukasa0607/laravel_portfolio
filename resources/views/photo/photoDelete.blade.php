@extends('layouts.auth')

@section('title', 'photo/photoDelete')

@section('header')


@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection



    
@endsection
    
@section('content')
    
    <h3>投稿を削除する</h3>

    <img src="{{$data -> url}}" alt="{{$data -> file_name}}" width="400px"><br><br>

    <form action="/photo/photoDelete" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <tr><th>タイトル名：</th><td>{{$data -> title}}</td></tr>
            <tr><th>コンテンツ：</th><td>{{$data -> content}}</td></tr>
            <tr><th>更新日時：</th><td>{{$data -> updated_at}}</td></tr>
            <tr><th></th><td></td></tr>
            <tr><th></th><td><input type="submit" class="form-control btn btn-dark" value="削除する"></td></tr>
        </table>
    </form>
    

@endsection

@section('footer')
    
@endsection