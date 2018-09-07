


<?php
include('../model/usuarios/usuariosModel.php');
class usuariosController extends usuariosModel{


    function create(){

        include('../view/usuarios/crearUsuario.php');
 

    }


    function insertarDatos(){


        $password =  $_POST['password'];
        $edad =  $_POST['edad'];
        $nombre = $_POST['Nombre'];
        $descripcion =  $_POST['descripcion'];
        $email = $_POST['email'];
        $sexo =  $_POST['gender'];
        $roles =  $_POST['roles'];
        $edad =  $_POST['edad'];
        $imagen =  $_FILES['imgPerfil'];



        usuariosModel::setUser($nombre,$descripcion,$email,$sexo,$roles,$password,$imagen,$edad);



    }


    function listar(){

        $usuarios =   usuariosModel::getUsers();

        include('../view/usuarios/listarUsuario.php');


    }






    function update(){



       $id = $_REQUEST['id'];

       $usuario = usuariosModel::getUser($id);
    
       include('../view/usuarios/usuariosview.php');
    

    }

    function editarDatos(){

           $password =  $_POST['password'];
           $idUsuario =  $_POST['idusuario'];
           $edad =  $_POST['edad'];
           $nombre = $_POST['Nombre'];
           $descripcion =  $_POST['descripcion'];
           $email = $_POST['email'];
           $sexo =  $_POST['gender'];
           $roles =  $_POST['roles'];
           $imagen =  $_FILES['imgPerfil'];


            usuariosModel::setUserUpdate($idUsuario,$nombre,$descripcion,$email,$sexo,$roles,$password,$imagen);




    }









}


?>