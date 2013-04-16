<?php 

  require_once dirname(__FILE__).'/../bootstrap/doctrine.php';
   
  $pruebas = 5;
  $test = new lime_test($pruebas, new lime_output_color());

  $test->comment('Clase Mensaje');

  //  Test 1
  $mensaje = new Mensaje();
  $test->isa_ok(
    $mensaje, 
    'Mensaje', 
    'Clase'
    );

  //  Test2
  $mensaje = new Mensaje();
  $id_autor = 1;
  $mensaje->setIdAutor($id_autor);
  $test->is(
    $mensaje->getIdAutor(), 
    $id_autor, 
    'setIdAutor() / getIdAutor()'
    );

  //  Test3
  $mensaje = new Mensaje();
  $usuario = new sfGuardUser();
  $mensaje->setAutor($usuario);
  $test->is(
    $mensaje->getAutor(), 
    $usuario, 
    'setAutor() / getAutor()'
    );

  //  Test4
  $mensaje = new Mensaje();
  $contenido = 'contenido';
  $mensaje->setContenido($contenido);
  $test->is(
    $mensaje->getContenido(), 
    $contenido, 
    'setContenido() / getContenido()'
    );

  //  Test5
  $mensaje = new Mensaje();
  $id = 1;
  $usuario = Doctrine::getTable('Usuario')->find($id);
  $mensaje->setIdAutor($id);
  $test->is(
    $mensaje->getUsername(), 
    $usuario->getUsername(), 
    'getUsername()'
    );

?>