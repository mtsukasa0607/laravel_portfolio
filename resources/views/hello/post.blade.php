@extends('layouts.auth')

@section('title', 'hello/post')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    <form action="/hello/post" method="post">
        <table>
            @csrf
            <tr><th>user_id: </th><td><input type="number" name="user_id"></td></tr>
            <tr><th>message: </th><td><input type="text" name="message"></td></tr>
            <tr><th></th><td><input type="submit" value="投稿する"></td></tr>
        </table>
    </form>


    <table border="1">
        <tr>
        <th>id</th><th>user_id</th><th>message</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->user_id}}</td>
                <td>{{$item->message}}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->links() }}
    


@endsection

@section('footer')
    <p>フッター</p>
@endsection