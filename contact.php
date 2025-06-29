<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact GuruKrupa AgriMart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa; /* Light background */
            color: #333;
            line-height: 1.6;
        }
        main {
    padding: 0 !important;
    margin: 0 !important;
}

        /* --- Inner Content Styles (Complementary to Red Header/Footer) --- */

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
        .hero-banner h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.8rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .hero-banner p {
            font-size: 1.15rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .contact-section {
            padding: 60px 0;
            background-color: #ffffff; /* White background for the main content block */
            box-shadow: 0 0 20px rgba(0,0,0,0.08);
            border-radius: 12px;
            margin-top: -40px; /* Overlap with banner */
            position: relative;
            z-index: 2;
        }

        .contact-info-card {
            background-color: #F5F5F5; /* Very light grey background for cards (WhiteSmoke) */
            padding: 35px;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .contact-info-card::before { /* Animated top border */
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: #CD5C5C; /* IndianRed accent */
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease-out;
        }
        .contact-info-card:hover::before {
            transform: scaleX(1);
        }
        .contact-info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        .contact-info-card i {
            color: #8B0000; /* Dark Red icon */
            font-size: 3.8rem;
            margin-bottom: 20px;
        }
        .contact-info-card h5 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #8B0000; /* Dark Red for heading */
            margin-bottom: 10px;
        }
        .contact-info-card p {
            font-size: 1.05rem;
            margin-bottom: 5px;
            color: #555;
        }
        .contact-info-card strong {
            color: #333;
        }
        .contact-info-card a {
            color: #8B0000; /* Dark Red for links */
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        .contact-info-card a:hover {
            color: #CD5C5C; /* IndianRed hover for links */
            text-decoration: underline;
        }

        .section-heading {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: #8B0000; /* Dark Red for section headings */
            margin-bottom: 40px;
            text-align: center;
            position: relative;
            padding-bottom: 10px;
        }
        .section-heading::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: #CD5C5C; /* IndianRed underline for headings */
            border-radius: 2px;
        }

        .map-container, .form-container {
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
            background-color: #fff; /* White background for map/form containers */
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        iframe {
            width: 100%;
            height: 480px;
            border-radius: 8px;
            border: 0;
            margin-top: 20px;
        }
        .form-label {
            font-weight: 600;
            color: #444;
        }
        .form-control {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 12px 15px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.05);
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .form-control:focus {
            border-color: #CD5C5C; /* IndianRed on focus */
            box-shadow: 0 0 0 0.25rem rgba(205, 92, 92, 0.25); /* Lighter red shadow */
            outline: none;
        }
        .btn-primary {
            background-color: #8B0000; /* Dark Red primary button */
            border-color: #8B0000;
            font-weight: 700;
            padding: 12px 30px;
            border-radius: 8px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #CD5C5C; /* IndianRed on hover */
            border-color: #CD5C5C;
            transform: translateY(-2px);
        }

        /* Footer social icons hover to match inner theme */
        footer .social-icons a:hover {
            color: #CD5C5C; /* IndianRed hover for social icons to match inner theme */
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
<?php include("header.php") ?>
<main>
<section class="hero-banner d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up" data-aos-duration="1200">
        <h1>Connect With GuruKrupa AgriMart</h1>
        <p class="lead mt-3">
            We are dedicated to providing the freshest produce from our fields in Gaudwadi. Reach out to us for any inquiries, partnerships, or just to say hello!
        </p>
    </div>
</section>

<section class="container contact-section">
    <h2 class="section-heading mb-5" data-aos="fade-up">Our Contact Details</h2>
    <div class="row g-4 mb-5">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-card">
                <i class="fas fa-map-marker-alt"></i>
                <h5>Visit Our Farm</h5>
                <p><strong>GuruKrupa AgriMart</strong></p>
                <p>At Post: Gaudwadi, Taluka: Sangola</p>
                <p>District: Solapur, Maharashtra - 413307</p>
                <p class="mt-2">Operating Hours: <strong>Mon - Sat, 9 AM - 6 PM</strong></p>
                <a href="https://maps.app.goo.gl/iuFTL16qMejCizET7?g_st=aw" target="_blank">Get Directions</a>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-card">
                <i class="fab fa-whatsapp"></i>
                <h5>Direct WhatsApp & Call</h5>
                <p>For urgent queries or product details:</p>
                <p><strong>Mr. Vilasrao Gaikwad (Owner)</strong></p>
                <p>WhatsApp: <a href="https://wa.me/+918390909690" target="_blank">+91 8390909690</a></p>
                <p>Call Us: <a href="tel:+918390909690">+91 8390909690</a></p>
                <p class="mt-2">Available: <strong>9 AM - 8 PM Daily</strong></p>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-card">
                <i class="fas fa-envelope"></i>
                <h5>Email Us Your Inquiries</h5>
                <p>For general information or bulk orders:</p>
                <p><strong>General Support Team</strong></p>
                <p><a href="mailto:gurukrupaagrimartgaudwadi@gmail.com">gurukrupaagrimartgaudwadi@gmail.com</a></p>
                <p class="mt-2">We aim to respond within <strong>24-48 hours</strong>.</p>
                <p>Connect with us for any business proposals.</p>
            </div>
        </div>
    </div>

    <h2 class="section-heading mb-5 mt-5" data-aos="fade-up">Send Us a Message</h2>
    <div class="row g-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="form-container">
                <h4 class="mb-4 text-center text-lg-start">Fill Out the Form Below</h4>
                <form action="YOUR_FORMSPREE_FORM_ID_HERE" method="POST">
                    <input type="hidden" name="_subject" value="New Contact Form Inquiry from GuruKrupa AgriMart">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="Full Name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress" name="Email Address" placeholder="your.email@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactSubject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="contactSubject" name="Subject (from form)" placeholder="Inquiry about products, orders, etc.">
                    </div>
                    <div class="mb-4">
                        <label for="yourMessage" class="form-label">Your Message</label>
                        <textarea class="form-control" id="yourMessage" name="Message" rows="6" maxlength="500" placeholder="Type your message here..."></textarea>
                        <small class="form-text text-muted">Max 500 characters.</small>
                    </div>
                    <input type="text" name="_gotcha" style="display:none;" />
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="map-container">
                <h4 class="mb-4 text-center text-lg-start">Locate Our Farm in Gaudwadi</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376.216912003602!2d74.97550437729065!3d17.28086274765629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc6b3143106f2c5%3A0xd3d1993f36f6d50b!2sGurukrupa%20Agri%20Mart!5e0!3m2!1sen!2sin!4v1743525737024!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php")?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-in-out',
        offset: 100,
    });

    function goBackAfterWhatsApp() {
        history.pushState(null, '', location.href);
        window.onpopstate = function () {
            window.location.href = "sam.html";
        };
    }
</script>
</main>
</body>
</html>