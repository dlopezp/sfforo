<?php

/**
 * MensajeRespuesta filter form base class.
 *
 * @package    sfforo
 * @subpackage filter
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMensajeRespuestaFormFilter extends MensajeFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['id_tema'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MensajeTema'), 'add_empty' => true));
    $this->validatorSchema['id_tema'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MensajeTema'), 'column' => 'id'));

    $this->widgetSchema   ['id_seccion'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Seccion'), 'add_empty' => true));
    $this->validatorSchema['id_seccion'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Seccion'), 'column' => 'id'));

    $this->widgetSchema->setNameFormat('mensaje_respuesta_filters[%s]');
  }

  public function getModelName()
  {
    return 'MensajeRespuesta';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'id_tema' => 'ForeignKey',
      'id_seccion' => 'ForeignKey',
    ));
  }
}
