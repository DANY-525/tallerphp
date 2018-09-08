<?php


    error_reporting(E_ALL);
    class usuariosModel  {



      function getUser($id){

           
        $sql = 'select * from usuarios where idusuario='.$id.'';

        $getUser = masterModel::select($sql);

        return $getUser;


      }  

      //funcion para crear un usuario

      function setUser($nombre,$descripcion,$email,$sexo,$roles,$password,$imagen,$edad){



        $typeDivide =  explode("/",$imagen["type"]);

        
        $nombreArchivo=''.$nombre.'.'.$typeDivide[1].'';


        $subida = $this->cargarImagen($nombreArchivo,$imagen);

       
        $imagenDesarrollo = $imagen["name"];

        $sql = "INSERT INTO usuarios (idusuario, uuid, nombre, roles, email, login, clave, edad, descripcion, imgperfil,sexo) VALUES (0, '1', '$nombre', '', '$email', '', '$password', '$edad', '$descripcion', '$nombreArchivo','$sexo')";
        
        $id = masterModel::insert($sql);

        
        foreach ($roles as $key => $value) {

          $sql2="INSERT INTO usuarios_has_roles (usuarios_idusuario, Roles_idRoles) VALUES ('$id', '$value')";
        
                  masterModel::insertRoles($sql2);
        
        }


          return true;
        
        
      }

      //funcion que actualiza usuarios
      function setUserUpdate($idUsuario,$nombre,$descripcion,$email,$sexo,$roles,$password,$imagen){


        $sql = "UPDATE usuarios SET  nombre = '$nombre', roles ='$roles' , email = '$email', login = 14, clave = '$password', edad = 26, descripcion ='$descripcion' , imgperfil = 'sssss', sexo = '$sexo' WHERE idusuario = $idUsuario";


        $setUser = masterModel::insert($sql);
        
        return $setUser;
      }


      function getTamanoUser(){


          $sql = 'select * from usuarios';

          $getUsers = masterModel::selectMultiple($sql);

          for ($set = array (); $row = $getUsers->fetch_assoc(); $set[] = $row)

          $tamano = count($set);
    
          return $tamano;



      }


      function getUsers($paginado){



        $sql = 'select * from usuarios LIMIT '.$paginado.',5';


        $getUsers = masterModel::selectMultiple($sql);

        return $getUsers;

      }


      //funcion para subir una imagen
      function cargarImagen($nombreArchivo,$imagen){

        $ruta ='../resource/img/'.$nombreArchivo.'';
          
          
        $subida  =  move_uploaded_file($imagen["tmp_name"], "$ruta");

          
        return $subida;
  


      }






      





    }



?>