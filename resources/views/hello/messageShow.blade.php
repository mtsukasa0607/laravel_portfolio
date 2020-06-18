@extends('layouts.auth')

@section('title', 'hello/messageShow')

@section('header')
    
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
@endsection


@section('content')
    
    <br><h4>メッセージを投稿する</h4>

    <form action="/hello/messageShow" method="post">
        <table>
            @csrf
            <tr>
                <td><input type="text" class="form-control" name="message"></td>
                <td><input type="submit" class="form-control" value="送信"></td>
            </tr>
        </table>
    </form>



@if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



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
                    <td>―――</td>
                    <td>―――</td>
                @endif
            </tr>
        @endforeach
    </table><br>
    {{ $items->links() }}

@endsection



@section('footer')

@endsection