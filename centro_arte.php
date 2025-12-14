<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Centro de artes - Jelú</title>

  <!-- TIPOGRAFÍAS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- NAVBAR TRANSLÚCIDO -->
  <!-- NAVBAR TRANSLÚCIDO -->
  <nav class="navbar navbar-expand-lg fixed-top glass-navbar">
    <div class="container">

      <!-- LOGO EN VEZ DE TEXTO -->
      <a class="navbar-brand artistic-logo" href="#">
        <img src="img/nav_ca.png" alt="Centro de Arte JELÚ" class="nav-logo">
      </a>

      <button
        class="navbar-toggler custom-hamburger"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navMenu">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link nav-art" href="centro_arte.php#sobre">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-art" href="centro_arte.php#cursos">Cursos y Carreras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-art" href="centro_arte.php#galeria">Galería</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-art" href="centro_arte.php#staff">Staff</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-art" href="centro_arte.php#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-art-musica" href="musica.html"><strong>🎶LIVE MUSIC🎶</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-art" href="programa.html">Romeo y Julieta</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- HERO ARTÍSTICO CON IMAGEN DE EJEMPLO -->
  <header
    class="hero artistic-hero d-flex align-items-center justify-content-center">
    <div class="hero-overlay"></div>

    <div class="hero-content text-center">
      <h1 class="hero-title">Arte, Movimiento y Expresión</h1>
      <p class="hero-subtitle">
        Formación en danza con inspiración y sensibilidad
      </p>
    </div>
  </header>

  <!-- SOBRE NOSOTROS -->
  <section id="sobre" class="section-soft">
    <div class="container py-5">


      <h2 class="section-title artistic-title text-center">Sobre Nosotros</h2>

      <p class="text-center description">
        Jelú Centro de Arte y Recreación es una institución educativa y
        cultural de San Juan, con Disposición Ministerial 342-DEP-19. Nos
        ubicamos en Dir. Meglioli 528 sur, Rivadavia. Somos un espacio que
        promueve el desarrollo integral de los individuos desde la primera
        infancia y sin límite de edad, teniendo a la educación artística como
        eje central. Contamos con un equipo interdisciplinario de
        profesionales y ofrecemos un lugar de excelencia con ambientes activos
        modificantes, rodeado de un entorno natural que inspira la motivación
        y la creatividad. Nuestra oferta educativa incluye: • Trayectos con
        Aval Ministerial: Danza Clásica, Danza Contemporánea, Danzas Árabes,
        Recitación y Arte Escénico. • Talleres Anuales Progresivos: Teatro,
        Música, Artes Visuales, Acrobacia en Telas, Canto, Dabke, Idioma
        Árabe, Ritmos Latinos, entre otros.
      </p>


      <!-- ACORDEÓN DE ACTOS -->
      <div class="accordion mt-4" id="actosPrograma">
        <!-- ACTO 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="act1">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#c1">
              Misión
            </button>
          </h2>
          <div id="c1" class="accordion-collapse collapse show">
            <div class="accordion-body">
              Brindar experiencias educativas integrales y de calidad, basadas
              en las artes, que promuevan el desarrollo de las capacidades:
              <ul>
                <li>Creativas</li>
                <li>Cognitivas</li>
                <li>Socioemocionales</li>
                <li>Estéticas</li>
              </ul>
              El
              objetivo es fortalecer la identidad de nuestros estudiantes y,
              de esta manera, contribuir activamente a la construcción de una
              sociedad más justa y equitativa.
            </div>
          </div>
        </div>

        <!-- ACTO 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="act2">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#c2">
              Visión
            </button>
          </h2>
          <div id="c2" class="accordion-collapse collapse">
            <div class="accordion-body">
              Ser reconocidos como un referente en educación artística en la
              provincia de San Juan, ofreciendo una propuesta educativa
              diferente, innovadora y transformadora que impacte positivamente
              en la vida de nuestros estudiantes y en la comunidad en general.
            </div>
          </div>
        </div>

        <!-- ACTO 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="act3">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#c3">
              Valores
            </button>
          </h2>
          <div id="c3" class="accordion-collapse collapse">
            <div class="accordion-body">
              <ul>
                <li><strong>Creatividad: </strong> Fomentamos la exploración de nuevas ideas y
                  formas de expresión. </li>

                <li><strong>Respeto:</strong> Valoramos la diversidad
                  cultural, las opiniones y los sentimientos de todos los miembros
                  de la comunidad.
                </li>

                <li>
                  <strong>Solidaridad:</strong> Promovemos el trabajo en equipo
                  y la colaboración para alcanzar objetivos comunes.
                </li>

                <li>
                  <strong>Excelencia: </strong>Buscamos la mejora continua en todos los aspectos de nuestra
                  práctica educativa.

                </li>

                <li><strong>Identidad: </strong>Fortalecemos el sentido de
                  pertenencia a nuestra comunidad y a nuestras raíces culturales.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


    </div>
    </div>
  </section>

  <!-- SOBRE NOSOTROS -->
  <section id="sobre" class="section-soft">
    <div class="container py-5">


      <h2 class="section-title artistic-title text-center">Fundamentacion</h2>

      <p class="text-center description">
        Jelú Centro de Arte y Recreación se fundamenta en la convicción de que la Educación Artística no es un complemento, sino un eje central para el desarrollo integral del ser humano en todas sus etapas (desde la primera infancia hasta la edad adulta).
      <ul>
        <li><strong>Desarrollo Integral y Sin Límites: </strong>La propuesta abarca todas las franjas etarias, reconociendo el potencial transformador del arte en cualquier momento de la vida. Se promueve el desarrollo de habilidades no solo técnicas, sino también sociales y emocionales.
        </li>
        <li><strong>Calidad y Aval Ministerial: </strong>La seriedad de la propuesta se sustenta en Trayectos de Formación con aval ministerial, asegurando la calidad educativa, sumada a una variedad de talleres progresivos que fomentan la exploración y el aprendizaje continuo en diversas disciplinas.
        </li>
        <li><strong>Comunidad y Diversidad: </strong>Buscamos trascender la mera enseñanza para construir una comunidad educativa basada en la expresión artística, la creatividad y el respeto por la diversidad cultural, esenciales para una ciudadanía plena.
        </li>
        <li>
          <strong>Entorno Inspirador: </strong>El desarrollo en un entorno de excelencia, con ambientes activos modificantes y un entorno verde de naturaleza, está diseñado intencionalmente para actuar como un catalizador de la motivación, la inspiración y la libre expresión de quienes asisten.
        </li>

      </ul>

      </p>
    </div>
  </section>




























  <!-- ⭐ NUEVA SECCIÓN CURSOS Y CARRERAS (CARDS 3D FLIP) -->
  <!-- <section id="cursos" class="container py-5">
    <h2 class="section-title artistic-title text-center">
      Cursos y Carreras
    </h2>

    <div
      id="carouselCursos"
      class="carousel slide mt-5"
      data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <div class="flip-card">
              <div class="flip-inner">
                <div
                  class="flip-front"
                  style="background-image: url('img/head3.jpeg')">
                  <h3 class="flip-title">Danza Clásica</h3>
                </div>
                <div class="flip-back">
                  <p>
                    Formación en técnica clásica, postura, conciencia corporal
                    y repertorio.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="flip-card">
              <div class="flip-inner">
                <div
                  class="flip-front"
                  style="background-image: url('img/head2.jpeg')">
                  <h3 class="flip-title">Danza Contemporánea</h3>
                </div>
                <div class="flip-back">
                  <p>
                    Exploración del movimiento, improvisación, técnica release
                    y expresividad.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="flip-card">
              <div class="flip-inner">
                <div
                  class="flip-front"
                  style="background-image: url('img/head1.jpeg')">
                  <h3 class="flip-title">Jazz / Lyrical</h3>
                </div>
                <div class="flip-back">
                  <p>
                    Fusión moderna con técnica jazz, fluidez, musicalidad y
                    expresividad.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselCursos"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselCursos"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </section> -->

