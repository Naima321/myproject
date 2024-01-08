<?php
include 'header.php';

$q1 = "SELECT * FROM `register`";
$row = mysqli_query($con,$q1);



?>

                <div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<center><h3> Registered Member </h3></center>
							</div>
                        <table class="table table-striped">
								  <thead>
									<tr>
									  <th> Member Id</th>
									  <th> Name</th>
									  <th> Email</th>
									  <th> Password</th>                                 
                                      <th> Delete</th>

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
									  <td><?php echo $data['password'];?></td>                               
                                     <td><a  href="deletereg.php?member_id=<?php echo $data['member_id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a></td>
                                                  
									</tr>
								<?php }?>
                              
                              
                               
                              
                                
								  </tbody>
								</table>
                        </div>
                            </div>
                             </div>