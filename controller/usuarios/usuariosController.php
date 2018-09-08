


<?php
include('../model/usuarios/usuariosModel.php');
// Notificar todos los errores excepto E_NOTICE
error_reporting(0);
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
        $admin =  $_POST['admin'];
        $edad =  $_POST['edad'];
        $imagen =  $_FILES['imgPerfil'];
        $webmaster =  $_POST['webmaster'];
        $cliente =  $_POST['cliente'];


        $roles =   array();

        if(isset($webmaster)){

            array_push( $roles, $webmaster);
        }

        if(isset($cliente)){

            array_push( $roles, $cliente);
        }
        if(isset($admin)){

            array_push( $roles, $admin);
        }



      $arrayValidaciones =  $this->validateCampos($nombre,$descripcion,$email,$sexo,$roles,$password,$imagen,$edad);
  
      $validar = FALSE;
      foreach ($arrayValidaciones as $key => $value) {

            if($value == 0){

                $validar = TRUE;

            }

        
      }


      if($validar){


        echo json_encode( $arrayValidaciones);


      }else{

            
            $usuarioingresado =  usuariosModel::setUser($nombre,$descripcion,$email,$sexo,$roles,$password,$imagen,$edad);

            if($usuarioingresado){

            
                $exitoArray = [

                    "respuesta" => "respuesta exitosa",
                    
                    
                ];

                echo json_encode($exitoArray);


            }



      }


      

    }


    function listar(){


        $paginadoNumber = $_REQUEST['P'];


       $multiplicacion =  $paginadoNumber*5;
        
        $tamano  = usuariosModel::getTamanoUser();
    
        $usuarios =   usuariosModel::getUsers( $multiplicacion);

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
           $imagen =  $_FILES['file-0'];


            usuariosModel::setUserUpdate($idUsuario,$nombre,$descripcion,$email,$sexo,$roles,$password,$imagen);




    }



    function validateCampos($nombre,$descripcion,$email,$sexo,$roles,$password,$imagen,$edad){


   
        $validarNombre=0;
        $validarDescripcion=0;
        $validarSexo=0;
        $validarPassword=0;
        $validarImagen=0;
        $validarEdad=1;
        $validarEmail=1;
        $validarEdadEmpty=0;
        $validarRoles=0;

        

        foreach ($roles as $key => $value) {
           


        }

        if(isset($value)){

            $validarRoles=1;


        }

      
        if(isset($nombre)){

            $validarNombre =1;
            
        }

        if(isset($descripcion)){

            $validarDescripcion=1;
            
        }

        if(isset($sexo)){


            $validarSexo=1;
        }

        if(isset($password)){

           $validarPassword=1;
            
        }
        if(isset($imagen)){

            $validarImagen=1;
            
        }

        if(isset($edad)){

            $validarEdadEmpty = 1;
            
        }

        $emails = filter_var($email, FILTER_VALIDATE_EMAIL);
        
        $edad = filter_var($edad, FILTER_VALIDATE_INT);

         
        if(!$emails){

            $validarEmail=0;
           
        }

        if(!$edad){

            $validarEdad=0;
           
        }
     





        $arrayValidaciones = [

            "nombre" => $validarNombre,
            "descripcion" =>  $validarDescripcion,
            "sexo" => $validarSexo,
            "password" =>  $validarPassword,
            "imagen" =>$validarImagen,
            "edad" => $validarEdad,
            "email" => $validarEmail,
            "edadvacia" => $validarEdadEmpty,
            
        ];


        return $arrayValidaciones;

    }














}


?>