<?php
include 'header.php';

$q1 = "SELECT * FROM `membership`";
$row = mysqli_query($con,$q1);

// $q2 = "SELECT * FROM `members_package` WHERE `package_id` = '$id' ";
// $row1=  mysqli_query($con,$q2);

?>

                <div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Tables</h3>
							</div>
                        <table class="table table-striped">
								  <thead>
									<tr>
									  <th>id</th>
									  <th> Name</th>
									  <th> Email</th>
									  <th>Gender</th>
                                      <th>Address</th>
                                      <th>Age</th>
                                      <th>Password</th>
                                      <th> City</th>
                                      <th> Phone</th>
                                      <th> Status</th>
                                    <th>Delete</th>

									</tr>
								  </thead>
								  <tbody>
   
            
                                  <?php 
                    
                    while($data=mysqli_fetch_assoc($row)){
                        
                    
                    ?>
									<tr>
									  <td><?php echo $data['member_id'];?></td>
									  <td><?php echo $data['name'];?></td>
									  <td><?php echo $data['email'];?></td>
									  <td><?php echo $data['gender'];?></td>
                                      <td><?php echo $data['address'];?></td>
                                      <td><?php echo $data['age'];?></td>
                                      <td><?php echo $data['password'];?></td>
                                     <td><?php echo $data['city'];?></td>
                                     <td><?php echo $data['phone'];?></td>
                                     <td value=""><?php echo $data['Status']; ?></option></td>
                                     <td><a  href="deletemem.php?member_id=<?php echo $data['member_id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a></td>
                                                  
									</tr>
								<?php }?>
                              
                              
                               
                              
                                
								  </tbody>
								</table>
                        </div>
                            </div>
                             </div>