@extends('layouts.helloapp')

@section('title', 'uploader/show')

@section('header')
    <p>ヘッダー</p>
@endsection
    
@section('content')
    @foreach($data as $record)
        <p>イメージ名：{{$record -> file_name}}</p>
        <img src="{{$record -> url}}" alt="{{$record -> file_name}}">
    @endforeach
@endsection

@section('footer')
    <p>フッター</p>
@endsection
