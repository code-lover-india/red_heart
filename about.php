<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the rich history and innovative agricultural practices of Gaudwadi, the Pomegranate Village, known for its sustainable farming and high-quality Bhagwa pomegranates.">
    <meta name="keywords" content="Gaudwadi, pomegranate, agriculture, farming, Solapur, Maharashtra, sustainable, rural, culture, village, Bhagwa, agri-economy, history, irrigation, export">
    <meta name="author" content="GuruKrupa AgriMart">

    <title>About Gaudwadi - The Pomegranate Village</title>

    <link rel="icon" href="path/to/your/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="path/to/your/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="stylesheet.css"> 
    <link rel="stylesheet" href="style.css"> 

    <style>
        /* CSS Custom Properties (Variables) for easy theme management */
        :root {
            --primary-red: #dc3545; /* Your header/footer red */
            --dark-accent-red: #B22222; /* FireBrick - for main headings/accents */
            --light-accent-red: #CD5C5C; /* IndianRed - for softer accents */
            --warm-neutral-bg: #faf9f6; /* Your body background color */
            --card-background: #ffffff; /* White for content boxes */
            --text-color-dark: #333;
            --text-color-muted: #555; /* Slightly darker than Bootstrap's default text-muted */
            --social-icon-color-light: #ffe6cc; /* Soft cream for social icons */
            --social-icon-hover-color: #f8d7da; /* Lighter red-tinted white on hover */
            --button-primary-red: #dc3545;
            --button-primary-red-hover: #c82333;

            /* **IMPORTANT: Header height variables for precise responsiveness** */
            /* **PLEASE VERIFY THESE VALUES by inspecting your header.php output** */
            --header-height-desktop: 80px; /* Adjust this based on your actual desktop header height */
            --header-height-mobile: 65px; /* Adjust this based on your actual mobile header height */
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: var(--warm-neutral-bg);
            color: var(--text-color-dark);
            line-height: 1.6;
            /* This padding ensures content starts below the fixed header */
            padding-top: var(--header-height-desktop); 
        }
        
        /* Your original Header/Navbar Styles - ASSUMING THEY ARE IN header.php */

        /* --- Hero Banner Section --- */
         .hero-banner {
            /* Muted Red / Burgundy gradient for the hero banner */
            background: linear-gradient(rgba(139, 0, 0, 0.75), rgba(139, 0, 0, 0.75)), url('https://via.placeholder.com/1920x500/8B0000/FFFFFF?text=Contact+Us') no-repeat center center/cover;
            color: white;
            padding: 80px 0;
            margin:0;
            text-align: center;
            position: relative;
            overflow: hidden;
            border-bottom: 5px solid #CD5C5C; /* IndianRed accent line (lighter complement) */
        }
        .hero-banner img { 
            display: none;
        }
        .hero-banner h1 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        .hero-banner p {
            font-size: clamp(1rem, 2vw, 1.3rem);
            max-width: 800px;
            margin: 0 auto;
            opacity: 0.9;
        }

        /* --- Main Content Sections --- */
        .content-section {
            background-color: var(--card-background);
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            padding: 40px;
            margin-top: 40px;
            margin-bottom: 60px;
            position: relative;
            z-index: 10;
        }

        .content-section h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--dark-accent-red);
            margin-bottom: 30px;
            text-align: center;
            font-size: clamp(2rem, 4vw, 3rem);
            line-height: 1.2;
        }

        .content-section h3 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            color: var(--light-accent-red);
            margin-top: 30px;
            margin-bottom: 15px;
            font-size: clamp(1.4rem, 2.5vw, 1.8rem);
        }

        .content-section h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--dark-accent-red);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            font-size: clamp(1.5rem, 3vw, 2rem);
            line-height: 1.3;
        }
        
        .content-section p {
            color: var(--text-color-muted);
            font-size: clamp(0.95rem, 1.5vw, 1.05rem);
            margin-bottom: 1rem;
            text-align: justify; /* Justify text for better readability */
        }
        .content-section ul {
            padding-left: 25px;
            color: var(--text-color-muted);
            font-size: clamp(0.95rem, 1.5vw, 1.05rem);
        }
        .content-section ul li {
            margin-bottom: 8px;
        }
        .content-section ul.list-unstyled li::before {
            content: "•";
            color: var(--dark-accent-red);
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }
        .content-section .text-warning {
            color: #D2691E !important;
        }
        .content-section .text-danger {
            color: var(--dark-accent-red) !important;
        }

        /* Thematic icon/image for section headings */
        .section-icon-heading {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
        }
        .section-icon-heading img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 20px;
            box-shadow: 0 4px 10px rgba(178, 193, 206, 0.1);
            flex-shrink: 0;
        }
        .section-icon-heading h4 {
            margin-bottom: 0; /* Reset margin */
        }
        /* Specific adjustments for smaller trophy image */
        .section-icon-heading img[src="image/trophy.jpg"] {
            width: 50px;
            height: 50px;
        }
        /* For Font Awesome icons within headings */
        .section-icon-heading .fa-solid,
        .section-icon-heading .bi {
            font-size: 45px;
            color: var(--dark-accent-red);
            margin-right: 15px;
            flex-shrink: 0;
        }

        /* Responsive image in content sections */
        .content-section .img-fluid {
            margin-bottom: 25px;
        }

        /* Call to Action for Collaboration */
        .collaboration-cta {
            text-align: center;
            background-color: var(--dark-accent-red);
            color: white;
            padding: 60px 20px;
            border-radius: 15px;
            margin-top: 60px;
            margin-bottom: 60px;
        }
        .collaboration-cta h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            margin-bottom: 20px;
            line-height: 1.2;
        }
        .collaboration-cta p {
            font-size: clamp(1rem, 2vw, 1.15rem);
            max-width: 750px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        .collaboration-cta .btn {
            background-color: white;
            color: var(--dark-accent-red);
            border: 2px solid white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        .collaboration-cta .btn:hover {
            background-color: transparent;
            color: white;
            transform: translateY(-3px);
        }

        /* Your original Footer Styles - ASSUMING THEY ARE IN footer.php */
        
        .social-icons a {
            color: var(--social-icon-color-light);
            font-size: 22px;
            margin: 0 12px;
            transition: 0.3s;
        }
        .social-icons a:hover {
            color: var(--social-icon-hover-color);
            transform: translateY(-3px);
        }

        /* --- Responsive Adjustments --- */

        /* Tablets and smaller desktops (typically <992px) */
        @media (max-width: 991.98px) {
            .hero-banner {
                height: calc(60vh - var(--header-height-mobile)); /* Adjust height relative to mobile header */
                min-height: 300px;
            }
            .hero-banner h1 {
                font-size: 2.8rem;
            }
            .hero-banner p {
                font-size: 1.05rem;
            }
            .content-section {
                padding: 30px;
                margin-top: 30px;
                margin-bottom: 50px;
            }
            .content-section h2 {
                font-size: 2.2rem;
                margin-bottom: 25px;
            }
            .content-section h3 {
                font-size: 1.6rem;
            }
            .section-icon-heading img {
                width: 60px;
                height: 60px;
            }
            .section-icon-heading img[src="image/trophy.jpg"] {
                width: 45px;
                height: 45px;
            }
            .section-icon-heading .fa-solid,
            .section-icon-heading .bi {
                font-size: 40px;
            }
            .content-section p, .content-section ul {
                font-size: 0.98rem;
            }
            .collaboration-cta {
                padding: 50px 15px;
                margin-top: 50px;
                margin-bottom: 50px;
            }
            .collaboration-cta h2 {
                font-size: 2rem;
            }
            .collaboration-cta p {
                font-size: 1rem;
            }
        }

        /* Mobile devices (typically <768px) */
        @media (max-width: 767.98px) {
            body {
                padding-top: var(--header-height-mobile); /* Use mobile header height */
            }
            
            .hero-banner {
                height: calc(50vh - var(--header-height-mobile));
                min-height: 250px;
                padding: 20px 15px;
            }
            .hero-banner h1 {
                font-size: 1.8rem;
            }
            .hero-banner p {
                font-size: 0.85rem;
            }
            .content-section {
                padding: 20px;
                margin-top: 25px;
                margin-bottom: 40px;
            }
            .content-section h2 {
                font-size: 1.8rem;
                margin-bottom: 20px;
            }
            .content-section h3 {
                font-size: 1.4rem;
            }
            /* Stack icon and text for section headings on very small screens */
            .section-icon-heading {
                flex-direction: column; 
                align-items: flex-start;
                text-align: left;
                margin-bottom: 20px;
            }
            .section-icon-heading img {
                margin-right: 0;
                margin-bottom: 10px;
                width: 50px;
                height: 50px;
            }
            .section-icon-heading img[src="image/trophy.jpg"] {
                width: 40px;
                height: 40px;
            }
            .section-icon-heading .fa-solid,
            .section-icon-heading .bi {
                margin-right: 0;
                margin-bottom: 10px;
                font-size: 35px;
            }
            .section-icon-heading h4 {
                font-size: 1.3rem;
            }
            .content-section p, .content-section ul {
                font-size: 0.9rem;
            }
            .content-section .img-fluid {
                margin-bottom: 20px;
            }
            .collaboration-cta {
                padding: 30px 15px;
                margin-top: 40px;
                margin-bottom: 40px;
            }
            .collaboration-cta h2 {
                font-size: 1.5rem;
            }
            .collaboration-cta p {
                font-size: 0.9rem;
            }
            .collaboration-cta .btn {
                padding: 10px 20px;
                font-size: 0.8rem;
            }
        }

        /* Extra small devices (less than 576px) */
        @media (max-width: 575.98px) {
            .hero-banner {
                height: calc(40vh - var(--header-height-mobile));
                min-height: 200px;
            }
            .hero-banner h1 {
                font-size: 1.6rem;
            }
            .hero-banner p {
                font-size: 0.8rem;
            }
            .content-section {
                padding: 15px;
                margin-top: 20px;
            }
            .content-section h2 {
                font-size: 1.6rem;
            }
            .content-section h3 {
                font-size: 1.2rem;
            }
            .section-icon-heading img {
                width: 45px;
                height: 45px;
            }
            .section-icon-heading img[src="image/trophy.jpg"] {
                width: 35px;
                height: 35px;
            }
            .section-icon-heading .fa-solid,
            .section-icon-heading .bi {
                font-size: 30px;
            }
            .section-icon-heading h4 {
                font-size: 1.1rem;
            }
            .content-section p, .content-section ul {
                font-size: 0.85rem;
            }
            .collaboration-cta h2 {
                font-size: 1.3rem;
            }
            .collaboration-cta p {
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body>

<?php include("header.php");?>

<section class="hero-banner" data-aos="fade-in">
    <div class="container" data-aos="zoom-in" data-aos-delay="200">
        <h1>Welcome to Gaudwadi: The Pomegranate Village</h1>
        <p class="lead mt-3">
            Discover the enduring spirit of Gaudwadi, a village transformed by its dedication to sustainable agriculture and vibrant community. Located in <strong>Sangola Taluka, Solapur District, Maharashtra</strong>, we are proud contributors to India's finest pomegranate harvests.
        </p>
    </div>
</section>

<main class="container content-section" data-aos="fade-up" data-aos-delay="100">
    <h2 class="mb-5">Our Journey: From Rocky Plains to Pomegranate Orchards</h2>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 order-md-2" data-aos="fade-left">
            <img src="image/about.jpg" alt="Historical view of Gaudwadi village" class="img-fluid w-100 rounded-5 shadow-sm">
        </div>
        <div class="col-md-6 order-md-1" data-aos="fade-right">
            <div class="section-icon-heading">
                <i class="fas fa-history"></i>
                <h4>Our Foundation & Early Struggles</h4>
            </div>
            <p>Gaudwadi, spanning **1345.33 hectares**, began its journey on challenging, rocky terrain. In the **1930s**, a significant portion of cultivable land was lost due to a dam project, followed by further acquisitions for forest land in **1958**. These events, coupled with recurrent droughts, turned many farmers into marginal landholders, leading to widespread hardship and migration to cities like Mumbai and Kolhapur for work.</p>
            <p>During the **1980s**, the village primarily relied on subsistence crops and animal husbandry. Traditional farming methods were prevalent, with limited access to modern irrigation or mechanization. Despite the adversities, the community engaged in extensive soil and water conservation efforts, such as building gully plugs and check dams, providing crucial employment during drought periods and improving local infrastructure like roads.</p>
        </div>
    </div>
    
    <div class="row align-items-center mb-5">
        <div class="col-md-6" data-aos="fade-right">
            <img src="image/dalimb1.jpg" alt="Pomegranate tree with ripe fruits" class="img-fluid w-100 rounded-5 shadow-sm">
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <div class="section-icon-heading">
                <i class="fas fa-seedling"></i>
                <h4>The Pomegranate Revolution (1980s-2000)</h4>
            </div>
            <p>A turning point came in the **1980s** as farmers in Sangola Taluka began experimenting with pomegranate cultivation. From **1981 onwards**, Gaudwadi farmers started digging borewells to secure water, slowly bringing fallow lands into cultivation. Initially, the 'Ganesh' variety was popular, with 'Arakta' and 'Mridula' varieties also gaining traction.</p>
            <p>By **1989**, Gaudwadi pomegranates entered the export market, reaching major Indian cities like Delhi, Mumbai, and Kolkata. This period marked a significant economic shift: average income per hectare from pomegranates surged from **₹50,000 in 2000**. This success encouraged more farmers to embrace pomegranate farming, despite the ongoing challenges of drought and limited transportation, which often necessitated selling to local traders.</p>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6 order-md-2" data-aos="fade-left">
            <img src="image/2000.jpg" alt="Farmer operating drip irrigation system" class="img-fluid w-100 rounded-5 shadow-sm">
        </div>
        <div class="col-md-6 order-md-1" data-aos="fade-right">
            <div class="section-icon-heading">
                <i class="fas fa-tractor"></i>
                <h4>Adapting to Challenges & Modernizing (2000-Present)</h4>
            </div>
            <p>The new millennium brought new challenges. Severe droughts in **2001-02 and 2003** forced many farmers to replant their orchards. New diseases like **bacterial blight (telkat rog) from 2007-08** and **wilt disease (mar rog) from 2009-10** threatened the crops, causing significant losses and even leading some neighboring villages to abandon pomegranate cultivation.</p>
            <p>In response, Gaudwadi embraced modernization. The shift from manual spraying to **STP pumps** and then to **tractor-operated sprayers** dramatically increased efficiency. Tractors revolutionized various tasks, from plowing to transportation. Crucially, **100% of Gaudwadi's 425.40 hectares of pomegranate fields now utilize drip irrigation**, a technique that has also helped mitigate wilt disease, showcasing our commitment to sustainable and resilient farming.</p>
        </div>
    </div>

    <div class="row align-items-center mb-5">
        <div class="col-md-6" data-aos="fade-right">
            <img src="image/image6.jpg" alt="Pomegranate farm with crop covers" class="img-fluid w-100 rounded-5 shadow-sm">
        </div>
        <div class="col-md-6" data-aos="fade-left">
            <div class="section-icon-heading">
                <i class="bi bi-patch-check-fill"></i>
                <h4>Gaudwadi's Distinctive Pomegranate</h4>
            </div>
            <p>Our village specializes in the **'Bhagwa'** variety, celebrated for its deep red color, size, and export potential. What sets Gaudwadi apart are our unique farming practices:</p>
            <ul class="list-unstyled">
                <li><i class="fas fa-hand-holding-box me-2"></i> Use of **self-produced biogas slurry** as fertilizer.</li>
                <li><i class="fas fa-water me-2"></i> **Efficient water management** through mulching and 100% drip irrigation.</li>
                <li><i class="fas fa-umbrella-beach me-2"></i> Use of **crop covers** for protection against sunburn and hail.</li>
                <li><i class="fas fa-bug me-2"></i> Integrated pest management strategies.</li>
                <li><i class="fas fa-calendar-alt me-2"></i> Collective planning of cultivation cycles by farmers for optimized output.</li>
                <li><i class="fas fa-flask-vial me-2"></i> Production of **residue-free pomegranates**.</li>
                <li><i class="fas fa-people-group me-2"></i> Community-based farming practices through farmer groups.</li>
                <li><i class="fas fa-briefcase me-2"></i> Pomegranate farming provides daily employment for **500-600 women and men** within the village.</li>
            </ul>
            <h5 class="mt-4 text-muted"><i class="bi bi-globe-americas text-warning me-2"></i> Our Global Reach:</h5>
            <p>As of **2023**, Gaudwadi pomegranates are proudly exported to countries including **Thailand, Malaysia, Bangladesh, United Arab Emirates, Europe, and the USA**.</p>
        </div>
    </div>

    <div class="text-center mb-4 collaboration-cta" data-aos="zoom-in" data-aos-delay="300">
        <h2>Our Vision for a Smart Agri-Village Future 🌟</h2>
        <p>We envision transforming Gaudwadi into a pioneering smart agri-village model — driven by innovation, advanced education, and collaborative partnerships. We warmly invite <strong>agri-startups, enthusiastic tourists, dedicated researchers, and potential export partners</strong> to join us in cultivating a future of sustainable growth and shared prosperity.</p>
        <a href="contact.php" class="btn">Connect with Us Today</a>
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
        console.log("About Us page with integrated content loaded.");
    });
</script>

</body>
</html>