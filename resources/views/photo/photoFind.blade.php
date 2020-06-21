@extends('layouts.auth')

@section('title', 'photo/photoFind')

@section('header')
    <form action="/photo/photoFind" method="post">
        <table>
            @csrf
            <tr>
                <td><input type="text" name="input" value="{{$input}}"></td>
                <td><input type="submit" value="検索"></td>
            </tr>
        </table>
    </form>
@endsection

@section('nav')
    <li class="list-inline-item"><a href="/photo/photoShow">Top</a></li>
    <li class="list-inline-item"><a href="/photo/photoAdd" name="id">投稿</a></li>
@endsection
    
@section('content')
    
    @if (isset($data))
    <div class="row">
        @foreach($data as $record)
            <div class="mx-auto col-lg-4 col-md-5 col-sm-5 col-12" >
                <div class="card mx-auto my-3">
                    <a href="/photo/photoDetail?id={{$record -> id}}" name="id">
                        <img src="{{$record -> url}}" alt="{{$record -> file_name}}" style="width: 100%;">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{$record -> title}}</h4>
                        <p>投稿者: {{$record -> user -> getName()}} さん</p>
                        <p>投稿日時：{{$record -> created_at}}</p>
                    </div>
                </div>
            </div> 
        @endforeach
    </div>
    {{ $data->links() }}
@endif

@endsection

@section('footer')
    
@endsection
