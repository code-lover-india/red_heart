<?php
 include("header.php");
 require('admin/db_connection.php');

// Fetch all videos
$query = "SELECT * FROM video ORDER BY id DESC";
$result = mysqli_query($mysqli, $query);
$videos = [];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $videos[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Gallery - Gurukrupa Agri Mart</title>
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

        .gallery-title {
            text-align: center;
            padding: 3rem 1rem 2rem;
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

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            padding: 0 2rem 3rem;
        }

        .video-card {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            background-color: #000;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
        }

        .video-card video {
            width: 100%;
            height: auto;
            aspect-ratio: 4 / 3;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.15), rgba(0,0,0,0.6));
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .video-icon {
            font-size: 3.5rem;
            color: #fff;
            opacity: 0.8;
            transition: transform 0.2s ease;
        }

        .video-card:hover .video-icon {
            transform: scale(1.1);
            opacity: 1;
        }

        .video-card-title {
            padding: 0.75rem 1rem;
            background-color: #fff;
            font-weight: 600;
            font-size: 1.05rem;
            color: #343a40;
            text-align: center;
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
        }

        .video-link {
            text-decoration: none;
        }

        @media (max-width: 576px) {
            .gallery-title h2 {
                font-size: 1.8rem;
            }

            .gallery-title p {
                font-size: 1rem;
            }

            .video-card-title {
                font-size: 0.95rem;
            }

            .video-icon {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>

<main class="container-fluid pt-5 mt-5">
    <div class="gallery-title">
        <h2>Our Pomegranate Videos</h2>
        <p>Experience the farm journey through rich and immersive videos.</p>
    </div>

    <div class="video-grid">
        <?php if (!empty($videos)): ?>
            <?php foreach ($videos as $video): ?>
                <a href="view_video.php?id=<?= $video['id'] ?>" class="video-link">
                    <div class="video-card">
                        <video muted preload="metadata">
                            <source src="admin/<?= htmlspecialchars($video['filename']) ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="video-overlay">
                            <i class="bi bi-play-circle-fill video-icon"></i>
                        </div>
                        <?php if (!empty($video['title'])): ?>
                            <div class="video-card-title"><?= htmlspecialchars($video['title']) ?></div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="text-center text-muted py-5">
                <h5>No videos available at the moment.</h5>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php include("footer.php"); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
