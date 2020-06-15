@extends('layouts.auth')

@section('title', 'photo/photoFind')

@section('header')
    <p>ヘッダー</p>
    <h2>ナビゲーション</h2>
    <a href="/photo/photoAdd" name="id">投稿</a>
    
@endsection
    
@section('content')
    <h3>検索ページ</h3>

    <form action="/photo/photoFind" method="post">
        <table>
            @csrf
            <tr><th>search: </th><td><input type="text" name="input" value="{{$input}}"></td></tr>
            <tr><th></th><td><input type="submit" value="検索する"></td></tr>
        </table>
    </form>
    
    @if (isset($item))
        <table>
                <tr><th>Data</th></tr>

        @foreach($item as $record)
            <tr><td>{{$record -> getData()}}</td></tr>
            <tr><td><img src="{{$record -> url}}" width="300px"></td></tr>
        @endforeach
        
        </table>
    @endif

@endsection

@section('footer')
    <p>フッター</p>
@endsection
