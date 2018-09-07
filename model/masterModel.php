<?php
include('../lib/config/conexion.php');
class masterModel extends conexion{

    public function insert($sql){

       $conexion  = new Conexion();

       $result =  $conexion->conectarse();


       $retornar = $result->query($sql);

       return $retornar;

    }//end function insert

    public function select($sql){

        $conexion  = new Conexion();

        $result =  $conexion->conectarse();
 
 
        $resultado = $result->query($sql);

         $retornar = array();

            while($row = @mysqli_fetch_array($resultado)){

                $retornar = $row;
            }

        return $retornar;



    }//end function select



    public function selectMultiple($sql){

        $conexion  = new Conexion();

        $result =  $conexion->conectarse();
 
 
        $resultado = $result->query($sql);

        

        return $resultado;



    }//end function select



}


?>