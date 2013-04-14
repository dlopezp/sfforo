<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
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
        <?php include_component('comun', 'header'); ?>
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
