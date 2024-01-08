<?php
include 'header.php';


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
									  <th> Image</th>
									  <th> Price</th>
                                      <th> Qantity</th>
                                     <th>Sub Image</th>
                                      <th> Type </th>
                                      
                                      <th> Color</th>
                                    
                                      <th> Gender</th>
                                      <th>Delete</th>

									</tr>
								  </thead>
								  <tbody>
   
            
                                  <?php 
                    $q1="SELECT * FROM `product` INNER JOIN `pro_type` ON product.`pt_id` = pro_type.`pt_id`INNER JOIN `pro_color` ON product.`cl_id` = pro_color.`cl_id` INNER JOIN `pro_gender` ON product.`ge_id` = pro_gender.`ge_id`";
                    
                    // print_r($q1);
                    // die();
                    $row=mysqli_query($con,$q1);


                    
                   

                    
                    while($data=mysqli_fetch_assoc($row)){
                        // while($data1=mysqli_fetch_assoc($row1)){
                        //     while($data2=mysqli_fetch_assoc($row2)){
                        
                    
                    ?>
									<tr>
									  <td><?php echo $data['procode'];?></td>
									  <td><?php echo $data['product'];?></td>
									  <td><img src="<?php echo $data['image'];?>" alt="" width="50px" height="50px"></td>
									  <td><?php echo $data['price'];?></td>
                                      <td><?php echo $data['pro_quantity'];?></td>
                                      <td><img src="<?php echo $data['sub_image'];?>" alt="" width="30px" height="30px">
                                      <img src="<?php echo $data['sub_image'];?>" alt="" width="30px" height="30px">
                                      <img src="<?php echo $data['sub_image'];?>" alt="" width="30px" height="30px">
                                    </td>
                                      <td value="<?php echo $data['pt_id']; ?>"><?php echo $data['type']; ?></td>
                                     
                                      <td value="<?php echo $data['cl_id']; ?>"><?php echo $data['color']; ?></td>
                                   
                                     <td value="<?php echo $data['ge_id']; ?>"><?php echo $data['gender']; ?></td>
                                     <td><a  href="deletepro.php?id=<?php echo $data['id']; ?>"><i class="bx bx-trash me-1"></i> Delete</a></td>
                                                  
									</tr>
								<?php }?>
                                
                              
                              
                               
                              
                                
								  </tbody>
								</table>
                        </div>
                            </div>
                             </div>