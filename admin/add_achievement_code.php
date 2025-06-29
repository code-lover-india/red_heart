<?php
session_start();
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validate input
    $type = trim($_POST['type']);
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    // Check if image was uploaded
    if (!empty($filename)) {

        // Define upload folder
        $upload_dir = "upload/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true); // create if not exists
        }

        $unique_filename = time() . "_" . basename($filename);
        $target_path = $upload_dir . $unique_filename;

         $allowed_extensions = ['mp4', 'mov', 'avi', 'webm', 'mkv','jpg', 'jpeg', 'png', 'gif'];
        $file_ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_extensions)) {
            $_SESSION['error'] = "Only MP4, MOV, AVI, WEBM, MKV, JPG, JPEG, PNG, GIF files are allowed.";
            header("Location: achievement.php");
            exit;
        }

        if (move_uploaded_file($tmp_name, $target_path)) {
            // Insert into DB
            $stmt = $mysqli->prepare("INSERT INTO achievement (filename, type) VALUES (?, ?)");
            if ($stmt) {
                $stmt->bind_param("ss", $target_path, $type);
                $stmt->execute();
                $stmt->close();

                $_SESSION['success'] = "video /images uploaded successfully!";
                header("Location: achievement.php");
                exit;
            } else {
                $_SESSION['error'] = "Database error: " . $mysqli->error;
                header("Location: add_achievement.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Failed to upload file.";
            header("Location: add_achievement.php");
            exit;
        }

    } else {
        $_SESSION['error'] = "Please select a file to upload.";
        header("Location: add_achievement.php");
        exit;
    }

} else {
    $_SESSION['error'] = "Invalid request.";
    header("Location: add_achievement.php");
    exit;
}
?>
