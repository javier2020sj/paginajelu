<!DOCTYPE html>
<html lang="en">

<head>
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Colegio Jelú</title>
</head>

<body class="d-flex flex-column justify-items-center">
  <header class="header-ppal position-relative">

    <!-- NAVBAR (queda igual) -->
    <nav
      class="navbar navbar-expand-lg bg-body-tertiary fixed-top navbar-transparente w-100">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="logo" style="height:40px">
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#sobrenosotros">Sobre Jelú</a></li>
            <li class="nav-item"><a class="nav-link" href="#materias">Materias</a></li>
            <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- CARRUSEL DE NOTICIAS -->
    <div
      id="carouselHeader"
      class="carousel slide h-100"
      data-bs-ride="carousel"
      data-bs-interval="6000"
      data-bs-pause="hover">
      <div class="carousel-inner h-100">
        <!-- NOTICIA 3 -->
        <div class="carousel-item h-100">
          <div class="slide-bg" style="background-image:url('images/pileta.png')"></div>
          <div class="slide-overlay"></div>

          <div class="slide-content">
            <h1>Vacaciones</h1>
            <h3>Colonia de verano</h3>

            <!-- LINK CLICKEABLE -->
            <a href="https://wa.me/5492645838325?text=Hola,%20quisiera%20hacer%20una%20consulta" target="_blank" class="btn-slide mt-3">
              Consultar inscripción
            </a>
          </div>
        </div>
        <!-- NOTICIA 2 -->
        <div class="carousel-item h-100">
          <div class="slide-bg" style="background-image:url('images/galeria/01.jpeg')"></div>
          <div class="slide-overlay"></div>
          <div class="slide-content">
            <h1>Inscripciones Abiertas</h1>
            <h3>Ciclo lectivo 2026</h3>

            <!-- LINK CLICKEABLE -->
            <a href="https://wa.me/5492645838325?text=Hola,%20quisiera%20hacer%20una%20consulta" target="_blank" class="btn-slide mt-3">
              Consultar inscripción
            </a>
          </div>
        </div>
        <!-- NOTICIA 1 -->
        <div class="carousel-item logoprincipal active h-100">
          <div class="slide-bg" style="background-image:url('images/header.jpeg')"></div>
          <div class="slide-overlay"></div>
          <div class="slide-content">
            <img src="images/logo.png" class="mb-4" style="max-width:180px">
            <h1>Colegio Jelú</h1>
            <h3>Arte, naturaleza y primeras miradas</h3>
          </div>
        </div>




      </div>

      <!-- Flechas -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>
  </header>


  <div class="contenedor d-flex flex-column justify-content-center">
    <section
      id="sobrenosotros"
      class="sobrenosotros d-flex flex-column align-items-center justify-content-center h-100 p-5">
      <h2 class="fw-bold">Sobre nosotros</h2>

      <span class="text-center">
        Nuestro colegio de Nivel Inicial es un espacio pensado para acompañar
        a las infancias en sus primeros pasos, respetando sus tiempos, su
        curiosidad natural y su forma única de descubrir el mundo. Creemos que
        aprender es una experiencia viva, que se construye desde el juego, la
        exploración y el vínculo afectivo. Con una orientación ambiental y
        artística, promovemos desde edades tempranas el amor por la
        naturaleza, el cuidado del entorno y una mirada consciente sobre el
        mundo que habitamos. Los niños y niñas aprenden a observar, preguntar
        y actuar con respeto hacia la vida, integrando prácticas sustentables
        de manera cotidiana y significativa. El arte ocupa un lugar central en
        nuestra propuesta pedagógica: a través de la expresión corporal, la
        música, las artes visuales y el juego creativo, los niños desarrollan
        su sensibilidad, imaginación y capacidad de comunicar emociones e
        ideas. Entendemos el arte como un lenguaje esencial para el
        crecimiento integral y la construcción de la identidad. Nuestro equipo
        docente acompaña cada proceso con compromiso, calidez y
        profesionalismo, generando un clima de confianza y contención donde
        cada niño se siente valorado y escuchado. La escuela se concibe como
        una comunidad, en diálogo permanente con las familias, construyendo
        juntos una educación basada en el respeto, la creatividad y el cuidado
        del planeta.
      </span>
    </section>

    <!-- Mision vision valores-->

    <section class="mvv p-5">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseOne"
              aria-expanded="false"
              aria-controls="flush-collapseOne">
              Misión
            </button>
          </h2>
          <div
            id="flush-collapseOne"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Brindar experiencias educativas integrales y de calidad, basadas
              en las artes, que promuevan el desarrollo de las capacidades:
              <ul>
                <li>Creativas</li>
                <li>Cognitivas</li>
                <li>Socioemocionales</li>
                <li>Estéticas</li>
              </ul>
              El objetivo es fortalecer la identidad de nuestros estudiantes
              y, de esta manera, contribuir activamente a la construcción de
              una sociedad más justa y equitativa.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseTwo"
              aria-expanded="false"
              aria-controls="flush-collapseTwo">
              Visión
            </button>
          </h2>
          <div
            id="flush-collapseTwo"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingTwo"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              Ser reconocidos como un referente en educación artística en la
              provincia de San Juan, ofreciendo una propuesta educativa
              diferente, innovadora y transformadora que impacte positivamente
              en la vida de nuestros estudiantes y en la comunidad en general.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#flush-collapseThree"
              aria-expanded="false"
              aria-controls="flush-collapseThree">
              Valores
            </button>
          </h2>
          <div
            id="flush-collapseThree"
            class="accordion-collapse collapse"
            aria-labelledby="flush-headingThree"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <ul>
                <li>
                  <strong>Creatividad: </strong> Fomentamos la exploración de
                  nuevas ideas y formas de expresión.
                </li>

                <li>
                  <strong>Respeto:</strong> Valoramos la diversidad cultural,
                  las opiniones y los sentimientos de todos los miembros de la
                  comunidad.
                </li>

                <li>
                  <strong>Solidaridad:</strong> Promovemos el trabajo en
                  equipo y la colaboración para alcanzar objetivos comunes.
                </li>

                <li>
                  <strong>Excelencia: </strong>Buscamos la mejora continua en
                  todos los aspectos de nuestra práctica educativa.
                </li>

                <li>
                  <strong>Identidad: </strong>Fortalecemos el sentido de
                  pertenencia a nuestra comunidad y a nuestras raíces
                  culturales.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- MATERIAS -->
    <!-- <section
        id="materias"
        class="materias d-flex flex-wrap align-items-center justify-content-center"
      >
        <h2 class="w-100 text-center fw-bold">Materias</h2>
        <div class="card m-2">
          <h1>Artes visuales</h1>
          <img src="images/arte.jpg" alt="Arte"/>
        </div>
        <div class="card m-2">
          <h1>Danza</h1>
          <img src="images/danza.png" alt="Danza" />
        </div>
        <div class="card m-2">
          <h1>Musica</h1>
          <img src="images/musica.png" alt="Musica"/>
        </div>
        <div class="card m-2">
          <h1>Expresión corporal</h1>
          <img src="images/expresion.png" alt="Expresion corporal"/>
        </div>
      </section> -->
    <!-- GALERÍA -->
    <section id="galeria" class="galeria p-5">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel">

        <!-- SLIDES -->
        <div class="carousel-inner rounded-4 shadow-lg">

          <?php
          $dir = "images/galeria/";
          $imagenes = array_diff(scandir($dir), ['.', '..']);

          sort($imagenes); // orden alfabético: 01, 02, 03...

          $primera = true;
          foreach ($imagenes as $img) {
            if (preg_match('/\.(jpg|jpeg|png|webp)$/i', $img)) {
              $active = $primera ? 'active' : '';
              $primera = false;
          ?>

              <div class="carousel-item <?= $active ?>">
                <img
                  src="<?= $dir . $img ?>"
                  class="d-block w-100 gallery-img"
                  loading="lazy"
                  data-bs-toggle="modal"
                  data-bs-target="#modalImagen"
                  onclick="document.getElementById('imagenAmpliada').src=this.src"
                  alt="Galería" />
              </div>

          <?php
            }
          }
          ?>

        </div>
        <!-- /carousel-inner -->

        <!-- CONTROLES -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Anterior</span>
        </button>

        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>

      </div>
    </section>

    <!-- CONTACTO -->
    <section
      id="contacto"
      class="contacto d-flex flex-column align-items-center p-5">
      <h2 class="fw-bold">Contacto</h2>
      <form class="row g-4 mt-4">
        <div class="col-md-6">
          <label class="form-label">Nombre</label><input class="form-control form-soft" />
        </div>
        <div class="col-md-6">
          <label class="form-label">Apellido</label><input class="form-control form-soft" />
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label><input class="form-control form-soft" />
        </div>
        <div class="col-md-6">
          <label class="form-label">Teléfono</label><input class="form-control form-soft" />
        </div>
        <div class="col-12">
          <label class="form-label">¿Cómo nos conoció?</label><select class="form-select form-soft">
            <option>Redes Sociales</option>
            <option>Recomendación</option>
          </select>
        </div>
        <div class="col-12 text-center">
          <button class="btn-enviar px-5 py-2">Enviar</button>
        </div>
      </form>
    </section>
  </div>
  <footer class="footer text-center p-4">
    <div class="col-12 text-center mt-4">
      <a
        href="https://instagram.com/complejo.jelu/"
        target="_blank"
        class="social-icon">
        <i class="bi bi-instagram"></i>
      </a>

      <a
        href="https://facebook.com/jeludigital"
        target="_blank"
        class="social-icon">
        <i class="bi bi-facebook"></i>
      </a>
    </div>
    <p>📞 Tel: 264 5838325 · ✉️ colegiojelu@gmail.com</p>
    <p>📍 Meglioli Sur 528 - Rivadavia - San Juan</p>

    <iframe
      class="px-5"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.6482379412873!2d-68.58161132475539!3d-31.533819901937463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96814174207096a1%3A0xd9abbe9ccfa15478!2sComplejo%20Educativo%20Art%C3%ADstico%20Jel%C3%BA!5e0!3m2!1ses-419!2sar!4v1765285405193!5m2!1ses-419!2sar"
      width="100%"
      height="250rem"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </footer>
  <!-- BOTÓN FLOTANTE WHATSAPP -->
  <a
    href="https://wa.me/5492645838325?text=Hola,%20quisiera%20hacer%20una%20consulta"
    class="whatsapp-float"
    target="_blank"
    aria-label="Consultar por WhatsApp">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
  </a>

<!-- MODAL IMAGEN RESPONSIVE -->
<div class="modal fade" id="modalImagen" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content modal-img-wrapper">

      <!-- BOTÓN CERRAR -->
      <button
        type="button"
        class="btn-close modal-close-btn"
        data-bs-dismiss="modal"
        aria-label="Cerrar"
      ></button>

      <!-- IMAGEN -->
      <img
        id="imagenAmpliada"
        src=""
        class="modal-img"
        alt="Imagen ampliada"
      />

    </div>
  </div>
</div>

</body>

</html>