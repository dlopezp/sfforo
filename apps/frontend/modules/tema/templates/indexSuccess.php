<?php echo link_to('Nueva respuesta', url_for('@form_nueva_respuesta?slug_seccion='.$tema->getSeccion()->getSlug().'&slug_tema='.$tema->getSlug()), array('class' => 'btn btn-success')); ?>
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
<?php echo link_to('Nueva respuesta', url_for('@form_nueva_respuesta?slug_seccion='.$tema->getSeccion()->getSlug().'&slug_tema='.$tema->getSlug()), array('class' => 'btn btn-success')); ?>