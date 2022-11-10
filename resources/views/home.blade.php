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
        hola {{Auth::user()->name}}
    </h1>
    <form action="post" action="{{ url('logout') }}">
        @csrf
        <button type="submit">
            salir
        </button>
    </form>
</body>
</html>