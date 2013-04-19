<?php

/**
 * home actions.
 *
 * @package    sfforo
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->secciones = Foro::getSecciones();
    
    $this->numSecc = Foro::getcuentaSecciones();

    $this->numUser = Foro::getcuentaUser();
  }
  
}
