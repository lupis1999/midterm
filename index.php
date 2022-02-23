<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" href="./css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="	sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
<title>Login</title>
</head>
<body>
	<div class="row w100p">
		<div class="col-12 text-center mt-5 fs-3">LOG IN</div>
	</div>
	<div class="row justify-center w100p">
		<div class="col-4 text-center card mt-5">
			<form method="post" action="validate.php">
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Usuario</label>
					<input required name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Contraseña</label>
					<input required type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary">Log in</button>
			</form>
		</div>
	</div>
</body>
</html>