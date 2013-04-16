<?php if ($sf_user->hasFlash('aviso')): ?>
<div class="aviso">
  <span><em><strong><?php echo $sf_user->getFlash('aviso'); ?></strong></em></span>
</div>
<?php endif; ?>