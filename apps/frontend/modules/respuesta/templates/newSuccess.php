<?php include_component('comun', 'mapa', array('ruta' => array('seccion' => $seccion->getNombre(), 'slug_seccion' => $seccion->getSlug(), 'tema' => $tema->getTitulo()))); ?>

<h1>Nueva respuesta para <strong><?php echo $tema->getTitulo() ?></strong></h1>

<?php include_partial('form', array('form' => $form)) ?>
