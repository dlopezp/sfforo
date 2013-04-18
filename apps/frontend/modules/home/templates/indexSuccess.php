<?php include_component('comun', 'mapa', array('ruta' => array())); ?>
<table class="table table-striped table-bordered">
  <caption>Índice del foro</caption>
  <thead>
    <th>Foros</th>
    <th>Temas</th>
    <th>Mensajes</th>
    <th>Último mensaje</th>
  </thead>
  <tbody>
  <?php foreach($secciones as $seccion): ?>
    <tr>
      <td>
        <?php echo link_to($seccion->getNombre(), url_for('@ver_seccion?slug='.$seccion->getSlug())); ?>
        <br>
        <small><?php echo $seccion->getDescripcion(); ?></small>
      </td>
      <td><?php echo $seccion->getTemasTotales(); ?></td>
      <td><?php echo $seccion->getMensajesTotales(); ?></td>
      <td>
        <?php echo $seccion->getUltimoMensaje()->getTitulo(); ?>
        <br>
        por: <?php echo $seccion->getUltimoMensaje()->getUsername(); ?>
        <br>
        a las: <?php echo $seccion->getUltimoMensaje()->getCreatedAt(); ?>
      </td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>