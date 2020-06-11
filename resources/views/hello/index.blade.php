
@extends('layouts.auth')

@section('title', 'hello/index')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    <table border="1">
        <tr>
        <th>id</th><th>name</th><th>email</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
            </tr>
        @endforeach
    </table>
    {{ $items->links() }}
    
@endsection

@section('footer')
    <p>フッター</p>
@endsection