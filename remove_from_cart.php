<?php
session_start();

if (isset($_GET['id'])) {
  $productId = $_GET['id'];

  // Find the product in the cart and remove it
  if (($key = array_search($productId, array_column($_SESSION['cart_items'], 'id'))) !== false) {
    unset($_SESSION['cart_items'][$key]);
    $_SESSION['cart_items'] = array_values($_SESSION['cart_items']); // Reset array keys
  }
}

// Redirect back to the cart page
header("Location: cart.php");
exit();
?>
