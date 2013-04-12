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
          <?php echo link_to('Home', 'home/index'); ?>
        </div>
        <div class="span5 offset2">
          <?php include_component('usuario', 'login'); ?>
        </div>
      </header>
      <div class="span12">
        <?php echo $sf_content; ?>
      </div>
      <footer class="span12">
        Footer de la web
      </footer>
    </div>
  </body>
</html>
