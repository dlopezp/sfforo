<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title>
      <?php include_slot('titulo', 'Foro en Symfony'); ?>
    </title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <div class="container">
      <header class="span12">
        <div class="span5">
          <?php echo link_to(image_tag('logoForo.png'), 'home/index'); ?>
        </div>
        <div class="span5 offset1">
          <?php include_component('usuario', 'login'); ?>
        </div>
      </header>
      <div class="span12">
        <?php echo $sf_content; ?>
      </div>
      <footer class="span12">
        <?php include_component('comun', 'footer'); ?>
      </footer>
    </div>
  </body>
</html>
