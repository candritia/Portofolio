<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Candri_21</title>
</head>
<body>
    <form action="/auth" method="post">
    @csrf
    <table>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Login"></td>
        </tr>
    </table>
    </form>
</body>
</html>