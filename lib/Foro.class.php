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
  }

?>