<?php

/**
 * MensajeTema filter form base class.
 *
 * @package    sfforo
 * @subpackage filter
 * @author     Daniel López
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMensajeTemaFormFilter extends MensajeFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['titulo'] = new sfWidgetFormFilterInput(array('with_empty' => false));
    $this->validatorSchema['titulo'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema   ['id_seccion'] = new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Seccion'), 'add_empty' => true));
    $this->validatorSchema['id_seccion'] = new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Seccion'), 'column' => 'id'));

    $this->widgetSchema   ['fijo'] = new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no')));
    $this->validatorSchema['fijo'] = new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0)));

    $this->widgetSchema   ['slug'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['slug'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('mensaje_tema_filters[%s]');
  }

  public function getModelName()
  {
    return 'MensajeTema';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'titulo' => 'Text',
      'id_seccion' => 'ForeignKey',
      'fijo' => 'Boolean',
      'slug' => 'Text',
    ));
  }
}
