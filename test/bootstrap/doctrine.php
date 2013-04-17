<?php

  include dirname(__FILE__).'/unit.php';

  $configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'test', true);
  new SfDatabaseManager($configuration);

  function loadData($file = null)
  {
    Doctrine_Core::loadData(sfConfig::get('sf_test_dir').'/fixtures');
  }

  function clean()
  {
    $doctrine = new sfDoctrineDropDbTask($configuration->getEventDispatcher(), new sfAnsiColorFormatter());
    $doctrine->run(array(), array("--no-confirmation","--env=test"));

    $doctrine = new sfDoctrineBuildDbTask($configuration->getEventDispatcher(), new sfAnsiColorFormatter());
    $doctrine->run(array(), array("--env=test"));

    $doctrine = new sfDoctrineInsertSqlTask($configuration->getEventDispatcher(), new sfAnsiColorFormatter());
    $doctrine->run(array(), array("--env=test"));
  }

?>