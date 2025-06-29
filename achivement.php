<?php
include("header.php");
require('admin/db_connection.php');

// Fetch all photos
$query = "SELECT * FROM achievement ORDER BY id DESC";
$result = mysqli_query($mysqli, $query);
$photos = [];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $photos[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Photo Gallery - Gurukrupa Agri Mart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        main {
            padding-top: 5rem;
        }

        .gallery-title {
            text-align: center;
            padding: 3rem 1rem 1.5rem;
        }

        .gallery-title h2 {
            color: #b22222;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .gallery-title p {
            color: #6c757d;
            font-size: 1.1rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            padding: 1rem 2rem 3rem;
        }

        .photo-card {
            background: #fff;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.07);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .photo-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
        }

        .photo-card img {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: contain;
            background-color: #eeeeee;
            transition: transform 0.4s ease;
        }

        .photo-card:hover img {
            transform: scale(1.03);
        }

        .photo-card-title {
            padding: 0.75rem 1rem;
            font-weight: 600;
            font-size: 1rem;
            color: #343a40;
            text-align: center;
        }

        .photo-link {
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .photo-card-title {
                font-size: 0.95rem;
            }
        }

        @media (max-width: 576px) {
            .gallery-title h2 {
                font-size: 1.8rem;
            }

            .gallery-title p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

<main class="container-fluid pt-5 mt-5">
    <div class="gallery-title">
        <h2>Our Pomegranate Gallery</h2>
        <p>Witness the vibrant moments of our farm life through curated snapshots.</p>
    </div>

    <div class="gallery-grid">
        <?php if (!empty($photos)): ?>
            <?php foreach ($photos as $photo): ?>
                <a href="achievement_view.php?id=<?= $photo['id'] ?>" class="photo-link">
                    <div class="photo-card">
                        <img src="admin/<?= htmlspecialchars($photo['filename']) ?>" alt="Photo" onerror="this.src='fallback.jpg';">
                        <?php if (!empty($photo['title'])): ?>
                            <div class="photo-card-title"><?= htmlspecialchars($photo['title']) ?></div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="text-center text-muted py-5">
                <h5>No photos available at the moment.</h5>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php include("footer.php"); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
