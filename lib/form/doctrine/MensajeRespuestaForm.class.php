<?php

/**
 * MensajeRespuesta form.
 *
 * @package    sfforo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MensajeRespuestaForm extends BaseMensajeRespuestaForm
{
  /**
   * @see MensajeForm
   */
  public function configure()
  {
    parent::configure();

    unset($this->widgetSchema['created_at']);
    unset($this->validatorSchema['created_at']);

    unset($this->widgetSchema['updated_at']);
    unset($this->validatorSchema['updated_at']);

    $this->widgetSchema['id_tema'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['id_seccion'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['id_autor'] = new sfWidgetFormInputHidden();

  }
}
