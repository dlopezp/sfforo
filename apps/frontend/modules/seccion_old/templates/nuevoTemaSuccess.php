<?php echo $formulario->renderFormTag(url_for('seccion/validarTema')); ?>
  <?php if ($formulario->hasErrors()): ?>
    El formulario contiene algunos errores que debes solucionar.
  <?php endif; ?>

  <?php echo $formulario['id_seccion']->render(); ?>
  <?php echo $formulario['_csrf_token']->render(); ?>
  <table>
    <tr>
      <td><?php echo $formulario['id_autor']->renderLabel(); ?></td>
      <td><?php echo $formulario['id_autor']->render(); ?></td>
    </tr>
    <tr>
      <td><?php echo $formulario['titulo']->renderLabel(); ?></td>
      <td><?php echo $formulario['titulo']->render(); ?></td>
    </tr>
    <tr>
      <td><?php echo $formulario['contenido']->renderLabel(); ?></td>
      <td><?php echo $formulario['contenido']->render(); ?></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" class="btn btn-success" value="Enviar"></td>
    </tr>
  </table>
</form>