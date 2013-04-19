<?php 

  /**
  * 
  */
  class Foro
  {
    
    static public function getSecciones()
    {
      return Doctrine::getTable('Seccion')
      ->createQuery()
      ->execute();
    }
    static public function getcuentaSecciones(){

      return count(self::getSecciones());
    }

    static public function getUser()
    {
      return Doctrine::getTable('sfGuardUser')
      ->createQuery()
      ->execute();
    }

    static public function getcuentaUser(){

      return count(self::getUser());
    }
  }

?>
