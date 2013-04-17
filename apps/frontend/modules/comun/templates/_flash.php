<?php if ($sf_user->hasFlash('notice')): ?>
<div class="flash-notice">
  <span><em><strong><?php echo $sf_user->getFlash('aviso'); ?></strong></em></span>
</div>
<?php endif; ?>
<?php if ($sf_user->hasFlash('error')): ?>
<div class="flash-error">
  <span><em><strong><?php echo $sf_user->getFlash('error'); ?></strong></em></span>
</div>
<?php endif; ?>