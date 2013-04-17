<?php if ($sf_user->hasFlash('notice')): ?>
<div class="span12 flash" id="flash-notice">
  <span><em><strong><?php echo $sf_user->getFlash('notice'); ?></strong></em></span>
</div>
<?php endif; ?>
<?php if ($sf_user->hasFlash('error')): ?>
<div class="span12 flash" id="flash-error">
  <span><em><strong><?php echo $sf_user->getFlash('error'); ?></strong></em></span>
</div>
<?php endif; ?>