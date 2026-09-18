<?php
declare(strict_types=1);
function saludo(int $parametro1, string $parametro2, float $parametro3, bool $parametro4=false):string|boolean{ //devolver tanto sting como boolean :?string o nada...
    return "Hola";
}

function saludo2(callable $parametro1,array $parametro2){
    return null;
}

saludo(5,"hola",3.5,false);