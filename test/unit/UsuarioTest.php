<?php

  require_once dirname(__FILE__).'/../bootstrap/doctrine.php';
   
  $pruebas = 7;
  $test = new lime_test($pruebas, new lime_output_color());

  $usuario = new Usuario();

  $test->comment('Clase Usuario');
  $test->isa_ok($usuario, 'Usuario', 'Clase');

  $usuario = new Usuario();
  $nombreCompleto = 'nombre completo';
  $usuario->setNombreCompleto($nombreCompleto);
  $test->is($usuario->getNombreCompleto(), $nombreCompleto, 'getNombreCompleto()/setNombreCompleto()');

  $usuario = new Usuario();
  $username = 'username';
  $usuario->setUsername($username);
  $test->is($usuario->getUsername(), $username, 'getUsername()/setUsername()');

  $usuario = new Usuario();
  $password = 'password';
  $usuario->setPassword($password);
  $test->is($usuario->getPassword(), $password, 'getPassword()/setPassword()');

  $usuario = new Usuario();
  $rol = 1;
  $usuario->setIdRol($rol);
  $test->is($rol, $usuario->getIdRol(), 'getIdRol()/setIdRol()');

  $usuario = new Usuario();
  $nombreCompleto = 'nombre completo';
  $usuario->setNombreCompleto($nombreCompleto);
  $test->is($usuario->__toString(), $nombreCompleto, '__toString()');

  $usuario = new Usuario();
  $usuario->setNombreCompleto('nombre completo');
  $usuario->setUsername('username');
  $usuario->setPassword('password');
  $usuario->setIdRol(1);
  $usuario->save();
  $usuarioRecuperado = Doctrine::getTable('Usuario')->getById($usuario->getId());
  $test->is($usuarioRecuperado, $usuario, 'save()');

?>