<div class="div-login-identificado">
  <?php echo $sf_user->getName().' ('.$sf_user->getUsername().')'; ?>
  <br>
  <?php echo link_to('Panel de control', '@homepage', array('class' => 'btn btn-mini btn-success')) ?>
  <?php echo link_to('Cerrar sesion', '@sf_guard_signout', array('class' => 'btn btn-mini btn-danger')) ?>
</div>