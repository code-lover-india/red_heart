<?php  include('header.php');?>


  <div class="container-fluid">

  <h1 class="h3 mb-2 text-gray-800">Add Achievements</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">

                        	<form action="add_achievement_code.php" method="post"   enctype="multipart/form-data">
                        		
                        		<div class="form-group">
                              <label>Upload Image </label>
                              <input type="file" name="image" class="form-control">
                            </div>

                            <div class="form-group">
                              <label> type</label>
                              <input type="text" name="price" class="form-control" required>
                            </div>

                        		<div class="mt-4">
                        			<input type="submit" name="" class="btn btn-primary" value="Save">
                        		</div>


                        	</form>


                        </div>
                    </div>


  </div>

<?php  include('footer.php');?>