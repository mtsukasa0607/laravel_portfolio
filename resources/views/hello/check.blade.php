@extends('layouts.auth')

@section('title', 'hello/check')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    <a href="/hello/post">メッセージの投稿をする</a>
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述できます。</p>

    


    <table border="1">
        <tr>
        <th>user</th><th>message</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    @if ($item->messages != null)
                        @foreach ($item->messages as $obj)
                            <p>{{$obj->getData()}}</p>
                        @endforeach
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    {{ $items->links() }}

    
    
@endsection

@section('footer')
    <p>フッター</p>
@endsection