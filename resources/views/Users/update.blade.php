<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    </br>
    
    <label>
        nombre
    </label>
    <input type="text" value="{{ $user->name}}" name="name">

    <label>
        correo
    </label>
    <input type="email" value="{{ $user->email}}" name="email">

</body>
</html>