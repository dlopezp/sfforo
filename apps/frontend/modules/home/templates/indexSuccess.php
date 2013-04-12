<table class="table table-striped table-bordered">
  <thead>
    <th>Índice del foro</th>
  </thead>
  <tbody>
  <?php foreach($secciones as $seccion): ?>
    <tr>
      <td>
        <?php echo link_to($seccion->getNombre(), 'seccion/index?id='.$seccion->getId()); ?>
        <br>
        <?php echo $seccion->getDescripcion(); ?>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>