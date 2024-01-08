<?php
include 'dp.php';



	// Add products into the cart table
	if (isset($_POST['id'])) {
	  $pid = $_POST['pid'];
	  $pname = $_POST['pname'];
	  $pprice = $_POST['pprice'];
	  $pimage = $_POST['pimage'];
	  $pcode = $_POST['pcode'];
	  $pqty = $_POST['pqty'];
	  $total_price = $pprice * $pqty;

	  $stmt = $con->prepare('SELECT `procode` FROM cart WHERE procode=?');
	  $stmt->bind_param('s',$pcode);
	  $stmt->execute();
	  $res = $stmt->get_result();
	  $r = $res->fetch_assoc();
	  $code = $r['procode'] ?? '';

	  if (!$code) {
	    $query = $con->prepare('INSERT INTO `cart` (`pname`,`pprice`,`pimage`,`pquantity`,`total_price`,`procode`) VALUES (?,?,?,?,?,?)');
	    $query->bind_param('ssssss',$pname,$pprice,$pimage,$pqty,$total_price,$pcode);
	    $query->execute();

	    echo '<script>alert(" Item  Added.")</script>';
	  } else {
	    echo '<script>alert("Error! Item Already Added.")</script>';  
	}
 
    }

    //get item in cart icon//
    if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
        $stmt = $con->prepare('SELECT * FROM `cart`');
        $stmt->execute();
        $stmt->store_result();
        $rows = $stmt->num_rows;
  
        echo $rows;
      }

      if (isset($_GET['remove'])) {
        $id = $_GET['remove'];
  
        $stmt = $con->prepare('DELETE FROM cart WHERE id=?');
        $stmt->bind_param('i',$id);
        $stmt->execute();
  
        $_SESSION['showAlert'] = 'none';
        $_SESSION['message'] = '<script>alert(" Item removed from the cart!")</script>';
        echo "<script>window.open('cart.php','_self');</script>";
      }

      if (isset($_GET['clear'])) {
        $stmt = $con->prepare('DELETE FROM cart');
        $stmt->execute();
        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = '<script>alert("All Item removed from the cart!")</script>';
        echo "<script>window.open('cart.php','_self');</script>";
      }

  if (isset($_POST['qty'])) {
    $qty = $_POST['qty'];
    $pid = $_POST['pid'];
    $pprice = $_POST['pprice'];

    $tprice = $qty * $pprice;

    $stmt = $con->prepare('UPDATE cart SET pquantity=?, total_price=? WHERE id=?');
    $stmt->bind_param('isi',$qty,$tprice,$pid);
    $stmt->execute();
  }
?>

