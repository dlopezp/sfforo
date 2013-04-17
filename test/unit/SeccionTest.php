<?php

  require_once dirname(__FILE__).'/../bootstrap/doctrine.php';
   
  $pruebas = 6;
  $test = new lime_test($pruebas, new lime_output_color());

  $test->comment('Clase Seccion');

  //  Test 1
  $seccion = new Seccion();
  $test->isa_ok($seccion, 'Seccion', 'Clase');

  //  Test 2
  $seccion = new Seccion();
  $nombre = 'seccion';
  $seccion->setNombre($nombre);
  $test->is(
    $seccion->getNombre(), 
    $nombre, 
    'getNombre() / setNombre()'
    );

  //  Test 3
  $seccion = new Seccion();
  $descripcion = 'descripcion';
  $seccion->setDescripcion($descripcion);
  $test->is(
    $seccion->getDescripcion(), 
    $descripcion, 
    'setDescripcion() / getDescripcion()'
    );

  //  Test 4
  $seccion = new Seccion();
  $nombre = 'seccion';
  $seccion->setNombre($nombre);
  $descripcion = 'descripcion';
  $seccion->setDescripcion($descripcion);
  $seccion->save();
  $seccion_recuperada = Doctrine::getTable('Seccion')->find($seccion->getId());
  $test->is(
    $seccion_recuperada, 
    $seccion, 
    'save() / getById() / getId()'
    );
  
  //  Test 5
  $id_seccion = 2;
  $seccion = Doctrine::getTable('Seccion')->find($id_seccion);
  $temas = Doctrine::getTable('MensajeTema')->findBy('id_seccion', $seccion->getId());
  $test->is(
    $seccion->getTemasTotales(), 
    count($temas), 
    'getTemasTotales()'
    );

  //  Test 6
  $id_seccion = 2;
  $seccion = Doctrine::getTable('Seccion')->find($id_seccion);
  $temas = Doctrine::getTable('MensajeTema')->findBy('id_seccion', $seccion->getId());
  $test->is(
    $seccion->getTemas(), 
    $temas, 
    'getTemasTotales()'
    );

?>