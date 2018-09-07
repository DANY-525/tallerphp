<?php

class Index {

    private $moduloUrl = "";
    private $funcionUrl = "";

    function __construct($moduloparametro,$funcionparametro) {
      

        $this->moduloUrl = $moduloparametro;
        $this->funcionUrl = $funcionparametro;

    }


    function GenerarUrl(){


        include('../model/masterModel.php');


        $existeaArchivo = file_exists ('../controller/'.$this->moduloUrl.'/'.$this->moduloUrl.'Controller.php');

        if($existeaArchivo){

            include('../controller/'.$this->moduloUrl.'/'.$this->moduloUrl.'Controller.php');
            
            $funcion =  $this->funcionUrl;

                $controladorInstanciar =  $this->moduloUrl.="Controller";
                $controlador = new  $controladorInstanciar;
                $controlador -> $funcion();
        
        }else{


            echo "archivo no existe";
        }
    
       
    }



    
}

    $modulo = $_REQUEST['modulo'];
    $funcion = $_REQUEST['funcion'];
    $index = new Index($modulo,$funcion);
    $index->GenerarUrl();



?>