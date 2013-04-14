<?php

/**
 * MensajeRespuesta form base class.
 *
 * @method MensajeRespuesta getObject() Returns the current form's model object
 *
 * @package    sfforo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMensajeRespuestaForm extends MensajeForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['id_tema'] = new sfWidgetFormInputHidden();
    $this->validatorSchema['id_tema'] = new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_tema')), 'empty_value' => $this->getObject()->get('id_tema'), 'required' => false));

    $this->widgetSchema->setNameFormat('mensaje_respuesta[%s]');
  }

  public function getModelName()
  {
    return 'MensajeRespuesta';
  }

}
