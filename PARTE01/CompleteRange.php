<?php
class CompleteRange {
        
    function build($array){
        
        sort($array);
        $inicio = $array[0];
        $fin = $array[(count($array))-1];
        
        $bandera = $this->verificarNumeroEntero($array);
        
        if($bandera === 0){
            if($inicio < 0 || $fin < 0){
                echo 'Usted a ingresado al menos un valor negativo</br>';
            } else {
                $arrayLocal = array();

            for($inicio; $inicio<= $fin; $inicio++){
                array_push($arrayLocal, $inicio);
            }

            echo   "<pre>";
            print_r($arrayLocal);
            echo   "<pre></br>";
            }    
        }else{
            echo 'Al menos un valor ingresado no es entero</br>';
        }
    }
    
    function verificarNumeroEntero($array){
        $bandera = 0;
        for($i=0; $i<count($array); $i++){
            if(!is_int($array[$i])){
                $bandera++;
            }
        }
        return $bandera;
    }
}

$complete = new CompleteRange();
$complete->build([1,2,4,5]);
$complete->build([2,4,9]);
$complete->build([55,58,60]);
$complete->build([55,58,-1]);
$complete->build([55,"miller",60]);
$complete->build([55,"50",60]);
