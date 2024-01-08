<?php
include 'header.php';

?>

<?php
 



if (isset($_POST['addevent'])) {


  $f = $_FILES['image']['name'];
  $src = $_FILES['image']['tmp_name'];
  $des = "../club/images/eventimg/" . $f;
  move_uploaded_file($src, $des);

  $n = $_POST['name'];
  $da = $_POST['date'];
  
  $d = $_POST['description'];
  $l = $_POST['location'];
  $t = $_POST['ticket'];

  $q = "INSERT INTO `events` (`eventname`,`date`,`description`,`location`,`ticket_price`,`image`) VALUES ('$n','$da','$d','$l','$t','$des')";
//   print_r($q);
//   exit();
  mysqli_query($con, $q);

}


?>

<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
							<center><h1>Add Events </h1></center>
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
											<label class="control-label" for="basicinput">Event Name:</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Event Name" class="span8" name="name">
												<!-- <span class="help-inline">Minimum 5 Characters</span> -->
											</div>
										</div>



										<div class="control-group">
											<label class="control-label" for="basicinput"> Date</label>
											<div class="controls">
												<input  type="text" data-original-title="" class="span8 tip" name="date">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												
													<input  type="text" class="span8" id="basicinput" name="description">       
												
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput"> Ticket Price</label>
											<div class="controls">
												<div class="input-append">
                                                <span class="add-on">RS</span><input type="text"  class="span8" name="ticket">
												</div>
											</div>
										</div>

									

										<div class="control-group">
											<label class="control-label" for="basicinput">Location</label>
											<div class="controls">
                                            <div class="input-append">
                                                <input type="text"  class="span8" name="location">
												</div>
											</div>
										</div>
									
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Event Image:</label>
											<div class="controls">
												<input type="file" id="basicinput"  class="span8" name="image" >
											</div>
										</div>

										
								

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-large btn-info" name="addevent">Add Event</button>
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