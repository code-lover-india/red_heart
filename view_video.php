<?php
require('admin/db_connection.php');

// Validate and get video
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("<h3>Invalid video ID.</h3>");
}

$video_id = intval($_GET['id']);
$query = "SELECT * FROM video WHERE id = ?";
$stmt = mysqli_prepare($mysqli, $query);
mysqli_stmt_bind_param($stmt, "i", $video_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) == 0) {
    die("<h3>Video not found.</h3>");
}

$video = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Watch Video - <?= htmlspecialchars($video['title'] ?? 'Pomegranate') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap + Optional Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background-color: #111;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            height: 100vh; /* Full height of screen */
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
            overflow: hidden;
        }

        video {
            width: 100%;
            height: auto;
            max-height: 100vh;
            object-fit: contain;
            background-color: #000;
        }

        .overlay-info {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.65);
            padding: 1rem 2rem;
            border-radius: 2rem;
            text-align: center;
        }

        .overlay-info h2 {
            font-size: 1.25rem;
            margin: 0;
            color: #ffcc00;
        }

        .btn-back {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: rgba(255, 255, 255, 0.15);
            border: none;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.95rem;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: rgba(255, 255, 255, 0.35);
            color: #fff;
        }

        @media (max-width: 768px) {
            .overlay-info h2 {
                font-size: 1rem;
            }
            .btn-back {
                font-size: 0.8rem;
                padding: 0.4rem 0.8rem;
            }
        }
    </style>
</head>
<body>

<a href="video.php" class="btn-back">← Back</a>

<div class="video-wrapper">
    <video controls autoplay>
        <source src="admin/<?= htmlspecialchars($video['filename']) ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <?php if (!empty($video['title'])): ?>
        <div class="overlay-info">
            <h2><?= htmlspecialchars($video['title']) ?></h2>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
