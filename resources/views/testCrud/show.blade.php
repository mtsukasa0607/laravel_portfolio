<!DOCTYPE html>
<html>
    <head>
        <title>TestCrud/Show</title>
    </head>
    <body>
        <h1>TestCrud/Show</h1>
        <p>テンプレート</p>
        <table>
                <tr>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Age</th>
                </tr>
        </table>
        
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Mail</th>
                <th>Age</th>
            </tr>
            @foreach ($items as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->mail}}</td>
                    <td>{{$item->age}}</td>
                </tr>
            @endforeach
        </table>
        

    </body>
</html>