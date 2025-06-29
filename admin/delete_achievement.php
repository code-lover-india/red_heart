<?php

session_start();
include('db_connection.php');
$a_id=$_GET['id'];
$query="delete  from achievement where id=$a_id";

mysqli_query($mysqli,$query);
$_SESSION['success'] = "Record Deleted Successfully";
header("location:achievement.php");
?>