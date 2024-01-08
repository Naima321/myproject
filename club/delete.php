<?php
include 'header.php';

if(isset($_POST['addcart'])){
       
    $pro_name = $_POST['product'];
    $pro_id = $_POST['id'];
    $pro_price = $_POST['pprice'];
    $pro_qty = $_POST['qty'];
 
    $_SESSION['cart'][] = array('id'=> $pro_id,'product'=> $pro_name,'price'=> $pro_price,'pro_quantity'=> $pro_qty);

}

if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['product'] === $_POST['item']) {
            unset($_SESSION['cart'][$value]);
            $_SESSION['cart'] = array_values($_SESSION['cart']); // Fix typo in array name
            echo "<script>window.location.href = 'cart.php';</script>";
        }
    }
}
   




