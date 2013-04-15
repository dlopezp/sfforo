<h1>Temas sección <?php echo $seccion; ?></h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Tema</th>
      <th>Creador</th>
      <th>Creado en</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mensaje_temas as $mensaje_tema): ?>
    <tr>      
      <td><?php echo $mensaje_tema->getTitulo() ?></td>
      <td><?php echo $mensaje_tema->getUsername() ?></td>
      <td><?php echo $mensaje_tema->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('vertemas/new') ?>">Nuevo tema</a>
