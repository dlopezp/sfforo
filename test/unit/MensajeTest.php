<?php 

  require_once dirname(__FILE__).'/../bootstrap/doctrine.php';
   
  $pruebas = 1;
  $test = new lime_test($pruebas, new lime_output_color());

  $test->comment('Clase Mensaje');

  //  Test 1
  $rol = new Mensaje();
  $test->isa_ok($rol, 'Mensaje', 'Clase');

?>