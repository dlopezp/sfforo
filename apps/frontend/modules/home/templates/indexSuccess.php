<table class="table table-striped table-bordered">
  <caption>Índice del foro</caption>
  <thead>
<<<<<<< HEAD
    <th>Índice del foro <?php echo button_to('Añadir Tema','form_Section/new')?></th>
=======
    <th>Foros</th>
    <th>Temas</th>
    <th>Mensajes</th>
    <th>Último mensaje</th>
>>>>>>> 17d10ae0259514c4cdc7e2206270123a69c96f20
  </thead>
  <tbody>
  <?php foreach($secciones as $seccion): ?>
    <tr>
      <td>
        <?php echo link_to($seccion->getNombre(), url_for('@verSeccion?slug='.$seccion->getSlug())); ?>
        <br>
        <small><?php echo $seccion->getDescripcion(); ?></small>
      </td>
      <td><?php echo $seccion->getTemasTotales(); ?></td>
      <td><?php echo $seccion->getMensajesTotales(); ?></td>
      <td><?php echo $seccion->getUltimoMensaje()->getTitulo(); ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
