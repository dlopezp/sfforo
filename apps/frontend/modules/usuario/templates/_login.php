<<<<<<< HEAD
<div class="div-login-identificado">
  <?php echo $sf_user->getName().' ('.$sf_user->getUsername().')'; ?>
  <br>
  <a href="<?php echo url_for('@homepage'); ?>" class="btn btn-mini btn-success"><i class="icon-user icon-white"></i> Panel de control</a>
  <a href="<?php echo url_for('@sf_guard_signout'); ?>" class="btn btn-mini btn-danger"><i class="icon-remove-sign icon-white"></i> Cerrar sesión</a>
</div>
=======
<div id="div-login">
  <form class="well form-inline">
    <div id="div-login-inicio">
      <!--<button type="submit" class="btn btn-primary" id="btn-registrar">Regístrate</button>-->
	<?php echo button_to('Registrate', '/frontend_dev.php/form_user/new')?>
	
      <button type="submit" class="btn btn-warning" id="btn-identificar">Idéntificate</button>
    </div>
    <div id="div-login-entrar" class="hidden">
      <input type="text" class="input-small" placeholder="Username">
      <input type="password" class="input-small" placeholder="Password">
      <button type="submit" class="btn btn-success">Entrar</button>
      <br>
      <label class="checkbox">
        <input type="checkbox"> Recordar
      </label>
    </div>
  </form>
  <!--
  <div class="div-login-identificado">
    Nombre Completo (username)
    <br>
    <a href="#" class="btn btn-mini btn-success">Panel de control</a>
    <a href="#" class="btn btn-mini btn-danger">Cerrar sesion</a>
  </div>
  -->
</div>
>>>>>>> 1b3a4665cae2a09ad96fd04880ed5a2465319477
