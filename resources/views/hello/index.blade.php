
@extends('layouts.auth')

@section('title', 'hello/index')

@section('header')
    <p>ヘッダー</p>
    @if(Auth::check())
        <a href="/hello/logout">logout</a>
    @else
        <a href="{{ route('login') }}">{{ __('Login') }}</a><br>
        <a href="{{ route('register') }}">{{ __('Register') }}</a>
    @endif
@endsection
    
@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    <table>
        <tr>
            <th>Name</th><th>Mail</th><th>Age</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->links() }}
    
@endsection

@section('footer')
    <p>フッター</p>
@endsection