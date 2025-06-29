<?php  

include('header.php');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Videos List</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                          <?php
                                        
                               if(isset($_SESSION['success']))
                                 { ?>
                                   <div class="alert alert-danger m-2">
                                     <strong> <?= $_SESSION['success'];?> </strong>
                                   </div>
                                          
                           <?php unset($_SESSION['success']); }
                                                              
                          ?>

                        <div class="card-header py-3">
                          <div class="row">
                        
                            <div class="col-lg-6"> 
                                  <h6 class="m-0 font-weight-bold text-primary"> Video</h6>         


                            </div>

                            <div class="col-lg-6 text-right">
                               <a href="add_video.php" class="btn btn-primary btn-sm"> Add videos</a>
                            </div>
                              
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th> ID</th> 	
                                            <th>filename</th>
                                            <th>Delete</th>
                                            
                                        </tr>
                                    </thead>
                                  
                                   <tbody>

                                    <?php 

                                        include('db_connection.php');

                                        $query = "SELECT * FROM video";

                                        $result = mysqli_query($mysqli, $query);

                                        while($row = mysqli_fetch_array($result)) 
                                        {
                                        
                                            ?>
                                            <tr>
                                                <td> <?php echo $row['id'];?> </td>
                                                <td> <?php echo $row['filename'];?> </td>
                                                <td><a href="delete_video.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure ?')">Delete</a></td>
                                                
                                            </tr>

                                        <?php
                                            }

                                        ?>

                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

           

<?php  include('footer.php');?>
