<?php
include 'header.php';

$q1 = "SELECT * FROM `contact`";
$row = mysqli_query($con,$q1);



?>

                <div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
							<center><h2>All Messages</h2></center>
							</div>
                        <table class="table table-bordered">
								  <thead>
									<tr>
									
									  <th> Name</th>
									  <th> Email</th>
									  <th> Message</th>
                                      <th>Delete</th>

									</tr>
								  </thead>
								  <tbody>
   
            
                                  <?php 
                    
                    while($data=mysqli_fetch_assoc($row)){
                        
                    
                    ?>
									<tr>
									  
									  <td><?php echo $data['fname'];?></td>
									  <td><?php echo $data['email'];?></td>
									  <td><?php echo $data['message'];?></td>
                                     <td><a  href="delete.php?id=<?php echo $data['id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a></td>
                                                  
									</tr>
								<?php }?>
                              
                              
                               
                              
                                
								  </tbody>
								</table>
                        </div>
                            </div>
                             </div>