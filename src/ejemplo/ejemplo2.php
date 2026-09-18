<?php

    //POST
    /*$_POST[''] */


    //GET
    if(isset($_GET['final'])){
        $valorFinal = $_GET['final'];
    }else{
        $valorFinal = 1;
    }


    for($i=0 ; $i < $valorFinal ; $i++){
        echo "Hola ".$i." veces."."</br>";
    }

    for($i=0 ; $i < 5 ; $i++){
        echo "Hola ".$i." veces"."</br>";
    }