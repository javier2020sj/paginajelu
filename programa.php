<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jelú - Romeo y Julieta</title>

  <!-- Tipografías y Bootstrap -->
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=Handlee&display=swap"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" />

  <link rel="stylesheet" href="style.css" />
</head>

>
<!-- NAVBAR TRANSLÚCIDO -->
<nav class="navbar navbar-expand-lg fixed-top glass-navbar">
  <div class="container">
    <!-- LOGO EN VEZ DE TEXTO -->
    <a class="navbar-brand artistic-logo" href="#">
      <img
        src="img/nav_ca.png"
        alt="Centro de Arte JELÚ"
        class="nav-logo" />
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
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle nav-art"
            href="#"
            id="submenuEventos"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
            Eventos
          </a>

          <ul class="dropdown-menu dropdown-menu-end glass-dropdown" aria-labelledby="submenuEventos">
            <li>
              <a class="dropdown-item nav-art" href="musica.php">
                LIVE MUSIC
              </a>
            </li>
            <li>
              <a class="dropdown-item nav-art" href="programa.php">
                Romeo y Julieta
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO SUPERIOR (MINIMALISTA) -->

<header
  class="program-hero d-flex align-items-center justify-content-center">
  <div class="program-overlay"></div>
  <div class="text-center program-hero-text">
    <p class="hero-subtitle">
      <strong>12 de Diciembre de 2025 - <a target="_blank" href="https://maps.app.goo.gl/hEWKUEc1VqcxGv5CA">Teatro del Colegio Sta. Rosa de Lima</a> -
        21hs</strong>
    </p>
    <h1 class="hero-title-programa">ROMEO Y JULIETA</h1>
    <!-- <p class="hero-subtitle">Una noche de arte, movimiento y emoción</p> -->
    <h2 class="section-title artistic-title text-center mb-4">Sinopsis</h2>

    <div class="sinopsis-container">
      <p class="sinopsis">
        En Verona, dos familias poderosas —los Montesco y los Capuleto—
        viven atrapadas en un odio tan antiguo que ya nadie recuerda por qué
        empezó. Entre discusiones, peleas y bailes, nace un amor imposible
        entre dos jóvenes de mundos opuestos: Romeo, hijo Montesco, y
        Julieta, hija Capuleto. La obra combina teatro y cuatro estilos de
        danza —clásico, contemporáneo, árabe y ritmos urbanos— para mostrar
        cómo el amor puede abrirse paso incluso en medio del conflicto, la
        tradición y la violencia.
      </p>
    </div>
  </div>
</header>

<!-- CONTENIDO -->
<section class="container py-5">
  <h2 class="section-title artistic-title text-center mb-4">
    Ficha Técnica
  </h2>

  <div class="soft-card p-4 mb-5">
    <p><strong>Dirección general:</strong> Maria Celeste Reta</p>
    <p>
      <strong>Libreto y adaptación:</strong> Maria Celeste Reta, Carla
      Quiroga, Guillermina Di Lorenzo
    </p>
    <p>
      <strong>Puresta coreográfica:</strong> Karen Tello, Luna Ortiz,
      Sebastián González, Lucrecia Frulla, Marisol Pinilla.
    </p>
    <p><strong>Puesta teatal:</strong>Maria Celeste Reta y Guillermina Di Lorenzo</p>
    <!-- <p><strong>Iluminación y sonido:</strong> Equipo Técnico</p> -->
  </div>

</section>

