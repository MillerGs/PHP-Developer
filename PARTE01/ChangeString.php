<?php
class ChangeString {
    
    var $variable ;
    var $abcdario = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
       
    function build($variable){
        
        for($i=0;$i<strlen($variable);$i++){ 
          echo $this->obtenerSiguienteLetra($variable{$i});
        } 
        
        echo "</br>";
    }
    
    function obtenerSiguienteLetra($letra){
        $clave = array_search(strtolower($letra), $this->abcdario);
        if(!$clave && $clave !== 0){
            return $letra;
        } else {
            $i = $this->obtenerNuevoIndice($clave);
            if(strcmp($letra, $this->abcdario{$clave}) == 0){
                return $this->abcdario{$i};
            } else {
                return strtoupper($this->abcdario{$i});
            }
        }
    }
    
    function obtenerNuevoIndice($clave){
        if( ($clave + 1 ) == count($this->abcdario)){
                return 0;
            } else {
                return $clave+1;
            }
    }
}


$ChangeString = new ChangeString();

$ChangeString->build("123 abcd*3");
$ChangeString->build("**Casa 52");
$ChangeString->build("**Casa 52Z");
$ChangeString->build("a");

/*
$ChangeString->build("a");
$ChangeString->build("A");
$ChangeString->build("1");
$ChangeString->build("a");
*/