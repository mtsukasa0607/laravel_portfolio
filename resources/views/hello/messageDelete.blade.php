@extends('layouts.auth')

@section('title', 'hello/messageDelete')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    
    <h3>メッセージを削除する</h3>

    <form action="/hello/messageDelete" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>user_id: </th><td>{{$form->user_id}}</td></tr>
            <tr><th>message: </th><td>{{$form->message}}</td></tr>
            <tr><th></th><td><input type="submit" value="削除する"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    <p>フッター</p>
@endsection