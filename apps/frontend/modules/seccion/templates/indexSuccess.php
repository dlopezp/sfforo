<h1>Temas sección <?php echo $seccion->getNombre(); ?></h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Tema</th>
      <th>Por</th>
      <th>Respuestas</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mensaje_temas as $tema): ?>
    <tr>      
      <td>
        <?php echo link_to($tema->getTitulo(), url_for('@ver_tema?slug_seccion='.$seccion->getSlug().'&slug_tema='.$tema->getSlug())); ?>
        <br>
        <small><?php echo $tema->getCreatedAt() ?></small>
      </td>
      <td><?php echo $tema->getUsername() ?></td>
      <th><?php echo count($tema->getRespuestas()); ?></th>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php echo link_to('Nuevo tema', url_for('@form_nuevo_tema?slug='.$seccion->getSlug()), array('class' => 'btn btn-success')); ?>
