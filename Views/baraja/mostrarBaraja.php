<?php

echo "<a href='index.php'>Regresar el inicio</a><br><br>";
if (! is_dir('assets/img')) {
    echo 'No tenemos imagenes';
} else {
    foreach ($mazo as $carta) {
        $image = './assets/img/'.strtolower($carta->getPalo()).'_'.$carta->getNumero().'.jpg';
        if (file_exists($image)) {
            echo "<img src='$image'/>";
        } else {
            echo 'No tenemos la imagen de esta carta';
        }
    }
}
