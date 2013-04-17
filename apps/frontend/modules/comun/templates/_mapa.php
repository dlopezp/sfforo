<div id="mapa" class="span12">
  <ul class="breadcrumb">
    <li>
    <?php if ($cantidad > 1): ?>
      <a href="<?php echo url_for('@homepage') ?>"><i class="icon-black icon-home"></i> <?php echo $ruta['home'] ?></a> <span class="divider">></span>
    <?php else: ?>
      <i class="icon-black icon-home"></i> <?php echo $ruta['home'] ?>
    <?php endif; ?>
    </li>
    <li>
    <?php if($cantidad > 2): ?>
      <a href="#"><?php echo $ruta['seccion'] ?></a> <span class="divider">></span>
    <?php else: ?>
      <?php echo $ruta['seccion'] ?>
    <?php endif; ?>
    </li>
    <li class="active">Data</li>
  </ul>
</div>