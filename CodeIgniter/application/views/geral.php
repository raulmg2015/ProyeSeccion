<!DOCTYPE html>
<html>
	<head>
		<title>Formulario</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/resources/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/resources/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/CodeIgniter/resources/css/login.css">
	</head>

	<body>
		<!--TITULO-->

		 <div class="row">
		 	<div class="col-md-6 col-md-offset-3">
		 		<h1>Formulario</h1>
		 	</div>
		 </div>

		 <!--DATOS PERSONALES-->
		 <div class="jumbotron boxlogin" >
		 	<form method="POST" name="flogin" id="flogin">
		 		
		 		<h2>Datos personales</h2>

		 		<label>Nombre:</label>
		 		<input type="text" name="nombre" placeholder="Nombre" id="nombre" class="form-control">
		 		<br>
		 		<br>

		 		<label>Apellido paterno:</label>
		 		<input type="text" name="apaterno" placeholder="Apellido paterno" id="apaterno" class="form-control">
		 		<br>
		 		<br>

		 		<label>Edad:</label>
		 		<input type="text" name="edad" placeholder="Edad" id="edad" class="form-control">
		 		<br>
		 		<br>

		 		<label>Email:</label>
		 		<input type="email" name="email" placeholder="correo@example.com" id="email" class="form-control">
		 		<br>
		 		<br>

		 		<label>Direccion:</label>
		 		<input type="text" name="Direccion" placeholder="calle #numero colonia delegacion" id="direccion" class="form-control">
		 		<br>
		 		<br>

 				<!--DATOS DE REGISTRO-->
		 		<div class="row">
		 			<div class="col-md-12">
		 		
		 				<h2>Datos de registro</h2>

		 				<label>Nombre de la tabla:</label>
		 				<input type="text" name="nombre" placeholder="Nombre de la tabla" id="nomtabla" class="form-control">
		 				<br>
		 				<br>
					</div>
		 		</div>

				<div class="checkbox">
      				<label>
        				<input type="checkbox"> Acepta terminos y condiciones
      				</label>
    			</div>
				<form method="get" action="aviso">
    				<button type="submit" class="btn btn-primary">Intalador</button>
				</form>
		 	</form>

		 	
		 </div>
	</body>
</html>