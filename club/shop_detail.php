<?php 
include 'header.php';

?>
 <div class="col-md-3 col-sm-6">
           
           <div class="product-grid2">
               <!-- Your product content goes here -->      
             <div class="product-image2">
             <?php 
             $product = mysqli_query($con,"SELECT * from `product` where `id`= '$id'");
             if(!empty($product)){
                while ($row=mysqli_fetch_array($product)){
                }}
                    ?>
                 <a href="<?php echo $data['id']; ?>">
                     <img class="pic-1" src="<?php echo $data['image']; ?>">
                     <img class="pic-2" src="<?php echo $data['image']; ?>">
                    
                 </a>
         

                 <form action="index.php?action=add&id=<?php echo $data['id']?>"   method="POST">
           
           <!-- <input type="number" value="" min='1' max='10' id="qty" name="qty" placeholder="quantity"> -->
                   <input type="hidden" name="product" value="<?php echo $data['product']?>">
                   <input type="hidden" name="id" value="<?php echo $data['id']?>">
                   <input type="hidden" name="pprice" value="<?php echo $data['price']?>">
                   <div class="product "><button  class="add-to-cart product " name="addcart" ><a href= "cart.php">Add to Cart</a></button></div>
                   <div class="product1 "><button  class="add-to-cart product1" name="addcart" ><a href= "login.php">Add to Cart</a></button></div>

               </div>