<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        login
    </h1>
    <form action="post" action="{{ url('login') }}">

    </form>
        @csrf

    <label>
        email
    </label>
    <input type="email" name="email">
    <label>
        password
    </label>
    <input type="text" name="password">
    <button type="submit">aceptar</button>
</body>
</html>