<?php

/**
 * MensajeTema form.
 *
 * @package    sfforo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MensajeTemaForm extends BaseMensajeTemaForm
{
  /**
   * @see MensajeForm
   */
  public function configure()
  {
    parent::configure();
    /*
    unset($this->validatorSchema['created_at']);
    unset($this->widgetSchema['created_at']);

    unset($this->validatorSchema['updated_at']);
    unset($this->widgetSchema['updated_at']);

    unset($this->validatorSchema['fijo']);
    unset($this->widgetSchema['fijo']);

    unset($this->validatorSchema['id']);
    unset($this->widgetSchema['id']);

    $this->widgetSchema['id_seccion'] = new sfWidgetFormInputHidden();
    */
  }
}
