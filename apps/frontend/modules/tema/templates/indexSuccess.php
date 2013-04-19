<?php include_component('comun', 'mapa', array('ruta' => array('seccion' => $seccion->getNombre(), 'slug_seccion' => $seccion->getSlug(), 'tema' => $tema->getTitulo()))); ?>
<a href="<?php echo url_for('@form_nueva_respuesta?slug_seccion='.$tema->getSeccion()->getSlug().'&slug_tema='.$tema->getSlug()) ?>" class="btn btn-success"><i class="icon-white icon-comment"></i> Nueva Respuesta</a>

<table class="table table-striped table-bordered">
  <thead>
    <th><?php echo $tema->getTitulo(); ?></th>
  </thead>
  <tr>
    <td class="span3">
      <?php echo $tema->getUsername(); ?>
    </td>
    <td class="span9">
      <?php echo $tema->getContenido(); ?>
    </td>
  </tr>
  <?php foreach($respuestas as $respuesta): ?>
  <tr>
    <td>
      <?php echo $respuesta->getUsername(); ?>
    </td>
    <td>
      <?php echo $respuesta->getContenido(); ?>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<a href="<?php echo url_for('@form_nueva_respuesta?slug_seccion='.$tema->getSeccion()->getSlug().'&slug_tema='.$tema->getSlug()) ?>" class="btn btn-success"><i class="icon-white icon-comment"></i> Nueva Respuesta</a>