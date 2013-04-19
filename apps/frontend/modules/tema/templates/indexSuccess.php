<?php include_component('comun', 'mapa', array('ruta' => array('seccion' => $seccion->getNombre(), 'slug_seccion' => $seccion->getSlug(), 'tema' => $tema->getTitulo()))); ?>
<?php if($sf_user->hasGroup('administrador')): ?>
  <a class="btn btn-inverse" href="<?php echo url_for('@fijar_tema?slug_seccion='.$tema->getSeccion()->getSlug().'&slug_tema='.$tema->getSlug()); ?>">
    <i class="icon-white icon-tag"></i> 
    Fijar Tema
  </a>
<?php endif; ?>

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