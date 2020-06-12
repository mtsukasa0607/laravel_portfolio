@extends('layouts.auth')

@section('title', 'hello/messageShow')

@section('header')
    <p>ヘッダー</p>
    
@endsection
    
@section('content')
    
    <h3>メッセージを投稿する</h3>

    <form action="/hello/messageShow" method="post">
        <table>
            @csrf
            <tr><th>message: </th><td><input type="text" name="message"></td></tr>
            <tr><th></th><td><input type="submit" value="投稿する"></td></tr>
        </table>
    </form>

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