<?php

/**
 * MensajePrivado form base class.
 *
 * @method MensajePrivado getObject() Returns the current form's model object
 *
 * @package    sfforo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMensajePrivadoForm extends MensajeForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['titulo'] = new sfWidgetFormInputText();
    $this->validatorSchema['titulo'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['id_destinatario'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => false));
    $this->validatorSchema['id_destinatario'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario')));

    $this->widgetSchema->setNameFormat('mensaje_privado[%s]');
  }

  public function getModelName()
  {
    return 'MensajePrivado';
  }

}
