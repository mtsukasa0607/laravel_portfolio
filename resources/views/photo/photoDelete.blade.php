@extends('layouts.auth')

@section('title', 'photo/photoDelete')

@section('header')


@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection



    
@endsection
    
@section('content')

    <div class="mx-auto col-lg-4 col-md-5 col-sm-5 col-12">
        
        <h3>投稿を削除する</h3>

        <img src="{{$data -> url}}" alt="{{$data -> file_name}}" width="100%"><br><br>

        <form action="/photo/photoDelete" method="post">

            @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <h4>{{$data -> title}}</h4>
            <p>{!! nl2br($data -> content) !!}</p>
            <p>投稿日時: {{$data -> updated_at}}</p>
            <input type="submit" class="form-control btn btn-dark" value="削除する">

        </form>
        
    </div>

@endsection

@section('footer')
    
@endsection