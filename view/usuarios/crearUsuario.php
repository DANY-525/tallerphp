<html>
<head>
</head>
<body>










<form action="index.php?modulo=usuarios&funcion=insertarDatos" method="post" enctype="multipart/form-data">

<input type="hidden" name="idusuario"  value=""  > 

<label for="Nombre">nombre</label></br>

<input type="text" name="Nombre" placeholder="nombre" value=""></br>
<label for="email">email</label></br>
<input type="text" name="email" placeholder="email" value=""/></br>

<label for="edad">edad</label></br>
<input type="text" name="edad" placeholder="edad" value=""/></br>
<label for="gender">sexo</label></br>



<input type="radio" name="gender" value="masculino" checked> Masculino<br>
<input type="radio" name="gender" value="femenino"> Femenino<br>

<label for="roles">roles</label></br>
<input type="checkbox" name="roles" value="Admin"> Administrador<br>
<input type="checkbox" name="roles" value="WebMaster" >web master<br>
<input type="checkbox" name="roles" value="Cliente">Cliente<br>

<label for="password">password</label></br>
<input type="password" name="password" placehodel="contrasena" value=""><br>

<label for="file">img perfil</label></br>
<input type="file"     name="imgPerfil"><br>

<label for="descripcion">descripcion</label></br>
<input type="text"     name="descripcion" placeholder="descripcion"  value=""><br>

<input type="submit" value="Submit">


</form>

</body>

</html>