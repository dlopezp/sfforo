<table class="table table-striped table-bordered">
  <thead>
    <th>Índice del foro <?php echo button_to('Añadir Tema','form_Section/new')?></th>
  </thead>
  <tbody>
  <?php foreach($secciones as $seccion): ?>
    <tr>
      <td>
        <?php echo link_to($seccion->getNombre(), 'seccion/index?id='.$seccion->getId()); ?>
        <br>
        <small><?php echo $seccion->getDescripcion(); ?></small>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
