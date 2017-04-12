<?php
class ClearPar {
    
    function build($string){
        $cantidad= substr_count($string, '()');
        echo str_repeat("()", $cantidad);
        echo "</br>";
    }
}

$clear = new ClearPar();
$clear->build("()())()");
$clear->build("()(()");
$clear->build(")(");
$clear->build("((()");