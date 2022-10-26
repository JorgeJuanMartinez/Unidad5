<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>
		registro de usuario
	</h1>
	<form method="post" action="http://127.0.0.1:8000/users/">
		@csrf
		<label>
			nombre
		</label>
		<input type="text" name="name">
		
		<label>
			email
		</label>
		<input type="email" name="emal">

		<button>guardar</button>	
	</form>

</body>
</html>