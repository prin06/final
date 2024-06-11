<?php
$host = 'localhost';
$dbname = 'id21600436_db_comentar';
$username = 'id21600436_princessg';
$password = 'Pp*22040003';
$cnnPDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$cnnPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['registrar'])) 
{  
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  if (!empty($nombre) && !empty($email) && !empty($subject) && !empty($message))
  {  
    // Convertir la primera letra del nombre en mayúscula
    $nombre = ucwords($nombre);
    
    $sql = $cnnPDO->prepare("INSERT INTO comentar (nombre, email, subject, message) VALUES (:nombre, :email, :subject, :message)");
    
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':subject', $subject);
    $sql->bindParam(':message', $message);
    $sql->execute();
    unset($sql);
  }
  header('location:##testimonials');
}

// Recuperar comentarios de la base de datos
$sql = $cnnPDO->prepare("SELECT * FROM comentar");
$sql->execute();
$comentarios = $sql->fetchAll(PDO::FETCH_ASSOC);
unset($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>W Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/lo2sf.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: EstateAgency
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo">
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="index.html" class="logo"><img src="assets/img/lo2sf.png" alt="" class="img-fluid"></a></h1>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#work">Our work</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <h1>Welcome to <span style="color: #B7D0DC;">W Services</span></h1>
    <h2>We'll treat your home like it's our own.</h2>
    <a href="#contact" class="btn-get-started scrollto">Get a Quote!</a>
  </div>
</section><!-- End Hero -->


  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="about" class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">About W Services</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Customer service</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  We take the time to understand your needs and preferences to offer you a personalized service. We advise you on the choice of colors and finishes, and we stay in constant communication with you throughout the painting process.
                
                  </p>
              </div>
              <div class="card-footer-c">
                <button class="cta">
                  <a href="#contact" class="btn-get-started scrollto"><span>Get a Quote</span></a>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Quality</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  We only use materials from the best brands to guarantee an impeccable and durable finish. We are committed to offering you a service that meets your expectations and exceeds industry standards.
                </p>
              </div>
              <div class="card-footer-c">
                <button class="cta">
                  <a href="#contact" class="btn-get-started scrollto"><span>Get a Quote</span></a>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Professionalism</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  We make sure to protect your furniture and your home during the painting process, utilizing meticulous care. We use appropriate techniques for each surface to ensure a durable and attractive finish that will last for years to come.</p>
              </div>
              <div class="card-footer-c">
                <button class="cta">
                  <a href="#contact" class="btn-get-started scrollto"><span>Get a Quote</span></a>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->


</section><!-- /Features Section -->

<!-- ======= About Section ======= -->
<section id="about" class="section-about">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 section-t8 position-relative">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <img src="assets/img/a1.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-lg-2  d-none d-lg-block position-relative">
            <div class="title-vertical d-flex justify-content-start">
              <span>More than just painting, it's transformation</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 section-md-t3">
            <div class="title-box-d">
              <h3 class="title-d">Transform Your 
                <span class="color-d">Home</span> with the Experts
                <br> at W Services
              </h3>
            </div>
            <p class="color-text-a">
              At <span style="color: #51a2c8; font-weight: bold;">W Services</span>, we are experts in interior and exterior house painting. Our highly trained and experienced team will take care of every detail of the project, ensuring an impeccable and long-lasting end result.

            </p>
            <p class="color-text-a">
              We only use the highest quality materials, ensuring a perfect and weather-resistant finish. In addition, <span style="color: #51a2c8; font-weight: bold;">we take care to protect your home throughout the painting process</span> , from surface preparation to final cleaning.

            </p>
            <p> 
              <span style="color: #51a2c8; font-weight: bold;">We'll treat your home like it's our own </span> , which is why we strive to offer impeccable and personalized service.
            </p>

            <p>
              Request a <span style="color: #51a2c8; font-weight: bold;">free quote </span> today and see why W Services is the best option to paint your house.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <!-- ======= Latest Properties Section ======= -->
    <section id="work" class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our work</h2>
              </div>
              <div class="title-link">
                <button class="cta">
                  <a href="#contact" class="btn-get-started scrollto"><span>Get a Quote</span></a>
                  <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/m1.jpg" alt="" class="img-a img-fluid">
                </div>
                
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/e1.jpg" alt="" class="img-a img-fluid">
                </div>
                
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/e2.jpg" alt="" class="img-a img-fluid">
                </div>
                
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img/e4.jpg" alt="" class="img-a img-fluid">
                </div>
               
              </div>
            </div><!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <br>

<!-- Recent Posts Section -->
<section id="services" class="recent-posts section">

 

  <div class="container">

    <div class="title-box">
      <h2 class="title-a">Services</h2>
    </div>

    <br>
    <br>
    <div class="row gy-4">

      
      
      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <article>

          <div class="post-img">
            <img src="assets/img/b2.jpg" alt="" class="img-fluid">
          </div>


          <h2 class="title">
            Interior Painting
          </h2>

          <div class="d-flex align-items-center">
            <div class="post-meta">
              <p>
                Transform your home's interior with a fresh coat of paint and experience the transformative power of color.</p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <article>

          <div class="post-img">
            <img src="assets/img/e5.jpg" alt="" class="img-fluid">
          </div>

          <h2 class="title">
            Deck Finishing & Maintenance
          </h2>

          <div class="d-flex align-items-center">
            <div class="post-meta">
              <p>
                Protect your outdoor oasis! We'll restore your deck's beauty and extend its lifespan with expert finishing and maintenance.
              </p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <article>

          <div class="post-img">
            <img src="assets/img/m1.jpg" alt="" class="img-fluid">
          </div>

          <h2 class="title">
            Power Washing Cleaning
          </h2>

          <div class="d-flex align-items-center">
           <div class="post-meta">
             <p>
              Blast away dirt, grime, and mold! Get your home sparkling clean with our powerful and professional pressure washing service.
             </p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->

    </div><!-- End recent posts list -->

    <br>

    <div class="row gy-4">

      
      
      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <article>

          <div class="post-img">
            <img src="assets/img/m2.jpg" alt="" class="img-fluid">
          </div>


          <h2 class="title">
           Exterior Painting
          </h2>

          <div class="d-flex align-items-center">
            <div class="post-meta">
              <p>
                Make a lasting impression with a stunning exterior paint job that enhances your home's curb appeal.

</p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <article>

          <div class="post-img">
            <img src="assets/img/e4.jpg" alt="" class="img-fluid">
          </div>

          <h2 class="title">
            Wallpaper Removal
          </h2>

          <div class="d-flex align-items-center">
            <div class="post-meta">
              <p>
                Want a new look without the hassle? We'll expertly remove your old wallpaper, leaving your walls smooth and ready for your design dreams.</p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <article>

          <div class="post-img">
            <img src="assets/img/e7.jpg" alt="" class="img-fluid">
          </div>

          <h2 class="title">
            Textured Popcorn Ceiling Removal
          </h2>

          <div class="d-flex align-items-center">
           <div class="post-meta">
             <p>
              Eliminate outdated popcorn ceilings and open up your living space. We handle it all, leaving you with a clean, modern look.</p>
            </div>
          </div>

        </article>
      </div><!-- End post list item -->

    </div><!-- End recent posts list -->

  </div>

</section><!-- /Recent Posts Section -->

<!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimonials</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">
          <?php foreach ($comentarios as $comentario) { ?>
  <div class="carousel-item-a swiper-slide">
    <div class="testimonials-box">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="testimonial-img">
            <img src="assets/img/m1.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="testimonial-ico">
            <i class="bi bi-chat-quote-fill"></i>
          </div>
          <div class="testimonials-content">
            <!-- Añadir subject en negritas arriba -->
            <p class="testimonial-subject">
              <strong><?= htmlspecialchars($comentario['subject']) ?></strong>
            </p>
            <!-- Añadir message abajo como texto -->
            <p class="testimonial-text">
              <?= htmlspecialchars($comentario['message']) ?>
            </p>
          </div>
          <div class="testimonial-author-box">
            <img src="assets/img/default-avatar.jpg" alt="" class="avatar-testimonial">
            <h5 class="testimonial-author"><?= htmlspecialchars($comentario['nombre']) ?></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
  
  <!-- ======= Contact Single ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">Contact US</h1>
                </div>
                <br>
                <br>
            </div>
            <div class="col-md-7">
              <form method="POST" id="registroForm">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="nombre" id="idnom"class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" id="idemail" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="subject" id="idsub" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea name="message" id="idmess"  class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                    </div>
                    <br>
                  </div>
                  

                  <div class="col-md-6 text-center">
                    <button type="submit" id="btnEnviar" name="enviar" class="btn btn-a">Enviar Email</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <button type="submit" id="btnEnviar" name="registrar" class="btn btn-a">Subir comentario</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="bi bi-envelope"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a" style="color: #51a2c8; font-weight: bold;">wservices0000@gmail.com</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a" style="color: #51a2c8; font-weight: bold;">+1 (825) 735-1169</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a" style="color: #51a2c8; font-weight: bold;">+1 (902) 989-2125</span>
                    </p>
                  </div>
                </div>
              </div>

              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="bi bi-share"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="https://www.facebook.com/profile.php?id=61558254773182" class="link-one" target="_blank">
                            <i class="bi bi-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.instagram.com/wmultiservice.s/" class="link-one" target="_blank">
                            <i class="bi bi-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Single-->

  <br>
  <br>

  <footer id="footer">
    
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong style="color: #B7D0DC;">WServices</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>