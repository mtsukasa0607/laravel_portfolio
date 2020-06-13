@extends('layouts.auth')

@section('title', 'hello/messageEdit')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    
    <h3>メッセージを編集する</h3>

    <form action="/hello/messageEdit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>message: </th><td><input type="text" name="message" value="{{$form->message}}"></td></tr>
            <tr><th></th><td><input type="submit" value="保存する"></td></tr>
        </table>
    </form>

@endsection

@section('footer')
    <p>フッター</p>
@endsection