<?php

session_start();
include('db_connection.php');
$v_id=$_GET['id'];
$query="delete  from video where id=$v_id";

mysqli_query($mysqli,$query);
$_SESSION['success'] = "Record Deleted Successfully";
header("location:video.php");
?>