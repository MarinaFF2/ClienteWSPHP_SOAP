<?php

$options = array(
    'location' => 'http://localhost/WServ/Clase/EjemploSW/servicioWebsoap.php',
    'uri' => 'http://localhost/WServ/Clase/EjemploSW//'
);
$hdl = new SoapClient(null, $options);

echo $hdl->enviar_respuesta('DAW2') . '<br>';

print_r($hdl->echoTwoStrings('Hola',' DAW2 '));
echo '<br>';
echo($hdl->echoTwoStringsJSON('Esto lo devuelve ', ' en JSON'));
var_dump($hdl->echoTwoStringsJSON('Esto lo devuelve ', ' en JSON'));
