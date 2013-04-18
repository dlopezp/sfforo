<?php

/**
 * respuesta actions.
 *
 * @package    sfforo
 * @subpackage respuesta
 * @author     Daniel López
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class respuestaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mensaje_respuestas = Doctrine_Core::getTable('MensajeRespuesta')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MensajeRespuestaForm();
    $this->seccion = Doctrine::getTable('Seccion')
      ->findOneBy('slug', $request->getParameter('slug_seccion'));

    $this->tema = Doctrine::getTable('MensajeTema')
      ->findOneBy('slug', $request->getParameter('slug_tema'));

    $this->form->setDefault('id_seccion', $this->seccion->getId());
    $this->form->setDefault('id_autor', $this->getUser()->getGuardUser()->getId());
    $this->form->setDefault('id_tema', $this->tema->getId());
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MensajeRespuestaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mensaje_respuesta = Doctrine_Core::getTable('MensajeRespuesta')->find(array($request->getParameter('id'))), sprintf('Object mensaje_respuesta does not exist (%s).', $request->getParameter('id')));
    $this->form = new MensajeRespuestaForm($mensaje_respuesta);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mensaje_respuesta = Doctrine_Core::getTable('MensajeRespuesta')->find(array($request->getParameter('id'))), sprintf('Object mensaje_respuesta does not exist (%s).', $request->getParameter('id')));
    $this->form = new MensajeRespuestaForm($mensaje_respuesta);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mensaje_respuesta = Doctrine_Core::getTable('MensajeRespuesta')->find(array($request->getParameter('id'))), sprintf('Object mensaje_respuesta does not exist (%s).', $request->getParameter('id')));
    $mensaje_respuesta->delete();

    $this->redirect('respuesta/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mensaje_respuesta = $form->save();

      $valores = $request->getParameter($form->getName());

      $this->seccion = Doctrine::getTable('Seccion')
        ->find($valores['id_seccion']);

      $this->tema = Doctrine::getTable('MensajeTema')
        ->find($valores['id_tema']);

      $this->getUser()->setFlash('notice', 'Su respuesta ha sido enviada correctamente.');

      $this->redirect('@ver_tema?slug_seccion='.$this->seccion->getSlug().'&slug_tema='.$this->tema->getSlug());
    }
  }
}
