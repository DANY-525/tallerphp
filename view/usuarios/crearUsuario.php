<html>
<head>

<title>trabajando con jquery</title>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>

<form id="formulario" method="post" enctype="multipart/form-data">
<!--<form action="index.php?modulo=usuarios&funcion=insertarDatos" method="post" enctype="multipart/form-data">-->

<input type="hidden" name="idusuario"  value=""  > 

<label for="Nombre">Nombre</label></br>

<input type="text" name="Nombre" placeholder="nombre" value=""></br>
<label for="email">Email</label></br>
<input type="text" name="email" placeholder="email" value=""/></br>

<label for="edad">Edad</label></br>
<input type="text" name="edad" placeholder="edad" value=""/></br>
<label for="gender">Sexo</label></br>



<input type="radio" name="gender" value="masculino" checked> Masculino<br>
<input type="radio" name="gender" value="femenino"> Femenino<br>

<label for="roles">Roles</label></br>
<input type="checkbox" name="admin"    value="1"> Administrador<br>
<input type="checkbox" name="webmaster" value="2" >web master<br>
<input type="checkbox" name="cliente"    value="3">Cliente<br>

<label for="password">Password</label></br>
<input type="password" name="password" placehodel="contrasena" value=""><br>

<label for="file">Img perfil</label></br>
<input type="file"     name="imgPerfil"><br>

<label for="descripcion">Descripcion</label></br>
<input type="text"     name="descripcion" placeholder="descripcion"  value=""><br>

<input type="submit" value="Submit">


</form>


</br>


<div id="resp"></div>


<script src="js/ajaxSubir.js"></script>



</body>

</html>