
<div class="div-login-identificado">
  <?php echo $sf_user->getName().' ('.$sf_user->getUsername().')'; ?>
  <br>
  <a href="<?php echo url_for('@editar_usuario?id='.$sf_user->getGuardUser()->getId()); ?>" class="btn btn-mini btn-success"><i class="icon-user icon-white"></i> Panel de control</a>
  <a href="<?php echo url_for('@sf_guard_signout'); ?>" class="btn btn-mini btn-danger"><i class="icon-off icon-white"></i> Cerrar sesión</a>
</div>

