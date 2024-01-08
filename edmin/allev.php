<?php
include 'header.php';

$q1 = "SELECT * FROM `events`";
$row = mysqli_query($con,$q1);



?>

                <div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
							<center><h2>All Events</h2></center>
							</div>
                        <table class="table table-bordered">
								  <thead>
									<tr>
									
									  <th> Event Name</th>
									  <th> Date</th>
									  <th> Description</th>
                                      <th> Location</th>
                                      <th> Ticket Price</th>
                                      <th> Image</th>
                                      <th>Delete</th>

									</tr>
								  </thead>
								  <tbody>
   
            
                                  <?php 
                    
                    while($data=mysqli_fetch_assoc($row)){
                        
                    
                    ?>
									<tr>
									  
									  <td><?php echo $data['eventname'];?></td>
									  <td><?php echo $data['date'];?></td>
									  <td><?php echo $data['description'];?></td>
                                      <td><?php echo $data['location'];?></td>
                                      <td><?php echo $data['ticket_price'];?></td>
                                      <td><img src="<?php echo $data['image'];?>" alt="" width="50px" height="50px"></td>
                                     <td><a  href="deleteevent.php?id=<?php echo $data['id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a></td>
                                                  
									</tr>
								<?php }?>
                              
                              
                               
                              
                                
								  </tbody>
								</table>
                        </div>
                            </div>
                             </div>