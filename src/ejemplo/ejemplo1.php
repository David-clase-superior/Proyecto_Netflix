<?php
    $opcion1footer="Home";
    $opcion2footer="Ejercicio Siguiente";
    //$usuario="David";
    $variable = "Hola";

    echo "<h3>Esto es un titulo</h3>";
        echo "</br>";
    echo "<p class='parrafo'>Esto es un ejemplo de parrafo</p>";
        echo "</br>";
    echo 'El valor de la variable 1 es $variable';
        echo "</br>";
    echo "El valor de la variable 1 es $variable";
        echo "</br>";

    print("Esto es un mensaje con la funcion print");
    echo "</br>";
    echo "esto es una cadena "."y esto es otra cadena "."</br>";
?>
<p>Bienvenido <?php
    if(isset($usuario)){
        echo"$usuario";
    }else{
        echo "Sin nombre";
    }
?></p>
<a href="principal.php"><?php echo "$opcion1footer" ?></a>
</br>
<a href="principal.php"><?=$opcion2footer?></a>

