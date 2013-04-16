<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php //$form->getObject()->isNew() ? 'create' : 'update')?>
<form action="<?php echo url_for('@insertar_nuevo_tema?slug='.$seccion->getSlug())?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<?php echo link_to('Volver al foro', url_for('@ver_seccion?slug='.$seccion->getSlug()), array('class' => "btn btn-danger")); ?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'seccion/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Enviar" class="btn btn-success" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['id_autor']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_autor']->renderError() ?>
          <?php echo $form['id_autor'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['titulo']->renderLabel() ?></th>
        <td>
          <?php echo $form['titulo']->renderError() ?>
          <?php echo $form['titulo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['contenido']->renderLabel() ?></th>
        <td>
          <?php echo $form['contenido']->renderError() ?>
          <?php echo $form['contenido'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
