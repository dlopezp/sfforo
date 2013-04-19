<div id="mapa" class="span8">
  <ul class="breadcrumb">
    <li>
      <a href="<?php echo url_for('@homepage') ?>"><i class="icon-black icon-home"></i>Inicio</a> 
    </li>
    <?php if($cantidad == 3): ?>
    <li>
      <span class="divider"> > </span>
      <a href="<?php echo url_for('@ver_seccion?slug_seccion='.$ruta['slug_seccion']) ?>"><?php echo $ruta['seccion'] ?></a> 
      <span class="divider"> > </span>
    </li>
    <li class="active"><?php echo $ruta['tema'] ?></li>
    <?php elseif ($cantidad == 2): ?>
      <span class="divider"> > </span>
      <li class="active"><?php echo $ruta['seccion'] ?></li>
    <?php endif; ?>
    
    
  </ul>
</div>
<div class="clearfix"></div>