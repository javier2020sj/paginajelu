<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instituto de Danzas</title>

  <!-- TIPOGRAFÍAS -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- NAVBAR TRANSLÚCIDO -->
  <nav class="navbar navbar-expand-lg fixed-top glass-navbar">
    <div class="container">

      <a class="navbar-brand artistic-logo" href="#">
        Instituto de Danzas
      </a>

      <button class="navbar-toggler custom-hamburger" type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navMenu">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link nav-art" href="#sobre">Sobre Nosotros</a></li>
          <li class="nav-item"><a class="nav-link nav-art" href="#cursos">Cursos y Carreras</a></li>
          <li class="nav-item"><a class="nav-link nav-art" href="#galeria">Galería</a></li>
          <li class="nav-item"><a class="nav-link nav-art" href="#contacto">Contacto</a></li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- HERO ARTÍSTICO CON IMAGEN DE EJEMPLO -->
  <header class="hero artistic-hero d-flex align-items-center justify-content-center">
    <div class="hero-overlay"></div>

    <div class="hero-content text-center">

      <h1 class="hero-title">Arte, Movimiento y Expresión</h1>
      <p class="hero-subtitle">Formación en danza con inspiración y sensibilidad</p>
    </div>
  </header>

  <!-- SOBRE NOSOTROS -->
  <section id="sobre" class="section-soft">
    <div class="container py-5">

      <h2 class="section-title artistic-title text-center">Sobre Nosotros</h2>

      <p class="text-center description">
        Somos un espacio donde la danza se vive con sensibilidad, técnica y creatividad.
        Nuestro enfoque formativo combina el arte con el desarrollo humano.
      </p>

      <div class="row mt-5 g-4">
        <div class="col-md-4">
          <div class="soft-card text-center p-4">
            <h4 class="card-title">Misión</h4>
            <p>Promover el crecimiento artístico y personal a través de la danza.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="soft-card text-center p-4">
            <h4 class="card-title">Visión</h4>
            <p>Ser un referente en formación artística con identidad propia y excelencia educativa.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="soft-card text-center p-4">
            <h4 class="card-title">Valores</h4>
            <p>Respeto, sensibilidad, creatividad, disciplina y expresión auténtica.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ⭐ NUEVA SECCIÓN CURSOS Y CARRERAS (CARDS 3D FLIP) -->
  <section id="cursos" class="container py-5">
    <h2 class="section-title artistic-title text-center">Cursos y Carreras</h2>

    <div id="carouselCursos" class="carousel slide mt-5" data-bs-ride="carousel">

      <div class="carousel-inner">

        <!-- CURSO 1 -->
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <div class="flip-card">
              <div class="flip-inner">
                <div class="flip-front" style="background-image: url('img/gal1.jpg');">
                  <h3 class="flip-title">Danza Clásica</h3>
                </div>
                <div class="flip-back">
                  <p>Formación en técnica clásica, postura, conciencia corporal y repertorio.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CURSO 2 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="flip-card">
              <div class="flip-inner">
                <div class="flip-front" style="background-image: url('img/gal1.jpg');">
                  <h3 class="flip-title">Danza Contemporánea</h3>
                </div>
                <div class="flip-back">
                  <p>Exploración del movimiento, improvisación, técnica release y expresividad.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- CURSO 3 -->
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
            <div class="flip-card">
              <div class="flip-inner">
                <div class="flip-front" style="background-image: url('img/curso3.jpg');">
                  <h3 class="flip-title">Jazz / Lyrical</h3>
                </div>
                <div class="flip-back">
                  <p>Fusión moderna con técnica jazz, fluidez, musicalidad y expresividad.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselCursos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselCursos" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>

  </section>

  <!-- GALERÍA -->
  <section id="galeria" class="gallery artistic-gradient py-5">
    <div class="container">
      <h2 class="section-title white-title text-center">Galería</h2>

      <div id="carouselGaleria" class="carousel slide mt-4">
        <div class="carousel-inner rounded-4 shadow-lg">
          <div class="carousel-item active">
            <img src="img/gal1.jpg" class="d-block w-100 gallery-img">
          </div>
          <div class="carousel-item">
            <img src="img/gal2.jpg" class="d-block w-100 gallery-img">
          </div>
        </div>
        <!-- FLECHAS -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleria" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleria" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- CONTACTO -->
  <section id="contacto" class="container py-5">
    <h2 class="section-title artistic-title text-center">Contacto</h2>
    <form class="row g-4 mt-4">
      <div class="col-md-6"><label class="form-label">Nombre</label><input class="form-control form-soft"></div>
      <div class="col-md-6"><label class="form-label">Apellido</label><input class="form-control form-soft"></div>
      <div class="col-md-6"><label class="form-label">Email</label><input class="form-control form-soft"></div>
      <div class="col-md-6"><label class="form-label">Teléfono</label><input class="form-control form-soft"></div>
      <div class="col-12"><label class="form-label">¿Cómo nos conoció?</label><select class="form-select form-soft">
          <option>Redes Sociales</option>
          <option>Recomendación</option>
        </select></div>
      <div class="col-12 text-center"><button class="btn artistic-btn px-5 py-2">Enviar</button></div>
    </form>
  </section>

  <!-- FOOTER -->
  <footer class="soft-footer text-center p-4">
    <p>📞 Tel: 11 2345-6789 · ✉️ info@institutodanza.com</p>
    <p>📍 Av. Principal 123, Buenos Aires</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.6482379412873!2d-68.58161132475539!3d-31.533819901937463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96814174207096a1%3A0xd9abbe9ccfa15478!2sComplejo%20Educativo%20Art%C3%ADstico%20Jel%C3%BA!5e0!3m2!1ses-419!2sar!4v1765285405193!5m2!1ses-419!2sar" width="100%" height="250rem" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>