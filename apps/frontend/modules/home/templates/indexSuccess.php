<table>
<?php foreach($secciones as $seccion): ?>
  <tr>
    <td><?php echo $seccion->getNombre(); ?></td>
  </tr>
<?php endforeach; ?>
</table>