@extends('layouts.helloapp')

@section('title', 'hello/delete')

@section('header')
    <p>ヘッダー</p>
@endsection
    
@section('content')
    @foreach($data as $record)
        <p>イメーID：{{$record -> id}}</p>
        <p>イメージ名：{{$record -> file_name}}</p>
        <p>投稿日時：{{$record -> created_at}}</p>
        <img src="{{$record -> url}}" alt="{{$record -> file_name}}" width="600px">
    @endforeach
@endsection

@section('footer')
    <p>フッター</p>
@endsection
