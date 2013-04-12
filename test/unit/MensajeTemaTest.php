<?php

  require_once dirname(__FILE__).'/../bootstrap/doctrine.php';

  $pruebas = 6;
  $test = new lime_test($pruebas, new lime_output_color());

  $test->comment('Clase Usuario');

  //  Test 1
  $tema = new MensajeTema();
  $test->isa_ok(
    $tema, 
    'MensajeTema', 
    'Clase'
    );

  //  Test 2
  $tema = new MensajeTema();
  $titulo = 'titulo';
  $tema->setTitulo($titulo);
  $test->is(
    $tema->getTitulo(), 
    $titulo, 
    'setTitulo() / getTitulo()'
    );

  //  Test 3
  $tema = new MensajeTema();
  $id_seccion = 1;
  $tema->setIdSeccion($id_seccion);
  $test->is(
    $tema->getIdSeccion(), 
    $id_seccion, 
    'setIdSeccion() / getIdSeccion()'
    );

  //  Test 4
  $tema = new MensajeTema();
  $fijo = true;
  $tema->setFijo($fijo);
  $test->is(
    $tema->getFijo(), 
    $fijo, 
    'setFijo() / getFijo()'
    );

  //  Test 5
  $tema = new MensajeTema();
  $id_seccion = 1;
  $seccion = Doctrine::getTable('Seccion')->find($id_seccion);
  $tema->setSeccion($seccion);
  $test->is(
    $tema->getSeccion(), 
    $seccion, 
    'setSeccion() / getSeccion()'
    );

  //  Test 6
  $id_tema = 2;
  $tema = Doctrine::getTable('MensajeTema')->find($id_tema);
  $respuestas = Doctrine::getTable('MensajeRespuesta')->findBy('id_tema', $id_tema);
  $test->is(
    count($tema->getRespuestas()), 
    count($respuestas), 
    'getRespuestas()'
    );

?>