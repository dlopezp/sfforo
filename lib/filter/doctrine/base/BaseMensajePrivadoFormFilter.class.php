<?php

/**
 * MensajePrivado filter form base class.
 *
 * @package    sfforo
 * @subpackage filter
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMensajePrivadoFormFilter extends MensajeFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['titulo'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['titulo'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['id_destinatario'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true));
    $this->validatorSchema['id_destinatario'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuario'), 'column' => 'id'));

    $this->widgetSchema->setNameFormat('mensaje_privado_filters[%s]');
  }

  public function getModelName()
  {
    return 'MensajePrivado';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'titulo' => 'Text',
      'id_destinatario' => 'ForeignKey',
    ));
  }
}
