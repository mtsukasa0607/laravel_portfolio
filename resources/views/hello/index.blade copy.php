
@extends('layouts.helloapp')

@section('title', 'Index')
    
@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>
    <p>{{$msg}}</p>
@endsection

@section('footer')
    copyright 2020
@endsection