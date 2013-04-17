<?php

/**
 * tema actions.
 *
 * @package    sfforo
 * @subpackage tema
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class temaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->tema = Doctrine::getTable('MensajeTema')
      ->findOneBy('slug', $request->getParameter('slug_tema'));

    $this->respuestas = $this->tema->getRespuestas();
  }
}
