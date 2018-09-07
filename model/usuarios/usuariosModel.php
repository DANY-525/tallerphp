<?php


      
    class usuariosModel  {



      function getUser($id){

           
        $sql = 'select * from usuarios where idusuario='.$id.'';

        $getUser = masterModel::select($sql);

        return $getUser;


      }  


      function setUser($nombre,$descripcion,$email,$sexo,$roles,$password,$imagen,$edad){

        $sql = "INSERT INTO usuarios (idusuario, uuid, nombre, roles, email, login, clave, edad, descripcion, imgperfil) VALUES (0, '1', '$nombre', '$roles', '$email', '', '$password', '$edad', '$descripcion', '$sexo')";

        $setUser = masterModel::insert($sql);

        var_dump($setUser);
        exit;
      }

      //funcion que actualiza usuarios
      function setUserUpdate($idUsuario,$nombre,$descripcion,$email,$sexo,$roles,$password,$imagen){


        $sql = "UPDATE usuarios SET  nombre = '$nombre', roles ='$roles' , email = '$email', login = 14, clave = '$password', edad = 26, descripcion ='$descripcion' , imgperfil = 'sssss', sexo = '$sexo' WHERE idusuario = $idUsuario";


        $setUser = masterModel::insert($sql);
        var_dump($setUser);
        exit;

      }


      function getUsers(){

        $sql = 'select * from usuarios';

        $getUsers = masterModel::selectMultiple($sql);

        return $getUsers;



      }






      





    }



?>