@extends('layouts.helloapp')

@section('title', 'Other')
    
@section('content')
    <p>Other</p>
    <p>{{$msg}}</p>

    @foreach($data as $datum)
        <p>{{$datum}}</p>
    @endforeach
    
@endsection

@section('footer')
    copyright 2020
@endsection