<?php

/**
 * seccion actions.
 *
 * @package    sfforo
 * @subpackage seccion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class seccionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    //$this->forward('default', 'module');
    $this->nombre = Doctrine
                      ::getTable('Seccion')
                      ->find($request->getParameter('id'))
                      ->getNombre();
    $this->temas = Doctrine
                    ::getTable('MensajeTema')
                    ->createQuery('tema')
                    ->where('tema.id_seccion = ?', $request->getParameter('id'))
                    ->execute();
  }
}
