<?php

//incluir el archivo principal
include("Slim/Slim.php");


//registran la instancia de slim
\Slim\Slim::registerAutoloader();
//aplicacion 
$app = new \Slim\Slim();


//routing 
//accediendo VIA URL
//http:///www.google.com/
//localhost/apirest/index.php/ => "Hola mundo ...."
$app->get(
    '/',function() use ($app){
    	
        $data = file_get_contents("employees.json");
        $products = json_decode($data, true);

        //print_r($products);
        
        for($i = 0; $i < count($products); $i++){
            $linea = '';
            $linea .= $products[$i]["name"] . "   _   "
            . $products[$i]["email"] . "   _    "
            .$products[$i]["position"] . "   _   "
            .  $products[$i]["salary"] . "   </br> ";
            echo $linea;
        }
                        
    }
)->setParams(array($app));



$app->get(
    '/email/:email',function($email) use ($app){
        
        $data = file_get_contents("employees.json");
        $products = json_decode($data, true);

    	$id = $email;

        for($i = 0; $i < count($products); $i++){
            $email = $products[$i]["email"] ;
            if($email == $id){
                $linea = '';
                $linea .= $products[$i]["name"] . "   _   "
                . $products[$i]["email"] . "   _    "
                .$products[$i]["position"] . "   _   "
                .  $products[$i]["salary"] . "   </br> ";
                echo $linea;
            }
        }
    }
);

//inicializamos la aplicacion(API)
$app->run();
