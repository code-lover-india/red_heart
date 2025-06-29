<?php

session_start();
include('db_connection.php');
$p_id=$_GET['id'];
$query="delete  from photo where id=$p_id";

mysqli_query($mysqli,$query);
$_SESSION['success'] = "Record Deleted Successfully";
header("location:photo.php");
?>