<html>
<head>
<title>Portada de empleados</title>
</head>
<body>
<h1>Bienvenido a la base de datos</h1>
<p>Estos son los últimos empleados contratatdos.</p>
<?php
while ($fila = mysql_fetch_array($rs_empleados)){
   echo '<p>';
   echo '<a href="' . site_url('/articulos/muestra/' . $fila['employeeNumber']) . '">' . $fila['firstName'] . '</a>';
   echo '</p>';
}
?>

</body>
</html>