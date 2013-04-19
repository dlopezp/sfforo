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
    
    
    static public function getNumeroSecciones(){
		
		/*$consulta_seccion = Doctrine::getTable('Seccion')
		->createQuery()
		->execute();
	
		return count($consulta_seccion);*/
		
		return count(self::getSecciones());
	}
  }
  ?>
