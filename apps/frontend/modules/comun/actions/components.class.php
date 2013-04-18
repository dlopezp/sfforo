<?php

  class comunComponents extends sfComponents
  {
   /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeFooter(sfWebRequest $request)
    {

    }

    public function executeHeader(sfWebRequest $request)
    {
      if ($this->getUser()->isAuthenticated())
      {
        $this->componente = 'login';
      } 
      else 
      {
        $this->componente = 'noLogin';
      }
    }

    public function executeFlash(sfWebRequest $request)
    {

    }

    public function executeMapa(sfWebRequest $request)
    {
      $this->cantidad = count($this->ruta);
    }
  }

?>