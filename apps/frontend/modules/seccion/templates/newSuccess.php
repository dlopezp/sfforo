<?php include_component('comun', 'mapa', array('ruta' => array('seccion' => $seccion->getNombre(), 'slug_seccion' => $seccion->getSlug() ))); ?>

<h1>Nuevo Tema sección <?php echo $seccion->getNombre(); ?></h1>

<?php include_partial('form', array(
  'form'      => $form, 
  'seccion'   => $seccion
  )) ?>
