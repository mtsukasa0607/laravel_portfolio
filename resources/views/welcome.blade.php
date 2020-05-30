
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Upload S3 Test</title>
    </head>
    <body>
        <h1>S3アップロードテスト</h1>
        <!-- //投稿フォーム -->
        {!! Form::open(['route' => 'upload', 'method' => 'post','files' => true]) !!}
        <div class="form-group">
            {!! Form::label('file', '画像投稿', ['class' => 'control-label']) !!}
            {!! Form::file('file') !!}
        </div>
        <div class="form-group m-0">
            {!! Form::label('textarea', '投稿コメント', ['class' => 'control-label']) !!}
            {!! Form::textarea('comment',null,['class' => 'form-control']) !!}
        </div>   
        <div class="form-group text-center">
            {!! Form::submit('投稿', ['class' => 'btn btn-primary my-2']) !!}
        </div>
        {!! Form::close() !!}
        <!-- //画像とコメントをすべて表示 -->
        @foreach($posts as $post)
            <div class="card-header text-center">
                <img src= {{ Storage::disk('s3')->url($post->image_file_name) }} alt="" width=250px height=250px></a>
            </div>
            <div class="card-body p-1">
                <span class="card-title">{{ $post->image_title }}</span>
            </div>
        @endforeach
    </body>
</html>