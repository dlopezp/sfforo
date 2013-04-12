<?php

  require_once dirname(__FILE__).'/../bootstrap/doctrine.php';
   
  $pruebas = 4;
  $test = new lime_test($pruebas, new lime_output_color());

  $test->comment('Clase Rol');

  //  Test 1
  $rol = new Rol();
  $test->isa_ok($rol, 'Rol', 'Clase');

  //  Test 2
  $rol = new Rol();
  $nombre = 'rol';
  $rol->setNombre($nombre);
  $test->is(
    $rol->getNombre(), 
    $nombre, 
    'setNombre() / getNombre()'
    );

  //  Test 3
  $rol = new Rol();
  $nombre = 'rol';
  $rol->setNombre($nombre);
  $rol->save();
  $rol_recuperado = Doctrine::getTable('Rol')
                              ->getById($rol->getId());
  $test->is(
    $rol_recuperado, 
    $rol, 
    'save() / getById()'
    );

  //  Test 4
  $id_rol = 1;
  $rol = Doctrine::getTable('Rol')->getById($id_rol);
  $usuarios = Doctrine::getTable('Usuario')
                        ->createQuery('usuario')
                        ->where('usuario.id_rol = ?', $id_rol)
                        ->execute();
  $test->is(
    count($rol->getUsuarios()), 
    count($usuarios), 
    'getUsuarios()'
    );

?>