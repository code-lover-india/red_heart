<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaudwadi Pomegranate Farms - Enhanced Experience</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="stylesheet.css"> 
    <link rel="stylesheet" href="style.css"> 

    <style>
        body {
            font-family: 'Montserrat', sans-serif; /* Modern font */
            color: #333;
            background-color: #f0f2f5; /* Soft grey background */
            line-height: 1.7; /* Improved readability */
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif; /* Headings font */
            font-weight: 700;
        }
        .hero-banner-new {
            position: relative;
            height: 90vh; /* Prominent hero */
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 3rem 0;
        }
        .hero-banner-new video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            background-size: cover;
        }
        .hero-overlay-dark {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.65); /* Darker overlay for strong contrast */
            z-index: 0;
        }
        .hero-content-new {
            z-index: 1;
            padding: 2rem;
            max-width: 900px;
        }
        .section-padding-lg {
            padding: 120px 0; /* More generous spacing */
        }
        .section-padding-md {
            padding: 80px 0;
        }
        .feature-box {
            background-color: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            padding: 3rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 45px rgba(0, 0, 0, 0.15);
        }
        .feature-icon-circle {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            background-color: #b22222; /* Pomegranate red */
            color: white;
            margin-bottom: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        .text-pomegranate {
            color: #b22222;
        }
        .bg-light-grey {
            background-color: #f8f9fa; /* Light grey */
        }
        .bg-white-section {
            background-color: #ffffff; /* White section */
        }
        .img-fluid-rounded-xl {
            border-radius: 1rem; /* Larger rounded corners for images */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        /* Carousel refinements for attractive and user-friendly display */
        #photoCarousel .carousel-inner {
            border-radius: 1rem;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            background-color: #f0f2f5; /* Background for inner block */
        }
        #photoCarousel .carousel-item {
            display: flex !important; /* Ensure flex for centering */
            justify-content: center;
            align-items: center;
            height: 550px; /* Default height for larger screens */
        }
        #photoCarousel .carousel-item img {
            max-height: 100%; /* Limit height to container */
            max-width: 100%; /* Limit width to container */
            object-fit: contain; /* Ensure full image is visible, scale down */
            border-radius: 0.75rem;
            margin: auto; /* Center the image */
            display: block; /* Ensure it behaves as a block element for margin:auto */
        }

        /* Media queries for responsive carousel image height */
        @media (max-width: 1200px) { /* Laptops and smaller desktops */
            #photoCarousel .carousel-item {
                height: 480px;
            }
        }
        @media (max-width: 991.98px) { /* Tablets and smaller laptops */
            #photoCarousel .carousel-item {
                height: 400px;
            }
        }
        @media (max-width: 767.98px) { /* Mobile devices */
            #photoCarousel .carousel-item {
                height: 300px;
            }
            #photoCarousel .carousel-caption {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }
            #photoCarousel .carousel-caption h5 {
                font-size: 1.1rem;
            }
        }

        #photoCarousel .carousel-caption {
            background-color: rgba(0, 0, 0, 0.75);
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            bottom: 35px;
            left: 50%;
            transform: translateX(-50%);
            width: auto;
            max-width: 80%;
            white-space: normal;
            text-overflow: unset;
            font-size: 1.1rem;
            line-height: 1.4;
            opacity: 0.9;
        }
        #photoCarousel .carousel-caption h5 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }
        /* Enhanced Arrow Styling */
        #photoCarousel .carousel-control-prev,
        #photoCarousel .carousel-control-next {
            width: 10%; /* Even wider control area for better clickability */
            opacity: 1; /* Always visible */
            transition: all 0.3s ease;
            background: linear-gradient(to right, rgba(178, 34, 34, 0.2), rgba(178, 34, 34, 0)); /* Gradient background for a softer look */
            border-radius: 0; /* Remove rounding, use gradient */
        }
        #photoCarousel .carousel-control-next {
            background: linear-gradient(to left, rgba(178, 34, 34, 0.2), rgba(178, 34, 34, 0));
        }

        #photoCarousel .carousel-control-prev:hover,
        #photoCarousel .carousel-control-next:hover {
            background: linear-gradient(to right, rgba(178, 34, 34, 0.4), rgba(178, 34, 34, 0)); /* Darker on hover */
        }
        #photoCarousel .carousel-control-next:hover {
            background: linear-gradient(to left, rgba(178, 34, 34, 0.4), rgba(178, 34, 34, 0));
        }

        #photoCarousel .carousel-control-prev-icon,
        #photoCarousel .carousel-control-next-icon {
            font-size: 4rem; /* Larger icons for prominence */
            color: #ffda00; /* Yellow for high contrast */
            text-shadow: 0 0 10px rgba(0,0,0,0.9), 0 0 5px #b22222; /* Stronger shadow with a hint of red */
        }
        #photoCarousel .carousel-indicators [data-bs-target] {
            background-color: #b22222;
        }
        .quote-block {
            background-color: #fff0f0;
            border-left: 5px solid #b22222;
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin-top: 2rem;
            font-style: italic;
            color: #555;
        }
        .contact-info-list li {
            font-size: 1.1rem;
            margin-bottom: 0.8rem;
        }
        .contact-icon-box {
            background-color: #ffffff;
            border-radius: 0.75rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            transition: all 0.3s ease;
        }
        .contact-icon-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
            background-color: #fdfdfd;
        }
        .contact-icon-box i {
            color: #b22222;
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<?php include("header.php");?>
<body>
  <main>
    <section class="hero-banner-new">
      <video class="background-video" autoplay loop muted playsinline>
        <source src="image/slider3.mp4" type="video/mp4">
      </video>
      <div class="hero-overlay-dark"></div>
      <div class="hero-content-new" data-aos="fade-up" data-aos-duration="1500">
        <h1 class="display-2 fw-bold mb-4">Gaudwadi Pomegranate Farms</h1>
        <p class="lead fst-italic mb-5">"Where tradition meets innovation: Cultivating the finest pomegranates with passion and dedication."</p>
        <a href="#about-us" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 shadow-lg">Discover Our Story <i class="bi bi-arrow-right-circle-fill ms-2"></i></a>
      </div>
    </section>

    <section id="about-us" class="section-padding-lg bg-white-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
            <img src="image/about.jpg" alt="Gaudwadi Village" class="img-fluid img-fluid-rounded-xl">
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <h2 class="display-5 fw-bold text-pomegranate mb-4">About Gaudwadi Village</h2>
            <p class="lead">Gaudwadi, a beacon of agricultural excellence in <strong>Sangola Taluk, Maharashtra</strong>, is renowned for its pomegranate cultivation. Recognized by the <strong>District Collector</strong>, our village stands as a testament to sustainable farming and community collaboration.</p>
            <div class="quote-block">
                <p class="mb-0 text-pomegranate">"गौडवाडीची माती म्हणजे अनमोल ठेवा, तिथं उगमतो डाळिंबाचा राजा – कष्ट, प्रेम आणि परंपरेचं प्रतीक!" <img src="image/dalimb3.jpg" alt="Pomegranate" style="width: 30px; height: 35px;" class="rounded-circle me-2" >  <img src="image/leafs.jpg" alt="Leaves" style="width: 35px; height: 30px;" class="rounded-circle me-2" ></p>
            </div>
            <div class="row text-center mt-4 pt-3">
              <div class="col-md-4 mb-3">
                <i class="bi bi-droplet-half text-pomegranate fs-2 mb-2"></i>
                <p class="fw-bold mb-0">90% Drip Irrigation</p>
              </div>
              <div class="col-md-4 mb-3">
                <i class="bi bi-bar-chart-line-fill text-pomegranate fs-2 mb-2"></i>
                <p class="fw-bold mb-0">850 Acres Land</p>
              </div>
              <div class="col-md-4 mb-3">
                <i class="bi bi-people-fill text-pomegranate fs-2 mb-2"></i>
                <p class="fw-bold mb-0">100+ Farmers Inspired</p>
              </div>
            </div>
            <a href="about.php" class="btn btn-danger btn-lg px-5 py-2 rounded-pill mt-4">Learn More <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section id="gurukrupa-mart" class="section-padding-lg bg-light-grey">
      <div class="container">
        <div class="row align-items-center flex-row-reverse">
          <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-left">
            <img src="image/gurukrupa.jpg" alt="Gurukrupa Agri Mart" class="img-fluid img-fluid-rounded-xl">
          </div>
          <div class="col-lg-6" data-aos="fade-right">
            <h2 class="display-5 fw-bold text-pomegranate mb-4">Gurukrupa Agri Mart</h2>
            <p class="lead">Located in <strong>Sangola, Maharashtra</strong>, Gurukrupa Agri Mart is a cornerstone for local farmers, providing quality agricultural inputs and fostering growth in the community.</p>
            <div class="quote-block">
              <p class="mb-0 text-pomegranate">"शेती म्हणजे आपली शान, गुरूकृपा आहे प्रत्येक शेतकऱ्याचा आधारस्थान!" <img src="image/leafs.jpg" alt="Leaves" style="width: 35px; height: 30px;" class="rounded-circle me-2" ><img src="image/tractor.jpg" alt="Tractor" style="width: 30px; height: 35px;" class="rounded-circle me-2" > </p>
            </div>
            <div class="row text-center mt-4 pt-3">
              <div class="col-md-4 mb-3">
                <i class="bi bi-box-seam text-pomegranate fs-2 mb-2"></i>
                <p class="fw-bold mb-0">Wide Product Range</p>
              </div>
              <div class="col-md-4 mb-3">
                <i class="bi bi-people-fill text-pomegranate fs-2 mb-2"></i>
                <p class="mb-0">Trusted Partner</p>
              </div>
              <div class="col-md-4 mb-3">
                <i class="bi bi-geo-fill text-pomegranate fs-2 mb-2"></i>
                <p class="fw-bold mb-0">Local Support</p>
              </div>
            </div>
            <a href="shop.php" class="btn btn-danger btn-lg px-5 py-2 rounded-pill mt-4">Visit the Mart <i class="bi bi-shop"></i></a>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding-lg bg-white-section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-pomegranate">Our Core Values</h2>
                <p class="lead text-muted">Principles that guide our farming and community initiatives.</p>
            </div>
            <div class="row text-center g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-box">
                        <div class="feature-icon-circle"><i class="bi bi-leaf-fill"></i></div>
                        <h4 class="fw-bold mb-3">Sustainability</h4>
                        <p class="text-muted">We employ eco-friendly practices to ensure the long-term health of our land and crops.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-box">
                        <div class="feature-icon-circle"><i class="bi bi-hand-heart-fill"></i></div>
                        <h4 class="fw-bold mb-3">Community Growth</h4>
                        <p class="text-muted">Fostering strong bonds within our farming community for mutual prosperity and knowledge sharing.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-box">
                        <div class="feature-icon-circle"><i class="bi bi-gem"></i></div>
                        <h4 class="fw-bold mb-3">Uncompromising Quality</h4>
                        <p class="text-muted">Our commitment to excellence ensures every pomegranate from Gaudwadi meets the highest standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="section-padding-lg bg-light-grey">
      <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
          <h2 class="display-5 fw-bold text-pomegranate">Our Pomegranate World in Pictures</h2>
          <p class="lead text-muted">A vibrant collection showcasing our farms and produce.</p>
        </div>

        <div id="photoCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="100">
          <?php require('admin/db_connection.php'); ?>
          <?php
          $query = "SELECT * FROM photo ORDER BY id DESC"; // Fetch all photos for the carousel
          $result = mysqli_query($mysqli, $query);
          $photos = [];
          if ($result && mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_array($result)) {
                  $photos[] = $row;
              }
          }
          ?>

          <?php if (!empty($photos)): ?>
            <div class="carousel-indicators">
              <?php foreach ($photos as $index => $photo): ?>
                <button type="button" data-bs-target="#photoCarousel" data-bs-slide-to="<?= $index ?>" class="<?= $index === 0 ? 'active' : '' ?>" aria-current="<?= $index === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $index + 1 ?>"></button>
              <?php endforeach; ?>
            </div>

            <div class="carousel-inner">
              <?php foreach ($photos as $index => $photo): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                  <img src="admin/<?= $photo['filename']; ?>" class="d-block" alt="Photo <?= $index + 1 ?>">
                  <div class="carousel-caption d-none d-md-block">
                    <h5><?= htmlspecialchars($photo['filename']); // Consider adding a 'caption' field to your DB for better descriptions ?></h5>
                    <a href="photo_view.php?id=<?= $photo['id']; ?>" class="btn btn-sm btn-outline-light rounded-pill mt-2">View Full Image <i class="bi bi-fullscreen"></i></a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          <?php else: ?>
            <div class="text-center py-5">
              <p class="lead text-muted">No photos available yet to display in the carousel.</p>
            </div>
          <?php endif; ?>
        </div>

        <div class="text-center mt-5" data-aos="zoom-in" data-aos-delay="200">
          <a href="photo.php" class="btn btn-danger btn-lg rounded-pill px-5 py-3">View All Photos <i class="bi bi-images"></i></a>
        </div>
      </div>
    </section>

    <section id="contact-history" class="section-padding-lg bg-white-section">
      <div class="container">
        <div class="row g-4 justify-content-center">
          <div class="col-lg-6 mb-4" data-aos="fade-right">
            <div class="feature-box">
              <div class="feature-icon-circle"><i class="bi bi-envelope-fill"></i></div>
              <h3 class="fw-bold text-pomegranate mb-3">Get in Touch</h3>
              <p class="text-muted mb-4">Have questions, proposals, or just want to connect? We're eager to hear from you. Your feedback helps us grow! <img src="image/dalimb3.jpg" alt="Pomegranate" style="width: 30px; height: 35px;" class="rounded-circle me-2" > .</p>
              <ul class="list-unstyled text-start w-100 contact-info-list px-3">
                <li><i class="bi bi-geo-alt-fill me-3 text-danger"></i> Gaudwadi Village, Taluka Sangola, Dist. Solapur, Maharashtra, India</li>
                <li><i class="bi bi-telephone-fill me-3 text-danger"></i> +91 98765 43210 (Farmer Contact / Inquiry)</li>
                <li><i class="bi bi-envelope-at-fill me-3 text-danger"></i> info@gaudwadipomegranates.in</li>
              </ul>
              <a href="contact.php" class="btn btn-outline-danger btn-lg px-5 py-2 rounded-pill mt-4">Contact Us Now <i class="bi bi-chat-dots-fill"></i></a>
            </div>
          </div>
          <div class="col-lg-6 mb-4" data-aos="fade-left">
            <div class="feature-box">
              <div class="feature-icon-circle"><i class="bi bi-book-half"></i></div>
              <h3 class="fw-bold text-pomegranate mb-3">History Of Gaudwadi</h3>
              <p class="text-muted mb-4">Gaudwadi is a historically rooted settlement within Dalimb village. Its residents have traditionally relied on agriculture and animal husbandry, shaping a rich heritage intertwined with the land. <img src="image/leafs.jpg" alt="Leaves" style="width: 35px; height: 30px;" class="rounded-circle me-2" > .</p>
              <a href="Book.php" class="btn btn-outline-danger btn-lg px-5 py-2 rounded-pill mt-auto">Read Our History <i class="bi bi-book"></i></a>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 text-center g-4" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-4">
            <a href="http://maps.google.com/?q=Gaudwadi" target="_blank" class="text-decoration-none text-dark d-block contact-icon-box">
              <i class="fas fa-map-marker-alt mb-2"></i>
              <p class="fw-bold h5">Gaudwadi</p>
              <small class="text-muted">Tal: Sangola</small>
            </a>
          </div>
          <div class="col-md-4">
            <a href="https://wa.me/9322154515" target="_blank" onclick="goBackAfterWhatsApp()" class="text-decoration-none text-dark d-block contact-icon-box">
              <i class="fab fa-whatsapp mb-2"></i>
              <p class="fw-bold h5">+91 8390909690</p>
              <small class="text-muted">WhatsApp Us</small>
            </a>
          </div>
          <div class="col-md-4">
            <a href="mailto:gurukrupaagrimartgaudwadi@gmail.com" class="text-decoration-none text-dark d-block contact-icon-box">
              <i class="fas fa-envelope mb-2"></i>
              <p class="fw-bold h5">Email Us</p>
              <small class="text-muted">gurukrupaagrimartgaudwadi@gmail.com</small>
            </a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <script>
  function goBackAfterWhatsApp() {
    history.pushState(null, '', location.href);
    window.onpopstate = function () {
      window.location.href = "index.php"; // Redirect back to index.php
    };
  }
  </script>
</body>

<?php include("footer.php");?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
  });
</script>
</html>