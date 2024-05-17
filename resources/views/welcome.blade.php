<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vividis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="style-landing.css">
  </head>
  <body>
    <nav id="navbar-example2" class="navbar sticky-top navbar-light px-3 ">
      <a class="navbar-brand"  href="#inicio"></a>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="#inicio" style="color:black;">INICIO</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#cita" style="color:black;">AGENDA TU CITA</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#faqs" style="color:black;">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosotros" style="color:black;">NOSOTROS</a>
        </li>
      </ul>
    </nav>
    <main data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
      <!--inicio Section Start-->
      <section id="inicio" class="section">
        <div id="banner">
      <img src="img\banner.jpg" alt="banner" style="width:100%;">
    </div>
      </section>
      <!--inicio Section End-->

      <!--Agenda Tu Cita Section Start-->
      <section id="cita" class="section">
        <h1>AGENDA TU CITA</h1>
      </section>
      <!--Agenda Tu Cita Section End-->

      <!--Faqs Section Start-->
      <section id="faqs" class="section">
        <h1>FAQs</h1>
      </section>
      <!--Faqs Section End-->

      <!--Nosotros Section Start-->
      <section id="nosotros" class="section">
        <main class="py-1">
          <div class="container">
            <div class="row">
              <article class="col-md-8">
                <h1>NOSOTROS</h1>
                <h2>Nuestra misión y valores</h2>
                <p>En [Nombre del salón de belleza], con más de 20 años de experiencia, estamos comprometidos a:</p>
                <ul>
                  <li>Brindar servicios de belleza de la más alta calidad, utilizando técnicas innovadoras y productos de primera línea para realzar la belleza natural de nuestros clientes.</li>
                  <li>Crear un ambiente cálido y acogedor, donde nuestros clientes se sientan cómodos, valorados y escuchados.</li>
                  <li>Ofrecer un servicio personalizado y atento, atendiendo a las necesidades y preferencias individuales de cada cliente.</li>
                  <li>Fomentar la confianza y el bienestar, ayudando a nuestros clientes a sentirse seguros y radiantes en su propia piel.</li>
                  <li>Mantenernos a la vanguardia de las tendencias, actualizándonos constantemente en las últimas técnicas y productos del sector de la belleza.</li>
                  <li>Contribuir al desarrollo de la comunidad, ofreciendo oportunidades de trabajo y capacitación a personas talentosas.</li>
                </ul>
                <p>Nuestra pasión es la belleza, y nuestro objetivo es que cada cliente que visita nuestro salón se sienta bella por dentro y por fuera.</p>
                <div id="accordion">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h4 class="mb-0">
                        <a class="btn btn-link" data-toggle="collapse" data-target="#tab-mision" aria-controls="collapseOne">
                          Valores
                        </a>
                      </h4>
                    </div>
                    <div id="tab-mision" class="collapse show" data-parent="#accordion">
                      <div class="card-body">
                        <ul>
                          <li>Profesionalismo: Nos esforzamos por brindar un servicio impecable y de la más alta calidad.</li>
                          <li>Pasión: Amamos lo que hacemos y nos apasiona la belleza.</li>
                          <li>Integridad: Actuamos con honestidad y transparencia en todo momento.</li>
                          <li>Respeto: Valoramos a nuestros clientes y colaboradores, y tratamos a todos con amabilidad y cortesía.</li>
                          <li>Compromiso: Estamos comprometidos con la satisfacción de nuestros clientes y con el éxito de nuestro negocio.</li>
                        </ul>
                        <p>Más de 20 años de experiencia nos avalan.</p>
                        <p>¡Ven a [Nombre del salón de belleza] y descubre la belleza que hay en ti!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <aside class="col-12 col-md-4">
                <img src="img\diferenciales.jpg" alt="personal" style="width: 525px; height: 500px;">

              </aside>
            </div>

          </div>

        </main>
      </section>
      <!--Nosotros Section End-->      
    </main>
    <!-- Footer -->
<footer class="text-center text-lg-start text-muted">
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Vividis Salon Profesional
          </h6>
          <img src="img\lo.png" style="width: 250px;">
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Section: Social media -->
          <h6 class="text-uppercase fw-bold mb-4">
            Nuestras Redes Sociales
          </h6>
          <p>
            <a href="https://www.facebook.com/VividiSalon/?locale=es_LA" class="text-reset"><i class="fab fa-facebook-f"></i></a>
          </p>
          <p>
            <a href="https://www.instagram.com/vividisalon/" class="text-reset"><i class="fab fa-instagram"></i></a>
          </p>
          <p>
            <a href="https://www.tiktok.com/@vividisalon?is_from_webapp=1&sender_device=pc" class="text-reset"><i class="fab fa-tiktok"></i></a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Section: Social media -->
          <h6 class="text-uppercase fw-bold mb-4">
            SERVICIOS
          </h6>
          <p>
            <a href="#inicio" class="text-reset">INICIO</a>
          </p>
          <p>
            <a href="#cita" class="text-reset">AGENDAR CITA</a>
          </p>
          <p>
            <a href="#faqs" class="text-reset">FAQs</a>
          </p>
          <p>
            <a href="#nosotros" class="text-reset">NOSOTROS</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">CONTACTANOS</h6>
          <p><i class="fas fa-home me-3"></i>6TA CALLE 8-45 ZONA1,<br> BARRIO LAS CASAS, COATEPEQUE</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            contacto@vividisalonprofesional.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +502 5800-0465</p>
          <p><i class="fas fa-phone me-3"></i> +502 3997-6020</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:Vividis Salon Profesional
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">ADK</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  </html>