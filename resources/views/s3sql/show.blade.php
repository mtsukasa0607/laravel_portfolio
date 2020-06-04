<!DOCTYPE html>
<html>
    <head>
        <title>S3SQL/Show</title>
    </head>
    <body>
        <h1>S3SQL/Show</h1>
        <p>テンプレート</p>
        
        @foreach($data as $record)
            <p>{{$record -> file_name}}</p>
            <img src="{{$record -> url}}" alt="">
        @endforeach

        
        
        
    </body>
</html>