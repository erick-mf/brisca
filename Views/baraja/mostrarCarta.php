<?php

echo "<a href='index.php'>Regresar el inicio</a><br><br>";

$image = './assets/img/'.strtolower($carta->getPalo()).'_'.$carta->getNumero().'.jpg';

if (file_exists($image)) {
    echo "<img src='$image'/>";
} else {
    echo 'No tenemos la imagen de esta carta';
}
