<?php
include 'header.php';

?>

<?php
 



if (isset($_POST['add'])) {


  $f = $_FILES['image']['name'];
  $src = $_FILES['image']['tmp_name'];
  $des = "../club/images/img/" . $f;
  move_uploaded_file($src, $des);

  $f1 = $_FILES['suimage']['name'];
  $src1 = $_FILES['suimage']['tmp_name'];
  $des1 = "../club/images/subimg/" . $f1;
  move_uploaded_file($src1, $des1);

  $n = $_POST['name'];
  $p = $_POST['price'];
  $q = $_POST['quantity'];

  $pt = $_POST['pt_id'];
  $cl = $_POST['cl_id'];
  $ge = $_POST['ge_id'];
  $q = "INSERT INTO `product` (`product`,`image`,`price`,`pro_quantity`,`sub_image`,`pt_id`,`cl_id`,`ge_id`) VALUES ('$n','$des','$p','$q','$des1','$pt','$cl','$ge')";
//   print_r($q);
//   exit();
  mysqli_query($con, $q);
  $query = "update `product` SET procode = concat(`prostr`,`id`)";
  mysqli_query($con,$query);
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

										<div class="control-group">
											<label class="control-label" for="basicinput">Sub Image:</label>
											<div class="controls">
												
													<input  type="file" class="span8" id="basicinput" name="suimage" >       
													<input  type="file" class="span8" id="basicinput" name="suimage" > 
													<input  type="file" class="span8" id="basicinput" name="suimage" > 
											</div>
										</div>

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
													<!-- <option value="">Select here..</option> -->
                                                    <?php

                                                        $q2 = "SELECT * FROM `pro_type`";
                                                        $row = mysqli_query($con, $q2);
                                                        while ($data = mysqli_fetch_assoc($row)) {
                                                        ?>
                                                        <option value=" <?php echo $data['pt_id']; ?>"><?php echo $data['type']; ?> </option>

                                                        <?php } ?>
												
												</select>
											</div>
										</div>

									
                                        
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Gender:</label>
											<div class="controls">
												<select tabindex="1" class="span8"  name="ge_id">
													<!-- <option value="">Select here..</option> -->
                                                    <?php

                                                        $q4 = "SELECT * FROM `pro_gender`";
                                                        $row = mysqli_query($con, $q4);
                                                        while ($data = mysqli_fetch_assoc($row)) {
                                                        ?>
                                                        <option value=" <?php echo $data['ge_id']; ?>"><?php echo $data['gender']; ?> </option>

                                                        <?php } ?>
												
												</select>
											</div>
										</div>

									
										<div class="control-group">
											<label class="control-label" for="basicinput">Product Color:</label>
											<div class="controls">
												<select tabindex="1" class="span8"  name="cl_id">
													<!-- <option value="">Select here..</option> -->
                                                    <?php

                                                        $q3 = "SELECT * FROM `pro_color`";
                                                        $row = mysqli_query($con, $q3);
                                                        while ($data = mysqli_fetch_assoc($row)) {
                                                        ?>
                                                        <option value=" <?php echo $data['cl_id']; ?>"><?php echo $data['color']; ?> </option>

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