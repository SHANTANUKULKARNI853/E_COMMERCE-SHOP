<?php
session_start();

function getProductById($productId) {
    // Replace with your own logic to retrieve the product details based on the product ID
    // Example:
    $products = array(
      1 => array(
        'id' => 1,
        'name' => 'Black Burn',
        'price' =>  10.00,
        'image' => 'product 1.jpg'
      ),
      2 => array(
        'id' => 2,
        'name' => 'Cargo Dxx',
        'price' =>  15.00,
        'image' => 'product 2.jpg'
      ),
      // Add more products here
      3 => array(
        'id' => 3,
        'name' => 'Jacket Combo',
        'price' =>  15.00,
        'image' => 'product 3.jpg'
      ),
      4 => array(
        'id' => 4,
        'name' => 'Funky Denim',
        'price' =>  25.00,
        'image' => 'product 4.jpg'
      ),
      5 => array(
        'id' => 5,
        'name' => 'Supervek Hoodie',
        'price' =>  35.00,
        'image' => 'product 5.jpg'
      ),
      6 => array(
        'id' => 6,
        'name' => 'demonic',
        'price' =>  45.00,
        'image' => 'product 6.jpg'
      ),
      7 => array(
        'id' => 7,
        'name' => 'Futuristic',
        'price' =>  60.00,
        'image' => 'product 7.jpg'
      ),
      8 => array(
        'id' => 8,
        'name' => 'Black mixie',
        'price' =>  95.00,
        'image' => 'product 8.jpg'
      ),
      9 => array(
        'id' => 9,
        'name' => 'White xxx',
        'price' =>  115.00,
        'image' => 'product 9.jpg'
      ),
      10 => array(
        'id' => 10,
        'name' => 'Lightning Burst',
        'price' =>  69.00,
        'image' => 'product 11.jpg'
      ),
      11 => array(
        'id' => 11,
        'name' => 'Japanese Dxl',
        'price' =>  80.00,
        'image' => 'product 15.jpg'
      ),
      12 => array(
        'id' => 12,
        'name' => 'Demonic Denim',
        'price' =>  66.00,
        'image' => 'product 16.jpg'
      ),
      13 => array(
        'id' => 13,
        'name' => 'Sekova',
        'price' =>  97.00,
        'image' => 'product 17.jpg'
      ),
      14 => array(
        'id' => 14,
        'name' => 'Funky Cargo',
        'price' =>  55.00,
        'image' => 'product 18.jpg'
      ),
      15 => array(
        'id' => 15,
        'name' => 'Trendy Goldy',
        'price' =>  90.00,
        'image' => 'product 19.jpg'
      ),
  
    );
  
    if (isset($products[$productId])) {
      return $products[$productId];
    }
  
    return null; // If the product with the specified ID is not found
  }

if (isset($_GET['id'])) {
  $productId = $_GET['id'];

  // Retrieve product details from your database based on the product ID
  // Example:
  $product = getProductById($productId); // Call a function to retrieve the product details

  if ($product !== null) {
    // Add the product to the cart
    $_SESSION['cart_items'][] = $product;
  }
}

// Redirect back to the cart page if cart is not empty
if (!empty($_SESSION['cart_items'])) {
  header("Location: cart.php");
  exit();
}

// Return to the empty cart page
header("Location: products.php");
exit();
?>
