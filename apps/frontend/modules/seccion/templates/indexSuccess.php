<?php include_component('comun', 'mapa', array('ruta' => array('home' => 'Inicio', 'seccion' => $seccion->getNombre()))); ?>
<h1>Temas sección <?php echo $seccion->getNombre(); ?></h1>
<?php echo link_to('Nuevo tema', url_for('@form_nuevo_tema?slug='.$seccion->getSlug()), array('class' => 'btn btn-success')); ?>
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

<?php echo link_to('Nuevo tema', url_for('@form_nuevo_tema?slug='.$seccion->getSlug()), array('class' => 'btn btn-success')); ?>