<section id="staff" class="container py-5">
  <h2 class="section-title artistic-title text-center mb-4">
    Staff
  </h2>

  <p class="text-center sinopsis" style="max-width: 700px; margin: 0 auto">
    Nuestro equipo docente y artístico está formado por profesionales
    apasionados que acompañan a cada alumno en su crecimiento técnico y
    emocional.
  </p>

  <div class="row mt-5 g-4">
    <!-- ITEM 1 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Celeste.jpeg" class="staff-img mb-3" alt="Staff 1" />
        <h4 class="staff-name">Celeste</h4>
        <p class="staff-text">Dirección</p>
      </div>
    </div>
    <!-- ITEM 3 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Carla.jpeg" class="staff-img mb-3" alt="Staff 3" />
        <h4 class="staff-name">Carla</h4>
        <p class="staff-text">Secretaria</p>
      </div>
    </div>
    <!-- ITEM 3 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Said.jpeg" class="staff-img mb-3" alt="Staff 3" />
        <h4 class="staff-name">Said</h4>
        <p class="staff-text">Dabke, Idioma Arabe</p>
      </div>
    </div>
    <!-- ITEM 2 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Guillermina.jpeg" class="staff-img mb-3" alt="Staff 2" />
        <h4 class="staff-name">Guillermina</h4>
        <p class="staff-text">Teatro, recitación y arte escenico</p>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Sol.jpeg" class="staff-img mb-3" alt="Staff 4" />
        <h4 class="staff-name">Marisol</h4>
        <p class="staff-text">Ritmos urbanos</p>
      </div>
    </div>
    <!-- ITEM 5 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Lucrecia.jpeg" class="staff-img mb-3" alt="Staff 4" />
        <h4 class="staff-name">Lucrecia</h4>
        <p class="staff-text">Danzas Arabes</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Seba.jpeg" class="staff-img mb-3" alt="Staff 4" />
        <h4 class="staff-name">Sebastian</h4>
        <p class="staff-text">Danza contemporanea</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Luna.jpeg" class="staff-img mb-3" alt="Staff 4" />
        <h4 class="staff-name">Luna</h4>
        <p class="staff-text">Danza clásica</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/Caren.jpeg" class="staff-img mb-3" alt="Staff 4" />
        <h4 class="staff-name">Karen</h4>
        <p class="staff-text">Jardín de danza y teatro</p>
      </div>
    </div>
        <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img src="img/staff/hector.jpeg" class="staff-img mb-3" alt="Staff 3" />
        <h4 class="staff-name">Hector</h4>
        <p class="staff-text">Música</p>
      </div>
    </div>
  </div>