<section class="container py-5">
  <h2
    class=" artistic-title text-center mt-5 mb-4 text-4xl font-bold tracking-wide">
    Artistas
  </h2>

  <div class="accordion" id="actosPrograma">
    <!-- ITEM 1 -->
    <div
      class="accordion-item mb-3 border-2 border-yellow-300 rounded shadow-sm">
      <h2 class="accordion-header">
        <button
          class="accordion-button bg-white text-gray-800 fw-bold"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#c1">
          <span class="me-3 text-yellow-500">🌼</span>
          Jardín de danza
        </button>
      </h2>
      <div id="c1" class="accordion-collapse collapse show">
        <div class="accordion-body">
          <ul class="list-disc ps-4 text-gray-700" style="color: #444">
            <li>Brown, Victoria</li>
            <li>García, Ma. Paula</li>
            <li>García, Martina</li>
            <li>Montaño, Salomé </li>
            <li>Perisotto, Guillermina</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div
      class="accordion-item mb-3 border-2 border-yellow-300 rounded shadow-sm">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed bg-white text-gray-800 fw-bold"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#c2">
          <span class="me-3 text-yellow-500">💃</span>
          Danza Clásica y Contemporánea
        </button>
      </h2>
      <div id="c2" class="accordion-collapse collapse">
        <div class="accordion-body">
          <ul class="list-disc ps-4 text-gray-700">
            <li>Andino, Micaela</li>
            <li>Bataller, Noha</li>
            <li>Bedini, Jazmín </li>
            <li>Campillay, Sofia</li>
            <li>Carballo, Ana Paula</li>
            <li>Garino, Isabella</li>
            <li>Maldonado, Justina</li>
            <li>Martínez, Paz</li>
            <li>Paredes, Morena</li>
            <li>Rodari, Guillermina</li>
            <li>Romero, Ma. Emilia</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div
      class="accordion-item mb-3 border-2 border-yellow-300 rounded shadow-sm">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed bg-white text-gray-800 fw-bold"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#c3">
          <span class="me-3 text-yellow-500">✨</span>
          Danzas Árabes
        </button>
      </h2>
      <div id="c3" class="accordion-collapse collapse">
        <div class="accordion-body">
          <ul class="list-disc ps-4 text-gray-700">
            <li>Bataller, Noha</li>
            <li>Castro, Aixa</li>
            <li>Correa, Julieta</li>
            <li>Correa, Leticia</li>
            <li>Crespo, Guillermina </li>
            <li>Diaz, Martina</li>
            <li>Freire, Maitena</li>
            <li>Rodríguez, Albertina</li>
            <li>Tello, Karen</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div
      class="accordion-item mb-3 border-2 border-yellow-300 rounded shadow-sm">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed bg-white text-gray-800 fw-bold"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#c4">
          <span class="me-3 text-yellow-500">🎭</span>
          Teatro
        </button>
      </h2>
      <div id="c4" class="accordion-collapse collapse">
        <div class="accordion-body">
          <ul class="list-disc ps-4 text-gray-700">
            <li>Maggini, Ma. Laura </li>
            <li>Millán, Benicio</li>
            <li>Pardo, Johana</li>
            <li>Pizarro, Tatiana</li>
            <li>Portillo, Juan</li>
            <li>Quiroga, Carla</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ITEM 5 -->
    <div
      class="accordion-item mb-3 border-2 border-yellow-300 rounded shadow-sm">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed bg-white text-gray-800 fw-bold"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#c5">
          <span class="me-3 text-yellow-500">🔥</span>
          Ritmos Urbanos
        </button>
      </h2>
      <div id="c5" class="accordion-collapse collapse">
        <div class="accordion-body">
          <ul class="list-disc ps-4 text-gray-700">
            <li>Bustelo, Renata </li>
            <li>Coradeghini, Agostina</li>
            <li>Crespo, Guillermina</li>
            <li>Diaz, Martina</li>
            <li>Gun, Julieta</li>
            <li>Lenzano, Martina</li>
            <li>Lepez, Julieta</li>
            <li>Palacio, Abril</li>
            <li>Pavet, Amparo</li>
            <li>Rimolo, Ma. Pilar </li>
            <li>Riarte, Candela</li>
            <li>Torres, Justina</li>
            <li>Villareal, Olivia</li>

          </ul>
        </div>
      </div>
    </div>

    <!-- ITEM 6 -->
    <div
      class="accordion-item mb-3 border-2 border-yellow-300 rounded shadow-sm">
      <h2 class="accordion-header">
        <button
          class="accordion-button collapsed bg-white text-gray-800 fw-bold"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#c6">
          <span class="me-3 text-yellow-500">⭐</span>
          Artistas Invitados
        </button>
      </h2>
      <div id="c6" class="accordion-collapse collapse">
        <div class="accordion-body">
          <ul class="list-disc ps-4 text-gray-700">

            <li>Bataller, Farid </li>
            <li>Cortez, Kevin</li>
            <li>Muñoz, Franco </li>

            <li>Varas, Santiago</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container py-5">
  <h2 class="section-title artistic-title text-center mt-5">Actos</h2>

  <!-- ACORDEÓN DE ACTOS Y APAGONES -->
  <div class="accordion mt-4" id="actosPrograma">
    <!-- APAGÓN 1 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="apag1">
        <button
          class="accordion-button"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseApag1">
          🔦 Apertura
        </button>
      </h2>
      <div id="collapseApag1" class="accordion-collapse collapse show">
        <div class="accordion-body">
          El libro de la historia se abre. Las niñas más pequeñas presentan
          el mundo de Verona y el enfrentamiento entre las dos familias. Se
          anuncia el trágico destino que el público está por presenciar.
        </div>
      </div>
    </div>

    <!-- ACTO I -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="acto1">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseActo1">
          ⭐ Acto 1 – El encuentro
        </button>
      </h2>
      <div id="collapseActo1" class="accordion-collapse collapse">
        <div class="accordion-body">
          Entre fiestas, máscaras y coreografías que representan el choque
          entre las familias, Romeo y Julieta se ven por primera vez. El
          amor surge con fuerza y belleza, mientras el resto del mundo se
          mueve en tensión.<br /><br />
          El Acto termina con ambos jurando amor pese al odio que los rodea.
        </div>
      </div>
    </div>

    <!-- APAGÓN 2 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="apag2">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseApag2">
          🔦 Inicio del Acto 2
        </button>
      </h2>
      <div id="collapseApag2" class="accordion-collapse collapse">
        <div class="accordion-body">
          La historia se vuelve más profunda. El amor crece, secretamente.
          Se realiza la boda escondida. Pero una pelea inesperada termina en
          tragedia: un amigo fiel cae, la violencia estalla y Romeo es
          desterrado de Verona.<br /><br />
          Las danzas se vuelven más intensas, mostrando el dolor, la pérdida
          y la desesperación de la separación.
        </div>
      </div>
    </div>

    <!-- ACTO III -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="acto3">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseActo3">
          ⭐ Acto 3 – La tragedia y la esperanza
        </button>
      </h2>
      <div id="collapseActo3" class="accordion-collapse collapse">
        <div class="accordion-body">
          Julieta, presionada a casarse con otro hombre, acepta un plan
          arriesgado para reunirse con Romeo: toma una pócima que simula su
          muerte. El mensaje que debía avisarle a Romeo no llega a
          tiempo.<br /><br />
          Creyéndola muerta, Romeo vuelve a Verona y toma una decisión
          fatal… justo antes de que Julieta despierte.<br /><br />
          En un final profundamente emotivo, ambas familias comprenden que
          su odio destruyó lo que más amaban. Las danzas finales representan
          la reconciliación, la paz y el mensaje eterno:
          <strong>el amor siempre es más fuerte que la violencia.</strong>
        </div>
      </div>
    </div>

    <!-- APAGÓN 3 -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="apag3">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseApag3">
          🔦 Final
        </button>
      </h2>
      <div id="collapseApag3" class="accordion-collapse collapse">
        <div class="accordion-body">
          Se cierra el libro.<br />
          La historia termina… pero la enseñanza queda abierta para siempre.
        </div>
      </div>
    </div>
  </div>


