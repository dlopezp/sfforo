<?php

/**
 * usuario actions.
 *
 * @package    sfforo
 * @subpackage usuario
 * @author     Daniel López
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usuarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_guard_users = Doctrine_Core::getTable('sfGuardUser')
      ->createQuery('a')
      ->execute();

  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sfGuardUserForm();
  
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardUserForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('@homepage');
  }

  public function executeEdit(sfWebRequest $request)

  {

   $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))));

    $this->form = new sfGuardUserForm($sf_guard_user);
    
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardUserForm($sf_guard_user);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
    
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
    $sf_guard_user->delete();

    $this->redirect('usuario/index');
  }


  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_guard_user = $form->save();
	  if(!$form->getObject()->isNew()){
      	$this->getUser()->setFlash('notice', 'Datos modificados correctamente. ');
      }
      else{
        $this->getUser()->setFlash('notice', 'Se ha registrado correctamente. Ya puede identificarse.');
      	//  Envío de email de confirmación
      $usuario=$sf_guard_user->getFirstName();
      $valores = $request->getParameter($form->getName());
      $password = $valores['password'];
      $email=$sf_guard_user->getEmailAddress();
      $nick=$sf_guard_user->getUsername();
    
      $mailer=$this->getMailer()->compose(
        'sfforo@gmail.com',
        $email,
        'Prueba',
        'Hola '.$usuario.'
    
Le informamos que su registro en el foro ha sido satisfactorio.
Su  nombre de usuario es: '.$nick.'
Y su password es: '.$password.'

Un saludo'
      );
      $this->getMailer()->send($mailer);
      //  Fin envío de email de confirmación

      }

      $this->redirect('@homepage');
      
    }
  }

}
