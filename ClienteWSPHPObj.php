<?php

// *** The SOAP way: using a class remotely ***

  $options = array(
    'location' => 'http://localhost/WServ/Clase/EjemploSW/ServidorWSPHPObj.php',
    'uri'      => 'http://localhost/WServ/Clase/EjemploSW/'
  );
  $hdl = new SoapClient(null, $options);

  $data = $hdl->suma(4, 5);

  echo 'Resultado de la llamada al servicio web (suma(4,5))= '.$data.'<br>';
  
  $res = $hdl->resta(18, 36);
  echo 'Resultado de la llamada al servicio web (resta(18, 36))= '.$res;
  