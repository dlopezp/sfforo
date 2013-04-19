<?php include_component('comun', 'mapa', array('ruta' => array('seccion' => $seccion->getNombre(), 'slug_seccion' => $seccion->getSlug() ))); ?>
<h1>Temas sección <?php echo $seccion->getNombre(); ?></h1>
<a href="<?php echo url_for('@form_nuevo_tema?slug='.$seccion->getSlug()) ?>" class="btn btn-success"><i class="icon-white icon-comment"></i> Nuevo tema</a>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Tema</th>
      <th>Autor</th>
      <th>Respuestas</th>
      <th>Última respuesta</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($fijos as $fijo): ?>
    <tr>
      <td>
        <span class="label label-important"><i class="icon-white icon-tag"></i></span>        
        <?php echo link_to($fijo->getTitulo(), url_for('@ver_tema?slug_seccion='.$seccion->getSlug().'&slug_tema='.$fijo->getSlug())); ?>
        <br>
        <small><?php echo $fijo->getCreatedAt() ?></small>
      </td>
      <td><?php echo $fijo->getUsername() ?></td>
      <td><?php echo count($fijo->getRespuestas()); ?></td>
      <td>
        <small>
        <?php if($fijo->getUltimaRespuesta()): ?>
          <?php echo $fijo->getUltimaRespuesta()->getTitulo(); ?>
          <br>
          por <?php echo $fijo->getUltimaRespuesta()->getUsername() ?>
          <br>
          a las <?php echo $fijo->getUltimaRespuesta()->getCreatedAt() ?>
        <?php else: ?>
          No hay respuestas
        <?php endif; ?>
        </small>
      </td>
    </tr>
    <?php endforeach; ?>
    <tr id="separacion-fijos">
      <td colspan="4"></td>
    </tr>
    <?php foreach ($temas as $tema): ?>
    <tr>      
      <td>
        <?php echo link_to($tema->getTitulo(), url_for('@ver_tema?slug_seccion='.$seccion->getSlug().'&slug_tema='.$tema->getSlug())); ?>
        <br>
        <small><?php echo $tema->getCreatedAt() ?></small>
      </td>
      <td><?php echo $tema->getUsername() ?></td>
      <td><?php echo count($tema->getRespuestas()); ?></td>
      <td>
        <small>
        <?php if($tema->getUltimaRespuesta()): ?>
          <?php echo $tema->getUltimaRespuesta()->getTitulo(); ?>
          <br>
          por <?php echo $tema->getUltimaRespuesta()->getUsername() ?>
          <br>
          a las <?php echo $tema->getUltimaRespuesta()->getCreatedAt() ?>
        <?php else: ?>
          No hay respuestas
        <?php endif; ?>
        </small>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('@form_nuevo_tema?slug='.$seccion->getSlug()) ?>" class="btn btn-success"><i class="icon-white icon-comment"></i> Nuevo tema</a>
