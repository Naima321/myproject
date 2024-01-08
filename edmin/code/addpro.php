<?php
include 'header.php';

?>

<?php




if (isset($_POST['add'])) {
    // $f=$_FILES['image'];

    // print_r($f);
    // exit();
  

  $f = $_FILES['image']['name'];
  $src = $_FILES['image']['tmp_name'];
  $des = "../golf_club/images/img/" . $f;
  move_uploaded_file($src, $des);
  $n = $_POST['name'];
  $p = $_POST['price'];
  $q = $_POST['quantity'];
 
  $pt = $_POST['pt_id'];
//   $c = $_POST['color'];
 
//   $targetDir = "img/"; 
//     $allowTypes = array('jpg','png','jpeg','gif'); 
//     $fileNames = array_filter($_FILES['files']['name']); 

  $q = "INSERT INTO `product` (`name`,`image`,`price`,`pro_quantity`,`type`) VALUES ('$n','$des','$p','$q','$pt')";
//   print_r($q);
//   die();
  mysqli_query($con, $q);
}


?>

<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
							<center><h1>Add Product </h1></center>
							</div>
							<div class="module-body">

									<!-- <div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Something fishy here!
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Whats wrong with you? 
									</div>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div> -->

									<br />

									<form class="form-horizontal row-fluid" method="POST" enctype="multipart/form-data" >
										<div class="control-group">
											<label class="control-label" for="basicinput">Product Name:</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Product Name" class="span8" name="name">
												<!-- <span class="help-inline">Minimum 5 Characters</span> -->
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Product Image:</label>
											<div class="controls">
												<input type="file" id="basicinput"  class="span8" name="image" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Product Quantity</label>
											<div class="controls">
												<input  type="number" data-original-title="" class="span8 tip" name="quantity">
											</div>
										</div>

										<!-- <div class="control-group">
											<label class="control-label" for="basicinput">Sub Image:</label>
											<div class="controls">
												
													<input  type="file" class="span8" id="basicinput" name="image[]" multiple>       
												
											</div>
										</div> -->

										<div class="control-group">
											<label class="control-label" for="basicinput">Price</label>
											<div class="controls">
												<div class="input-append">
                                                <span class="add-on">RS</span><input type="text"  class="span8" name="price">
												</div>
											</div>
										</div>

										<!-- <div class="control-group">
											<label class="control-label" for="basicinput" name="pt_id">Product Type:</label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#">First Row</a></li>
														<li><a href="#">Second Row</a></li>
														<li><a href="#">Third Row</a></li>
														<li><a href="#">Fourth Row</a></li>
													</ul>
												</div>
											</div>
										</div> -->

										<div class="control-group">
											<label class="control-label" for="basicinput">Product Type:</label>
											<div class="controls">
												<select tabindex="1" class="span8"  name="pt_id">
													<option value="">Select here..</option>
                                                    <?php

                                                        $q2 = "SELECT * FROM `pro_type`";
                                                        $row = mysqli_query($con, $q2);
                                                        while ($data = mysqli_fetch_assoc($row)) {
                                                        ?>
                                                        <option value=" "><?php echo $data['type']; ?> </option>

                                                        <?php } ?>
												
												</select>
											</div>
										</div>

									
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Gender:</label>
											<div class="controls">
												<select tabindex="1" class="span8"  name="pt_id">
													<option value="">Select here..</option>
                                                    <?php

                                                        $q2 = "SELECT * FROM `pro_type`";
                                                        $row = mysqli_query($con, $q2);
                                                        while ($data = mysqli_fetch_assoc($row)) {
                                                        ?>
                                                        <option value=" "><?php echo $data['gender']; ?> </option>

                                                        <?php } ?>
												
												</select>
											</div>
										</div>

									
										<div class="control-group">
											<label class="control-label" for="basicinput">Product Color:</label>
											<div class="controls">
												<select tabindex="1" class="span8"  name="pt_id">
													<option value="">Select here..</option>
                                                    <?php

                                                        $q2 = "SELECT * FROM `pro_type`";
                                                        $row = mysqli_query($con, $q2);
                                                        while ($data = mysqli_fetch_assoc($row)) {
                                                        ?>
                                                        <option value=" <?php echo $data['pt_id']; ?>"><?php echo $data['color']; ?> </option>

                                                        <?php } ?>
												
												</select>
											</div>
										</div>

										
								

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-small btn-info" name="add">Add Product</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->