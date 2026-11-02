<?php
function saludo(int $parametro1, string $parametro2, float $parametro3, bool $parametro4 = false) {
    return "Hola";
}
function saludo2(callable $parametro1,array $parametro2,bool $parametro3=false){
    return null;
}
saludo(parametro1: 5,parametro2: "Hola",parametro3: 3.4,    parametro4);
