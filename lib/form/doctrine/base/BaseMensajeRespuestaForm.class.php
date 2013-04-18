<?php

/**
 * MensajeRespuesta form base class.
 *
 * @method MensajeRespuesta getObject() Returns the current form's model object
 *
 * @package    sfforo
 * @subpackage form
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMensajeRespuestaForm extends MensajeForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['id_tema'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MensajeTema'), 'add_empty' => false));
    $this->validatorSchema['id_tema'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MensajeTema')));

    $this->widgetSchema   ['id_seccion'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Seccion'), 'add_empty' => false));
    $this->validatorSchema['id_seccion'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Seccion')));

    $this->widgetSchema->setNameFormat('mensaje_respuesta[%s]');
  }

  public function getModelName()
  {
    return 'MensajeRespuesta';
  }

}
