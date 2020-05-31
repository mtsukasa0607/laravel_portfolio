<!DOCTYPE html>
<html>
    <head>
        <title>TestCrud/add</title>
    </head>
    <body>
        <h1>TestCrud/add</h1>

        <form action="/testCrud/add" method="post">
            <table>
                @csrf
                <tr>
                    <th>name:</th><td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>mail:</th><td><input type="text" name="mail"></td>
                </tr>
                <tr>
                    <th>age:</th><td><input type="text" name="age"></td>
                </tr>
                <tr>
                    <th></th><td><input type="submit" value="send"></td>
                </tr>
            </table>
        </from>

    </body>
</html>
