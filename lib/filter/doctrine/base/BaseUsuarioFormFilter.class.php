<?php

/**
 * Usuario filter form base class.
 *
 * @package    sfforo
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_completo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'username'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_rol'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Rol'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre_completo' => new sfValidatorPass(array('required' => false)),
      'username'        => new sfValidatorPass(array('required' => false)),
      'password'        => new sfValidatorPass(array('required' => false)),
      'id_rol'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Rol'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'nombre_completo' => 'Text',
      'username'        => 'Text',
      'password'        => 'Text',
      'id_rol'          => 'ForeignKey',
    );
  }
}
