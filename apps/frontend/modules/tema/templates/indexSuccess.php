<table class="table table-striped table-bordered">
  <thead>
    <th><?php echo $tema->getTitulo(); ?></th>
  </thead>
  <tr>
    <td>
      <?php echo $tema->getUsername(); ?>
    </td>
    <td>
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