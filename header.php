<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gurukrupa Agri Mart - Gaudwadi</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-color: #fefefe;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
       .bg-pomegranate {
  background-color: #c0392b;
}


.navbar .nav-link {
  color: #fff !important;
}
.navbar .nav-link:hover,
.navbar .dropdown-menu a:hover {
  color: #ffc107 !important;
}
.navbar {
  position: relative;
  z-index: 1060;
}

.dropdown-menu {
  z-index: 1050 !important;
}

.bannner {
  z-index: 1;
  position: relative;
  overflow: visible !important;
}

.dropdown-menu {
  background-color: #fff;
}
.dropdown-menu a {
  color: #c0392b;
  font-weight: 500;
}

    </style>
</head>

<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-pomegranate fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="image/logo.png" alt="Logo" style="width: 45px; height: 45px;" class="me-2">
        <span class="fw-bold fs-5">Gurukrupa Agri Mart</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="index.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
              Gallery
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="photo.php">Photos</a></li>
              <li><a class="dropdown-item" href="video.php">Videos</a></li>
              <li><a class="dropdown-item" href="achivement.php">Achievements</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="shop.php">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-semibold" href="book.php">Book</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
    });

    document.addEventListener('DOMContentLoaded', function() {
        const navbarToggler = document.querySelector('.navbar-toggler');
        const mainNav = document.getElementById('mainNav');

        if (navbarToggler && mainNav) {
            // Get Bootstrap's Collapse instance for #mainNav
            // We pass { toggle: false } to prevent it from auto-toggling on its own event if we ever manually trigger a click
            const bsCollapse = new bootstrap.Collapse(mainNav, { toggle: false });

            // Add double-click listener to the toggler button
            navbarToggler.addEventListener('dblclick', function(event) {
                event.preventDefault(); // Prevent default double-click behavior (like text selection)

                // Check if the navbar is currently showing
                if (mainNav.classList.contains('show')) {
                    bsCollapse.hide(); // Hide the navbar using Bootstrap's API
                }
            });
            // Single click for showing is handled by Bootstrap's data-bs-toggle="collapse" attribute on the button itself.
        }
    });
</script>
</body>
</html>