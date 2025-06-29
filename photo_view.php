<?php
 
require('admin/db_connection.php');

// Validate photo ID
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("<h3>Invalid photo ID.</h3>");
}

$photo_id = intval($_GET['id']);
$query = "SELECT * FROM photo WHERE id = ?";
$stmt = mysqli_prepare($mysqli, $query);
mysqli_stmt_bind_param($stmt, "i", $photo_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result || mysqli_num_rows($result) == 0) {
    die("<h3>Photo not found.</h3>");
}

$photo = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Photo - <?= htmlspecialchars($photo['title'] ?? 'Pomegranate Photo') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background-color: #000;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .photo-wrapper {
            position: relative;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .photo-wrapper img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 0.75rem;
            background-color: #000;
        }

        .overlay-info {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.6);
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


<div class="photo-wrapper">
    <img src="admin/<?= htmlspecialchars($photo['filename']) ?>" alt="Photo">

    <?php if (!empty($photo['title'])): ?>
        <div class="overlay-info">
            <h2><?= htmlspecialchars($photo['title']) ?></h2>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
