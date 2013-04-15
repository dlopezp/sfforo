<h1>Temas sección <?php echo $seccion->getNombre(); ?></h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Tema</th>
      <th>Creador</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mensaje_temas as $tema): ?>
    <tr>      
      <td>
        <?php echo link_to($tema->getTitulo(), 'tema/index?id='.$tema->getId()); ?>
        <br>
        <small><?php echo $tema->getCreatedAt() ?></small>
      </td>
      <td><?php echo $tema->getUsername() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php echo link_to('Nuevo tema', url_for('seccion/new?id='.$seccion->getId()), array('class' => 'btn btn-success')); ?>
