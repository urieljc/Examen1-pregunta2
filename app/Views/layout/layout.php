<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->renderSection('titulo') ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
  <section class="hero is-info">
    <div class="hero-body">
      <p class="title">
        Examen de Multimedial 1 - CodeIgnater
      </p>
      <p class="subtitle">
        Juan Carlos Bazan Panozo
      </p>
    </div>
  </section>

  <?= $this->renderSection('contenido') ?>

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>CodeIgnater - Multimedial</strong> Realizado por Juan Carlos Bazan Panozo
        
      </p>
    </div>
  </footer>
</body>

</html>