</section>
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
        <img
          src="img/staff/Celeste.jpeg"
          class="staff-img mb-3"
          alt="Staff 1" />
        <h4 class="staff-name">Celeste</h4>
        <p class="staff-text">Dirección</p>
      </div>
    </div>
    <!-- ITEM 3 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Carla.jpeg"
          class="staff-img mb-3"
          alt="Staff 3" />
        <h4 class="staff-name">Carla</h4>
        <p class="staff-text">Secretaria</p>
      </div>
    </div>
    <!-- ITEM 3 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Said.jpeg"
          class="staff-img mb-3"
          alt="Staff 3" />
        <h4 class="staff-name">Said</h4>
        <p class="staff-text">Dabke, Idioma Arabe</p>
      </div>
    </div>
    <!-- ITEM 2 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Guillermina.jpeg"
          class="staff-img mb-3"
          alt="Staff 2" />
        <h4 class="staff-name">Guillermina</h4>
        <p class="staff-text">Teatro, reitacion y arte escenico</p>
      </div>
    </div>

    <!-- ITEM 4 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Sol.jpeg"
          class="staff-img mb-3"
          alt="Staff 4" />
        <h4 class="staff-name">Marisol</h4>
        <p class="staff-text">Ritmos urbanos</p>
      </div>
    </div>
    <!-- ITEM 5 -->
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Lucrecia.jpeg"
          class="staff-img mb-3"
          alt="Staff 4" />
        <h4 class="staff-name">Lucrecia</h4>
        <p class="staff-text">Danzas Arabes</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Seba.jpeg"
          class="staff-img mb-3"
          alt="Staff 4" />
        <h4 class="staff-name">Sebastian</h4>
        <p class="staff-text">Danza contemporanea</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Luna.jpeg"
          class="staff-img mb-3"
          alt="Staff 4" />
        <h4 class="staff-name">Luna</h4>
        <p class="staff-text">Danza clásica</p>
      </div>
    </div>
    <div class="col-md-6">
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle nav-art"
          href="#"
          id="submenuEventos"
          role="button"
          data-bs-toggle="dropdown"
          aria-expanded="false">
          Eventos
        </a>

        <ul class="dropdown-menu dropdown-menu-end glass-dropdown" aria-labelledby="submenuEventos">
          <li>
            <a class="dropdown-item nav-art" href="musica.php">
              LIVE MUSIC
            </a>
          </li>
          <li>
            <a class="dropdown-item nav-art" href="programa.php">
              Romeo y Julieta
            </a>
          </li>
        </ul>
      </li>
      <div class="staff-card p-4 text-center">
        <img
          src="img/staff/Caren.jpeg"
          class="staff-img mb-3"
          alt="Staff 4" />
        <h4 class="staff-name">Karen</h4>
        <p class="staff-text">Jardín de danza y teatro</p>
      </div>
    </div>
  </div>
