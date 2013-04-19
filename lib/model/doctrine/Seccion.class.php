<?php

/**
 * Seccion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sfforo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Seccion extends BaseSeccion
{  
	
  static public function getNumTemas()
  {
	  $num_temas=Doctrine::getTable('MensajeTema')
	  ->createQuery()
	  ->execute();
	  
	  return count($num_temas);
  }
  
  static public function getNumMensajes()
  {
	  //numero de temas
	$consulta_mens = Doctrine::getTable('MensajeRespuesta')
		->createQuery()
		->execute();
	
	$num_mensa = count($consulta_mens);
		//numero de mensajes
		
	$num_tema = self::getNumTemas();
	
	$num_mens=$num_tema+$num_mensa;
	
	return $num_mens;
	
  }

  public function getTemasTotales()
  {
    return count($this->getTemas());
  }

  public function getTemasOrdenados()
  {
    return Doctrine::getTable('MensajeTema')
      ->createQuery('t')
      ->where('t.id_seccion = ?', $this->getId())
      ->orderBy('t.updated_at DESC')
      ->execute();
  }

  public function getMensajesTotales()
  {
    return $this->getTemasTotales() + count($this->getRespuestas());
  }

  public function getUltimoMensaje()
  {
    $ultimoTema = Doctrine::getTable('MensajeTema')
      ->createQuery('t')
      ->where('t.id_seccion = ?', $this->getId())
      ->orderBy('t.created_at DESC')
      ->fetchOne();

    $ultimaRespuesta = Doctrine::getTable('MensajeRespuesta')
      ->createQuery('r')
      ->where('r.id_seccion = ?', $this->getId())
      ->orderBy('r.created_at DESC')
      ->fetchOne();

    if(!$ultimoTema && !$ultimaRespuesta) {
      return null;
    } else {
      $ultimo = (new DateTime($ultimoTema->getCreatedAt()) > new DateTime($ultimaRespuesta->getCreatedAt())) ? $ultimoTema : $ultimaRespuesta;
    }
 
    return $ultimo;
  }
}
