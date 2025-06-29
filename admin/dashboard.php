<?php
session_start();
include("header.php");
if (!isset($_SESSION['admin'])) {
    header("Location: dashboard.php");
    exit;
}
require 'db_connection.php';

$query="SELECT * FROM photo";
$result = mysqli_query($mysqli,$query);
$count_photo = mysqli_num_rows($result);

$query="SELECT * FROM video";
$result = mysqli_query($mysqli,$query);
$count_video = mysqli_num_rows($result);

$query="SELECT * FROM achievement";
$result = mysqli_query($mysqli,$query);
$count_achievement = mysqli_num_rows($result);

?>

<div class="container-fluid">

  <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>
                  
  <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Photos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $count_photo;?>
                                            	
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Videos</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $count_video;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Achivements</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $count_achievement;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                    </div>

  </div>

<?php include("footer.php");?>
