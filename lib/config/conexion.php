<?php


class conexion{

    function conectarse(){


        $conectarse = new Mysqli("localhost","root","","nexura2");

        return $conectarse;


    }

    function cerrarConexion(){


   
    }



}




?>