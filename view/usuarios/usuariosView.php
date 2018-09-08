
<html>
<head>
</head>
<body>


<form action="index.php?modulo=usuarios&funcion=editardatos" method="post" enctype="multipart/form-data">

<input type="hidden" name="idusuario"  value="<?php echo $usuario['idusuario']; ?>"  > 

<label for="Nombre">nombre</label></br>

<input type="text" name="Nombre" placeholder="nombre" value="<?php echo $usuario['nombre']; ?>"></br>
<label for="email">email</label></br>
<input type="text" name="email" placeholder="email" value="<?php echo $usuario['email']; ?>"/></br>

<label for="edad">edad</label></br>
<input type="text" name="edad" placeholder="edad" value="<?php echo $usuario['edad']; ?>"/></br>
<label for="gender">sexo</label></br>



<input type="radio" name="gender" value="masculino" checked> Masculino<br>
<input type="radio" name="gender" value="femenino"> Femenino<br>

<label for="roles">roles</label></br>
<input type="checkbox" name="roles" value="Admin"> Administrador<br>
<input type="checkbox" name="roles" value="WebMaster" >Web master<br>
<input type="checkbox" name="roles" value="Cliente">Cliente<br>

<label for="password">password</label></br>
<input type="password" name="password" value="<?php echo $usuario['clave']; ?>"><br>

<label for="file">img perfil</label></br>
<input type="file"     name="imgPerfil"><br>

<label for="descripcion">descripcion</label></br>
<input type="text"     name="descripcion"  value="<?php echo $usuario['descripcion']; ?>"><br>

<input type="submit" value="Submit">


</form>

</body>

</html>