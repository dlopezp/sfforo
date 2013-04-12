<table class="table table-striped table-bordered">
  <thead>
    <th>Índice del foro <?php echo $nombre; ?></th>
  </thead>
<?php foreach($temas as $tema): ?>
  <tr>
    <td>
      <?php echo link_to($tema->getTitulo(), 'tema/index?id='.$tema->getId()); ?>
    </td>
  </tr>
<?php endforeach; ?>
</table>