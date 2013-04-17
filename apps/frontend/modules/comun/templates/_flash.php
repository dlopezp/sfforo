<?php if ($sf_user->hasFlash('notice')): ?>
<div class="span12 flash alert alert-success" id="flash-notice">
  <a class="close" data-dismiss="alert">×</a>
  <span><em><strong><?php echo $sf_user->getFlash('notice'); ?></strong></em></span>
</div>
<?php endif; ?>
<?php if ($sf_user->hasFlash('error')): ?>
<div class="span12 flash alert alert-error" id="flash-error">
  <a class="close" data-dismiss="alert">×</a>
  <span><em><strong><?php echo $sf_user->getFlash('error'); ?></strong></em></span>
</div>
<?php endif; ?>