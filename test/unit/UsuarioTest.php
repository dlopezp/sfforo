<?php

  require_once dirname(__FILE__).'/../bootstrap/doctrine.php';
   
  $pruebas = 8;
  $test = new lime_test($pruebas, new lime_output_color());

  $test->comment('Clase Usuario');

  //  Test 1
  $usuario = new Usuario();
  $test->isa_ok(
    $usuario, 
    'Usuario', 
    'Clase'
    );

  //  Test 2
  $usuario = new Usuario();
  $nombreCompleto = 'nombre completo';
  $usuario->setNombreCompleto($nombreCompleto);
  $test->is(
    $usuario->getNombreCompleto(), 
    $nombreCompleto, 
    'getNombreCompleto()/setNombreCompleto()'
    );

  //  Test 3
  $usuario = new Usuario();
  $username = 'username';
  $usuario->setUsername($username);
  $test->is(
    $usuario->getUsername(), 
    $username, 
    'getUsername()/setUsername()'
    );

  //  Test 4
  $usuario = new Usuario();
  $password = 'password';
  $usuario->setPassword($password);
  $test->is(
    $usuario->getPassword(), 
    $password, 
    'getPassword()/setPassword()'
    );

  //  Test 5
  $usuario = new Usuario();
  $rol = 1;
  $usuario->setIdRol($rol);
  $test->is(
    $rol, 
    $usuario->getIdRol(), 
    'getIdRol()/setIdRol()'
    );

  //  Test 6
  $usuario = new Usuario();
  $nombreCompleto = 'nombre completo';
  $usuario->setNombreCompleto($nombreCompleto);
  $test->is(
    $usuario->__toString(), 
    $nombreCompleto, 
    '__toString()'
    );

  //  Test 7
  $usuario = new Usuario();
  $usuario->setNombreCompleto('nombre completo');
  $usuario->setUsername('username');
  $usuario->setPassword('password');
  $usuario->setIdRol(1);
  $usuario->save();
  $usuario_recuperado = Doctrine::getTable('Usuario')->find($usuario->getId());
  $test->is(
    $usuario_recuperado,
     $usuario, 
     'save() / getById()'
     );

  //  Test 8
  $id_usuario = 3;
  $usuario = UsuarioTable::getInstance()->find($id_usuario);
  $mensajes = MensajeTable::getInstance()->findBy('id_autor', $id_usuario);
  $test->is(
    count($usuario->getMensajes()), 
    count($mensajes), 
    'getMensajes()'
    );

?>