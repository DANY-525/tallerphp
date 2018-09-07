<?php


class conexion{

    function conectarse(){


        $conectarse = new Mysqli("localhost","root","","nexura");

        return $conectarse;


    }

    function cerrarConexion(){


        

   
    }



}




?>