</section>
  <!-- GALERÍA -->
  <section id="galeria" class="gallery artistic-gradient py-5">
    <div class="container">
      <h2 class="section-title white-title text-center">Galería</h2>

      <div
        id="carouselGaleria"
        class="carousel slide mt-4"
        data-bs-ride="carousel">
        <div class="carousel-inner rounded-4 shadow-lg">
          <!-- IMAGEN 1 -->
          <div class="carousel-item active">
            <img
              src="img/ca/01.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 2 -->
          <div class="carousel-item">
            <img
              src="img/ca/02.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 3 -->
          <div class="carousel-item">
            <img
              src="img/ca/03.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 4 -->
          <div class="carousel-item">
            <img
              src="img/ca/04.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 5 -->
          <div class="carousel-item">
            <img
              src="img/ca/05.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 6 -->
          <div class="carousel-item">
            <img
              src="img/ca/06.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 7 -->
          <div class="carousel-item">
            <img
              src="img/ca/07.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 8 -->
          <div class="carousel-item">
            <img
              src="img/ca/08.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 9 -->
          <div class="carousel-item">
            <img
              src="img/ca/09.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 10 -->
          <div class="carousel-item">
            <img
              src="img/ca/10.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 11 -->
          <div class="carousel-item">
            <img
              src="img/ca/11.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 12 -->
          <div class="carousel-item">
            <img
              src="img/ca/12.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>

          <!-- IMAGEN 13 -->
          <div class="carousel-item">
            <img
              src="img/ca/13.jpeg"
              class="d-block w-100 gallery-img"
              data-bs-toggle="modal"
              data-bs-target="#modalImagen"
              onclick="document.getElementById('imagenAmpliada').src=this.src" />
          </div>
        </div>

        <!-- FLECHAS -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselGaleria"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>

        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselGaleria"
          data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- CONTACTO -->
  <section id="contacto" class="container py-5">
    <h2 class="section-title artistic-title text-center">Contacto</h2>
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
        <button class="btn artistic-btn px-5 py-2">Enviar</button>
      </div>
    </form>

  </section>

  <!-- FOOTER -->
  <footer class="soft-footer text-center p-4">
    <div class="col-12 text-center mt-4">
      <a href="https://instagram.com/complejo.jelu/" target="_blank" class="social-icon">
        <i class="bi bi-instagram"></i>
      </a>

      <a href="https://facebook.com/jeludigital" target="_blank" class="social-icon">
        <i class="bi bi-facebook"></i>
      </a>
    </div>
    <p>📞 Tel: 264 5838325 · ✉️ colegiojelu@gmail.com</p>
    <p>📍 Meglioli Sur 528 - Rivadavia - San Juan</p>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.6482379412873!2d-68.58161132475539!3d-31.533819901937463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96814174207096a1%3A0xd9abbe9ccfa15478!2sComplejo%20Educativo%20Art%C3%ADstico%20Jel%C3%BA!5e0!3m2!1ses-419!2sar!4v1765285405193!5m2!1ses-419!2sar"
      width="100%"
      height="250rem"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- MODAL PARA AMPLIAR IMÁGENES -->
  <!-- MODAL PARA AMPLIAR IMÁGENES -->
  <div class="modal fade" id="modalImagen" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content modal-img-wrapper">

        <!-- BOTÓN X PARA CERRAR -->
        <button type="button" class="btn-close modal-close-btn" data-bs-dismiss="modal"></button>

        <img id="imagenAmpliada" src="" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>

</body>

</html>