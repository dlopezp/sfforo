<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('form_user/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<?php echo link_to('Principal', '@homepage') ?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php //echo link_to('Delete', 'form_user/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre_completo']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre_completo']->renderError() ?>
          <?php echo $form['nombre_completo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['username']->renderLabel() ?></th>
        <td>
          <?php echo $form['username']->renderError() ?>
          <?php echo $form['username'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['password']->renderLabel() ?></th>
        <td>
          <?php echo $form['password']->renderError() ?>
          <?php echo $form['password'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_rol']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_rol']->renderError() ?>
          <?php echo $form['id_rol'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
