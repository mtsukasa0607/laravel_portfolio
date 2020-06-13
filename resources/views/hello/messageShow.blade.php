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
        <th>user</th><th>message</th><th>updated_at</th><th></th><th></th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->user->getName()}}</td>
                <td>{{$item->getMessage()}}</td>
                <td>{{$item->getUpdatedAt()}}</td>
                @if ($item->getUserId() == $login_id)
                    <td><a href="/hello/messageEdit?id={{$item->getId()}}">Edit</a></td>
                    <td><a href="/hello/messageDelete?id={{$item->getId()}}">Delete</a></td>
                @else
                    <td></td>
                    <td></td>
                @endif
            </tr>
        @endforeach
    </table>
    {{ $items->links() }}

@endsection

@section('footer')
    <p>フッター</p>
@endsection