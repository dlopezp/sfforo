<?php

/**
 * MensajeTema form base class.
 *
 * @method MensajeTema getObject() Returns the current form's model object
 *
 * @package    sfforo
 * @subpackage form
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMensajeTemaForm extends MensajeForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['titulo'] = new sfWidgetFormInputText();
    $this->validatorSchema['titulo'] = new sfValidatorString(array('max_length' => 255));

    $this->widgetSchema   ['id_seccion'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Seccion'), 'add_empty' => false));
    $this->validatorSchema['id_seccion'] = new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Seccion')));

    $this->widgetSchema   ['fijo'] = new sfWidgetFormInputCheckbox();
    $this->validatorSchema['fijo'] = new sfValidatorBoolean();

    $this->widgetSchema->setNameFormat('mensaje_tema[%s]');
  }

  public function getModelName()
  {
    return 'MensajeTema';
  }

}
