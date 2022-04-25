<?= $this->extend('layout/layout') ?>



<?= $this->section('titulo') ?>
Examen Multimedial
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

<section class="section">
  <h1 class="title">Faculdad de Ciencias Puras y Naturales</h1>
  <h2 class="subtitle">
    Seleccione a la carrera que desea tener informacion
</section>

<div class="conteiner">
  <section class="section">
    <div class="columns">
      <div class="column">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="<?php echo base_url()?>public/Img/infromatica.png" alt="Informatica" width="128" height="128">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-4"><a href="<?php echo base_url(); ?>/informatica">Carrera de Informatica</a></p>

              </div>
            </div>

            <div class="content">
              Formar profesionales idóneos con calidad humana, ética, valores, excelencia científica, compromiso social, capacidad crítica y creativa para potenciar el desarrollo de la ciencia y la tecnología en el área de la Informática en concordancia con los requerimientos de la sociedad y sus instituciones, desempeñándose con éxito en el ámbito regional, nacional e internacional.

              <br>

            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="../1/Img/fisica.png" alt="Fisica">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-4"><a href="<?php echo base_url(); ?>/fisica ">Carrera de Fisica</a></p>
              </div>
            </div>
            <div class="content">
              La Física es la ciencia que estudia las propiedades de la naturaleza con ayuda de la Matemática. Se encarga de analizar las características de la energía, el tiempo y la materia
              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="../1/Img/Matemática.png" alt="Matematicas">
            </figure>
          </div>
          <div class="card-content">
            <div class="media">
              <div class="media-content">
                <p class="title is-4"><a href="<?php echo base_url(); ?>/matematica"">Carrera de Matematica</a></p>
                                </div>
                            </div>
                            <div class=" content">
                    La Carrera de Matemática forma profesionales capaces de resolver problemas lógicos, estadísticos, y todos aquellos que requieran solucionar ecuaciones numéricas.
                    <br>
              </div>
            </div>
          </div>
        </div>

      </div>
  </section>
</div>



<?= $this->endSection() ?>