</section>


<!-- GALERÍA -->
<section class="container py-5">
  <h2 class="section-title artistic-title text-center mt-5">
    Galería de la Función
  </h2>

  <div
    id="carouselPrograma"
    class="carousel slide mt-4"
    data-bs-ride="carousel">

    <!-- CONTENEDOR DE SLIDES -->
    <div class="carousel-inner rounded-4 shadow-lg">

      <?php
      $dir = "img/funcion_teatro/";
      $imagenes = array_diff(scandir($dir), ['.', '..']);

      sort($imagenes); // orden alfabético

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
              alt="Galería función" />
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
      data-bs-target="#carouselPrograma"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselPrograma"
      data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>
  <!-- /carousel -->
</section>




<div class="modal fade" id="modalImagen" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content modal-img-wrapper">
      <!-- BOTÓN X PARA CERRAR -->
      <button
        type="button"
        class="btn-close modal-close-btn"
        data-bs-dismiss="modal"></button>

      <img id="imagenAmpliada" src="" class="img-fluid rounded shadow" />
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer class="soft-footer text-center p-4">
  <p>📞 Tel: 0264 155838325 · ✉️ colegiojelu@gmail.com</p>
  <p>📍 Maglioli sur 525 Rivadavia</p>
</footer>

 <!-- BOTÓN FLOTANTE WHATSAPP -->
<a
  href="https://wa.me/5492645838325?text=Hola,%20quisiera%20hacer%20una%20consulta"
  class="whatsapp-float"
  target="_blank"
  aria-label="Consultar por WhatsApp"
>
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>