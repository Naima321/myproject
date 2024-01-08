<?php
include 'header.php';

$q1 = "SELECT * FROM `members_package`";
$row = mysqli_query($con,$q1);



?>

                <div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
							<center><h1>All Member Package</h1></center>
							</div>
                        <table class="table table-bordered">
								  <thead>
									<tr>
									
									  <th> Duration</th>
									  <th> Snookes</th>
									  <th> Gym</th>
                                      <th> Swimming</th>
                                      <th> Ground</th>
                                      <th> Hall</th>
                                      <th> Price</th>
                                      <th> Package</th>
                                      <th>Delete</th>

									</tr>
								  </thead>
								  <tbody>
   
            
                                  <?php 
                    
                    while($data=mysqli_fetch_assoc($row)){
                        
                    
                    ?>
									<tr>
									  
									  <td><?php echo $data['duration'];?></td>
									  <td><?php echo $data['Snookes'];?></td>
									  <td><?php echo $data['gym'];?></td>
                                      <td><?php echo $data['swiming'];?></td>
                                      <td><?php echo $data['ground'];?></td>
                                      <td><?php echo $data['hall'];?></td>
                                      <td><?php echo $data['Price'];?></td>
                                      <td><?php echo $data['packages'];?></td>
                                     <td><a  href="deletepackage.php?package_id=<?php echo $data['package_id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a></td>
                                                  
									</tr>
								<?php }?>
                              
                              
                               
                              
                                
								  </tbody>
								</table>
                        </div>
                            </div>
                             </div>