@extends('layouts.auth')

@section('title', 'photo/photoShow')

@section('header')
    <form action="/photo/photoFind" method="post">
        <table>
            @csrf
            <tr>
                <td><input type="text" name="input" value="{{$input}}"></td>
                <td><input type="submit" value="検索する"></td>
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
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card mx-auto my-5" style="width:300px;">

                    <a href="/photo/photoDetail?id={{$record -> id}}" name="id">
                        <img src="{{$record -> url}}" alt="{{$record -> file_name}}" style="width:298px;">
                    </a>

                    <div class="card-body">
                        <h4 class="card-title">{{$record -> title}}</h4>
                        <p>{{$record -> user -> getName()}}</p>
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
