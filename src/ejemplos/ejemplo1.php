<?php
$opcionfooter = "Home";
$opcion2footer = "Ejercicio siguiente";
$variable = "Hola";
$usuario = "Moises";

echo "<h3>Esto es un titulo</h3>";
echo "<p class='parrafo'>Esto es un ejemplo de parrafo</p>";
echo "El valor de la variable 1 es $variable";
echo 'El valor de la variable 1 es $variable';
print("Hola esto es un mensaje print");
echo "<br>";
echo "esto es una cadena " . "y esta otra" . "<br>";
?>
<p>Bienvenido <?php
    if (isset($usuario)) {
        echo $usuario;
    } else {
        echo "Sin nombre";
    }
    ?></p>
<a href="ejercicio1.php"> Volver a la pagina principal </a>
<a href="index.php"><?= $opcionfooter ?></a>
<a href="ejemplo2.php"><?= $opcion2footer ?></a>