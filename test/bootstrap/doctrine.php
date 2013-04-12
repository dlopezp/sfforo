<?php

  include dirname(__FILE__).'/unit.php';

  $configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'test', true);
  new SfDatabaseManager($configuration);

  function loadData($file = null)
  {
    Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');
  }

?>