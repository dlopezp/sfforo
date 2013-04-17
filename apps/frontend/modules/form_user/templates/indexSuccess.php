<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre completo</th>
      <th>Username</th>
      <th>Password</th>
      <th>Id rol</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('form_user/edit?id='.$usuario->getId()) ?>"><?php echo $usuario->getId() ?></a></td>
      <td><?php echo $usuario->getNombreCompleto() ?></td>
      <td><?php echo $usuario->getUsername() ?></td>
      <td><?php echo $usuario->getPassword() ?></td>
      <td><?php echo $usuario->getIdRol() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('form_user/new') ?>">New</a>
