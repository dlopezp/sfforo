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

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sf_guard_user = Doctrine_Core::getTable('sfGuardUser')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_user does not exist (%s).', $request->getParameter('id')));
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
<<<<<<< HEAD
      $this->getUser()->setFlash('notice', 'Se ha registrado correctamente. ya puede identificarse.');
      
      #Mandar un mensaje
      
	  $usuario=$sf_guard_user->getFirstName();
	  $email=$sf_guard_user->getEmailAddress();
	  $nick=$sf_guard_user->getUsername();
	  
      $mailer=$this->getMailer()->compose(
		'sfforo@gmail.com',
		$email,
		'Prueba',
		'Hola '.$usuario.'
		
Le informamos que su registro en el foro ha sido satisfactorio.
Su  nombre de usuario es:
	'.$nick.'
			
				Un saludo'
		
      
      );
      $this->getMailer()->send($mailer);
=======
      
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

>>>>>>> 8d7ac4d7f7e6f94776d3dc2c2ef580b4e1276295
      $this->redirect('@homepage');
      
    }
  }

}
