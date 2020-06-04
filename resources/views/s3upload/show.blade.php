@extends('layouts.helloapp')

@section('title', 'Show')
    
@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    <p>{{$msg}}</p>
    <img src="{{$msg}}" alt="image">
@endsection

@section('footer')
    copyright 2020
@endsection