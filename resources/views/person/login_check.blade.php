@extends('layouts.helloapp')

@section('title', 'person/login_check')

@section('header')
    <p>ヘッダー</p>
@endsection



@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    @if (Auth::check())
        <p>USER: {{$user->name . '(' . $user->email . ')'}} がログイン中です。</p>
    @else
        <p>ログインしていません。(<a href="/login">ログイン</a> | <a href="/register">登録</a>)</p>
    @endif

    <table>
        <tr>
            <th><a href="/person?sort=name">Name</a></th>
            <th><a href="/person?sort=mail">Mail</a></th>
            <th><a href="/person?sort=age">Age</a></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->appends(['sort' => $sort])->links() }}
    
@endsection



@section('footer')
    <p>フッター</p>
@endsection