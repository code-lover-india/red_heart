<?php
session_start();
require 'db_connection.php';

if (isset($_FILES['media'])) {
    $file = $_FILES['media'];
    $filename = basename($file['name']);
    $target_dir = "media/";
    $target_file = $target_dir . time() . "_" . $filename;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif', 'mp4', 'mov', 'avi'];
    if (!in_array($fileType, $allowedTypes)) {
        die("Unsupported file type.");
    }

    $mediaType = in_array($fileType, ['mp4', 'mov', 'avi']) ? 'video' : 'image';

    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        $stmt = $mysqli->prepare("INSERT INTO media (filename, type) VALUES (?, ?)");
        $stmt->bind_param("ss", $target_file, $mediaType);
        $stmt->execute();
        header("Location: dashboard.php");
    } else {
        echo "Failed to upload.";
    }
}
?>
