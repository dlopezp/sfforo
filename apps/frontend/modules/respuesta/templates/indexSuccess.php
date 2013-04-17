<h1>Mensaje respuestas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Contenido</th>
      <th>Id autor</th>
      <th>Id tema</th>
      <th>Id seccion</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mensaje_respuestas as $mensaje_respuesta): ?>
    <tr>
      <td><a href="<?php echo url_for('respuesta/edit?id='.$mensaje_respuesta->getId()) ?>"><?php echo $mensaje_respuesta->getId() ?></a></td>
      <td><?php echo $mensaje_respuesta->getContenido() ?></td>
      <td><?php echo $mensaje_respuesta->getIdAutor() ?></td>
      <td><?php echo $mensaje_respuesta->getIdTema() ?></td>
      <td><?php echo $mensaje_respuesta->getIdSeccion() ?></td>
      <td><?php echo $mensaje_respuesta->getCreatedAt() ?></td>
      <td><?php echo $mensaje_respuesta->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('respuesta/new') ?>">New</a>
