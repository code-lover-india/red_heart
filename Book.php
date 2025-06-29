<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Download and view the detailed PDF about Gaudwadi village's journey in pomegranate cultivation, modern farming, and community development.">
    <meta name="keywords" content="Gaudwadi, pomegranate, PDF, document, agriculture, farming, history, modern techniques, rural development, Solapur, Maharashtra">
    <meta name="author" content="GuruKrupa AgriMart">

    <title>Gaudwadi Village Document - GuruKrupa AgriMart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="stylesheet.css"> 
    <link rel="stylesheet" href="style.css"> 

    <style>
        /* CSS Custom Properties (Variables) for easy theme management */
        :root {
            --primary-red: #dc3545; /* Your header/footer red */
            --dark-red-brand: #B22222; /* Deeper red for strong accents */
            --secondary-green: #28a745; /* New accent green */
            --secondary-green-dark: #218838; /* Darker green for hover */
            --background-light: #f8f9fa; /* Light grey background */
            --background-white: #ffffff; /* White for main content cards */
            --text-dark: #343a40; /* Darker text */
            --text-muted: #6c757d; /* Muted text */
            --border-color: #e9ecef; /* Light border color */
            
            /* **IMPORTANT: Header height variables for precise responsiveness** */
            /* **PLEASE VERIFY THESE VALUES by inspecting your header.php output** */
            --header-height-desktop: 80px; /* Adjust this based on your actual desktop header height */
            --header-height-mobile: 65px; /* Adjust this based on your actual mobile header height */
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--background-light);
            color: var(--text-dark);
            line-height: 1.6;
            padding-top: var(--header-height-desktop); /* Ensures content starts below the fixed header */
        }

        /* Header/Navbar Styles (assuming header.php includes these) */
        .navbar {
            background-color: var(--primary-red) !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1030;
            min-height: var(--header-height-desktop);
            display: flex;
            align-items: center;
        }
        .navbar-brand,
        .nav-link {
            color: #0c0b0b !important; /* Kept from your original */
            font-weight: 600;
        }
        .nav-link.active {
            text-decoration: underline;
        }

        /* --- Page-specific Styling --- */

        /* Hero Banner for PDF Page */
        .hero-banner-pdf-new {
            position: relative;
            height: calc(55vh - var(--header-height-desktop)); /* Slightly shorter, more focused */
            min-height: 250px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('image_3558d8.png') no-repeat center center/cover;
            background-position: center;
            background-size: cover;
            padding: 20px 15px;
            box-shadow: inset 0 -5px 15px rgba(0,0,0,0.2); /* Inner shadow for depth */
        }
        .hero-banner-pdf-new h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(2.2rem, 5vw, 4rem);
            text-shadow: 1px 1px 6px rgba(0,0,0,0.7);
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        .hero-banner-pdf-new p {
            font-size: clamp(1rem, 2vw, 1.3rem);
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.95;
        }

        /* Main Content Wrapper */
        .main-content-area {
            padding: 40px 0;
            background-color: var(--background-light);
        }

        /* Download Section */
        .download-section {
            text-align: center;
            margin-bottom: 40px;
        }
        .btn-download-pdf-new {
            background-color: var(--secondary-green);
            color: white;
            border: none;
            border-radius: 30px; /* Slightly more rounded */
            padding: 14px 40px; /* More prominent button */
            font-size: 1.15rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none; /* Ensure no underline */
        }
        .btn-download-pdf-new:hover {
            background-color: var(--secondary-green-dark);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }
        .btn-download-pdf-new i {
            margin-right: 12px;
            font-size: 1.2em;
        }

        /* PDF Viewer Iframe */
        .pdf-viewer-container {
            background-color: var(--background-white);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 20px;
            border: 1px solid var(--border-color);
            margin-bottom: 40px;
        }
        .pdf-viewer-iframe-new {
            width: 100%;
            height: 750px; /* Generous height for viewing */
            border: none; /* Remove iframe's default border */
            border-radius: 8px; /* Slightly rounded corners for iframe itself */
        }
        .pdf-viewer-container small {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        /* Summary Card Section */
        .summary-section-new {
            background-color: var(--background-white);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            border: 1px solid var(--border-color);
            margin-bottom: 50px;
        }
        .summary-section-new h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--dark-red-brand); /* Main heading color */
            margin-bottom: 25px;
            font-size: clamp(1.8rem, 3.5vw, 2.5rem);
            display: flex;
            align-items: center;
        }
        .summary-section-new h4 i {
            font-size: 1.1em;
            margin-right: 15px;
            color: var(--secondary-green); /* Accent color for icons */
        }
        .summary-section-new p, .summary-section-new ul {
            font-size: clamp(1rem, 1.5vw, 1.05rem);
            color: var(--text-muted);
            margin-bottom: 0.75rem;
        }
        .summary-section-new ul {
            list-style: none; /* Remove default bullets */
            padding-left: 0;
            margin-top: 15px;
        }
        .summary-section-new ul li {
            position: relative;
            padding-left: 30px; /* Space for custom checkmark */
            margin-bottom: 10px;
            line-height: 1.4;
        }
        .summary-section-new ul li::before {
            content: "\f058"; /* Font Awesome check-circle solid */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 0.1em;
            color: var(--secondary-green);
            font-size: 1.1em;
        }
        .summary-section-new ul ul li::before { /* For nested lists, a simpler circle */
            content: "\f111"; /* Font Awesome circle */
            font-weight: 900;
            color: var(--dark-red-brand);
            font-size: 0.7em;
            top: 0.35em;
            left: 5px; /* Adjust left for nested */
        }
        .summary-section-new ul ul li {
            padding-left: 25px; /* Adjust padding for nested list */
        }

        /* Footer Styles (assuming footer.php includes these) */
        footer {
            background-color: var(--primary-red) !important;
            color: white;
            padding: 0.1rem 0;
            text-align: center; 
        }
        .social-icons a {
            color: #ffe6cc; /* Lighter color for social icons */
            font-size: 22px;
            margin: 0 12px;
            transition: 0.3s;
        }
        .social-icons a:hover {
            color: #f8d7da; /* Lighter red-tinted white on hover */
            transform: translateY(-3px);
        }

        /* --- Responsive Adjustments --- */

        /* Tablets and smaller desktops (typically <992px) */
        @media (max-width: 991.98px) {
            .hero-banner-pdf-new {
                height: calc(45vh - var(--header-height-desktop));
                min-height: 200px;
            }
            .hero-banner-pdf-new h1 {
                font-size: 2.5rem;
            }
            .hero-banner-pdf-new p {
                font-size: 1.1rem;
            }
            .main-content-area {
                padding: 30px 0;
            }
            .btn-download-pdf-new {
                padding: 12px 30px;
                font-size: 1.05rem;
            }
            .pdf-viewer-container {
                padding: 15px;
            }
            .pdf-viewer-iframe-new {
                height: 600px;
            }
            .summary-section-new {
                padding: 30px;
            }
            .summary-section-new h4 {
                font-size: 2rem;
            }
            .summary-section-new p, .summary-section-new ul {
                font-size: 0.95rem;
            }
        }

        /* Mobile devices (typically <768px) */
        @media (max-width: 767.98px) {
            body {
                padding-top: var(--header-height-mobile); /* Use mobile header height */
            }
            .navbar {
                min-height: var(--header-height-mobile); /* Ensure consistency */
            }
            .hero-banner-pdf-new {
                height: calc(35vh - var(--header-height-mobile));
                min-height: 180px;
                padding: 15px;
            }
            .hero-banner-pdf-new h1 {
                font-size: 1.8rem;
            }
            .hero-banner-pdf-new p {
                font-size: 0.9rem;
            }
            .main-content-area {
                padding: 20px 0;
            }
            .btn-download-pdf-new {
                padding: 10px 25px;
                font-size: 1rem;
            }
            .pdf-viewer-container {
                padding: 10px;
                margin-bottom: 30px;
            }
            .pdf-viewer-iframe-new {
                height: 450px; /* Shorter for mobile */
            }
            .summary-section-new {
                padding: 25px;
                margin-bottom: 30px;
            }
            .summary-section-new h4 {
                font-size: 1.6rem;
                flex-direction: column; /* Stack icon and text for very small screens */
                align-items: flex-start;
                margin-bottom: 15px;
            }
            .summary-section-new h4 i {
                margin-right: 0;
                margin-bottom: 8px; /* Space below icon */
            }
            .summary-section-new p, .summary-section-new ul {
                font-size: 0.88rem;
            }
            .summary-section-new ul li {
                padding-left: 25px;
            }
        }

        /* Extra small devices (less than 576px) */
        @media (max-width: 575.98px) {
            .hero-banner-pdf-new {
                height: calc(30vh - var(--header-height-mobile));
                min-height: 150px;
            }
            .hero-banner-pdf-new h1 {
                font-size: 1.5rem;
            }
            .hero-banner-pdf-new p {
                font-size: 0.8rem;
            }
            .btn-download-pdf-new {
                padding: 8px 20px;
                font-size: 0.9rem;
            }
            .pdf-viewer-iframe-new {
                height: 350px;
            }
            .summary-section-new h4 {
                font-size: 1.4rem;
            }
            .summary-section-new p, .summary-section-new ul {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>

<?php include("header.php");?> 

<section class="hero-banner-pdf-new" data-aos="fade-in">
    <div class="container" data-aos="zoom-in" data-aos-delay="200">
        <h1>Discover the Story of Gaudwadi</h1>
        <p class="lead mt-3">
            Download the comprehensive document detailing the transformation of Gaudwadi into a leading pomegranate village.
        </p>
    </div>
</section>

<main class="container main-content-area">
    <div class="download-section" data-aos="fade-up">
        <a href="image/गौडवाडी डाळिंब गाव .pdf" class="btn btn-download-pdf-new" download>
            <i class="fas fa-file-download"></i> Download Full PDF Document
        </a>
    </div>
   


    <div class="pdf-viewer-container" data-aos="fade-up" data-aos-delay="200">
        <iframe src="image/गौडवाडी डाळिंब गाव .pdf#toolbar=0" class="pdf-viewer-iframe-new" title="Gaudwadi Village Document"></iframe>
        <small class="text-muted">
            Having trouble viewing the PDF? Please download it directly or ensure your browser supports PDF embedding.
        </small>
    </div>

    <div class="summary-section-new" data-aos="fade-down" data-aos-delay="200">
        <h4><i class="fas fa-info-circle"></i> संक्षिप्त माहिती (Summary)</h4>
        <p><strong>गावाचे नाव:</strong> गौडवाडी</p>
        <p><strong>वैशिष्ट्य:</strong> डाळिंब उत्पादनात अग्रेसर गाव</p>
        <p><strong>मुख्य मुद्दे:</strong></p>
        <ul>
            <li>शेतीमध्ये आधुनिक तंत्रज्ञानाचा वापर</li>
            <li>एकत्रित ग्रामविकासाचे उपक्रम</li>
            <li>पुरस्कार प्राप्त शेतकरी आणि प्रतिष्ठित व्यक्ती</li>
            <li>सामाजिक उपक्रम, शिक्षण, स्वच्छता आणि जलसंधारण</li>
        </ul>

        <h4 class="mt-5"><i class="fas fa-book-open"></i> Summary in English:</h4>
        <ul>
            <li><strong>Village Name:</strong> Gaudwadi</li>
            <li><strong>Known For:</strong> Leading in pomegranate cultivation</li>
            <li><strong>Highlights:</strong>
                <ul>
                    <li>Modern agricultural practices</li>
                    <li>Community-driven development initiatives</li>
                    <li>Recognized farmers & local leaders</li>
                    <li>Focus on education, cleanliness, and water conservation</li>
                </ul>
            </li>
        </ul>
    </div>
</main>

<?php include("footer.php");?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        mirror: false
    });

    document.addEventListener('DOMContentLoaded', function() {
        console.log("Gaudwadi Village Document page (New Template) loaded.");
    });
</script>

</body>
</html>