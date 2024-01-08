<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/cart.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
<!------ Include the above in your HEAD tag ---------->
<?php
include 'header.php';
$query = $con->prepare('SELECT * FROM `cart`');
$query->execute();
$result = $query->get_result();
$grand_total = 0;

?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

<br><br>

            <div class="container">
            <div class="col-lg-10">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {

} unset($_SESSION['showAlert']); ?></strong>
        </div>
                     
                <center><h2>Product In Your Card</h2></center>
	            <table id="cart" class="table table-hover table-condensed">
    				<thead>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>
                    <a href="insert.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');">Clear Cart</a>
                    </th>
                     </tr>
					</thead>
					<tbody>
                    <?php
                    while ($row = $result->fetch_assoc()):
                      ?> 
                      <tr>                  
                        <td><?php echo $row['id'] ?></td>
                <input type="hidden" class="pid" value="<?php echo $row ['id']; ?>">
                <td><img src="<?php echo $row['pimage'] ?>" width="50"></td>
                <td><?php echo $row ['pname'] ?></td>
                <td>
                  <?php echo $row ['pprice']; ?>
                </td>
                <input type="hidden" class="pprice" value="<?php echo $row ['pprice']; ?>">
                <td>
                  <input type="number" class="form-control itemQty" value="<?php echo $row ['pquantity'] ?>" style="width:75px;">
                </td>
                <td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format( $row['total_price'],2); ?></td>
                <td>
                  <a href="insert.php?remove=<?php echo $row ['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');">Delete</a>
                </td>
              </tr>
              <?php echo $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              <tr>
              <td colspan="3">
                  <a href="product.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                    Shopping</a>
                </td>
                <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                <td>
                  <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

     <script type="text/javascript">
  $(document).ready(function() {

    // Change the item quantity
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
       var qty = $el.find(".itemQty").val();

      location.reload(true);
      $.ajax({
        url: 'insert.php',
        method: 'POST',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'insert.php',
        method: 'GET',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
</body>

</html>