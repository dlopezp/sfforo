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

    $this->seccion = Doctrine::getTable('Seccion')
      ->findOneBy('slug', $request->getParameter('slug_seccion'));

    $this->respuestas = $this->tema->getRespuestas();
  }

  public function executeFijar(sfWebRequest $request)
  {
    $this->tema = Doctrine::getTable('MensajeTema')
      ->findOneBy('slug', $request->getParameter('slug_tema'));

    $this->tema->setFijo(true);

    $this->tema->save();

    $this->getUser()->setFlash('notice', 'Tema fijado correctamente');

    $this->redirect('@ver_seccion?slug_seccion='.$request->getParameter('slug_seccion'));
  }

  public function executeDesfijar(sfWebRequest $request)
  {
    $this->tema = Doctrine::getTable('MensajeTema')
      ->findOneBy('slug', $request->getParameter('slug_tema'));

    $this->tema->setFijo(false);

    $this->tema->save();

    $this->getUser()->setFlash('notice', 'Tema des-fijado correctamente');

    $this->redirect('@ver_seccion?slug_seccion='.$request->getParameter('slug_seccion'));
  }
}
