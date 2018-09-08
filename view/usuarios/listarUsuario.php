<html>
<head>
<style>


  img{

      width:60px;

      height:60px;


  }

  .paginar{


      margin-left:500px;


  }



</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<?php

   // var_dump($usuarios);
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Listado Usuarios</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?modulo=usuarios&funcion=create">Agregar<span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Edad</th>
      <th scope="col">Sexo</th>
      <th scope="col">Roles</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acciones</th>
  
    </tr>
  </thead>



    <?php

$html='<tbody>';

for ($set = array (); $row = $usuarios->fetch_assoc(); $set[] = $row){

  $html.='  <tr>
            <th scope="row">'.$row['nombre'].'</th>
            <td>'.$row['email'].'</td>
            <td>'.$row['edad'].'</td>
            <td>'.$row['sexo'].'</td>
            <td>'.$row['roles'].'</td>
            <td>'.$row['descripcion'].'</td>
            <td><img src="../resource/img/'.$row['imgperfil'].'" alt=""></td>
            <td><a href="index.php?modulo=usuarios&funcion=update&id='.$row['idusuario'].'">Editar</a></td>
            <td><a href="">Eliminar</a></td>

     </tr>';


}

$html.='</tbody>';
echo $html

?>



    
  




</table>

<nav class="paginar" aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
<?php
$tamanoiterrar = round($tamano/5);

for ($i=0; $i < $tamanoiterrar ; $i++) { 
  
 echo $html =' <li class="page-item"><a class="page-link" href="index.php?modulo=usuarios&funcion=listar&P='.$i.'">'.$i.'</a></li>';

}

?>

    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>



</body>

</html>