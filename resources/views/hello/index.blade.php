
@extends('layouts.helloapp')

@section('title', 'hello/index')

@section('header')
    <p>ヘッダー</p>
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