<?php
include 'header.php';

?>

<?php
 



if (isset($_POST['addpac'])) {


 $d = $_POST['duration'];
  $s = $_POST['snooke'];
  $g = $_POST['gym'];
  $sw = $_POST['swimming'];
  $gr = $_POST['ground'];
  $h = $_POST['hall'];
  $p = $_POST['price'];
  $pa = $_POST['package'];

  $q = "INSERT INTO `members_package` (`duration`,`snookes`,`gym`,`swiming`,`ground`,`hall`,`price`,`packages`) VALUES ('$d','$s','$g','$sw','$gr','$h','$p','$pa')";
//   print_r($q);
//   exit();
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
											<label class="control-label" for="basicinput">Duration:</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Product Name" class="span8" name="duration">
												<!-- <span class="help-inline">Minimum 5 Characters</span> -->
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Snookes:</label>
											<div class="controls">
												<input type="text" id="basicinput"  class="span8" name="snooke" >
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Gym</label>
											<div class="controls">
												<input  type="text" data-original-title="" class="span8 tip" name="gym">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput"> Swimming</label>
											<div class="controls">
												<input  type="text" data-original-title="" class="span8 tip" name="swimming">
											</div>
										</div>

                                        <div class="control-group">
											<label class="control-label" for="basicinput"> Ground</label>
											<div class="controls">
												<input  type="text" data-original-title="" class="span8 tip" name="ground">
											</div>
										</div>
										
                                        <div class="control-group">
											<label class="control-label" for="basicinput"> Hall</label>
											<div class="controls">
												<input  type="text" data-original-title="" class="span8 tip" name="hall">
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

                                        <div class="control-group">
											<label class="control-label" for="basicinput"> Package</label>
											<div class="controls">
												<input  type="text" data-original-title="" class="span8 tip" name="package">
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
											<div class="controls">
												<button type="submit" class="btn btn-small btn-info" name="addpac">Add Package</button>
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