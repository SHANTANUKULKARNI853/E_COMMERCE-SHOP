<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page</title>
  <link rel="stylesheet" href="products.css">
</head>
<body>
  <header>
    <center><h1>D'YAVOL X-PRODUCTS</h1></center>
  </header>

<!-- Product Listing Section -->

<div class="container">
    <div class="product">
      <img src="product 1.jpg" alt="product 1">
      <h3>Black Burn</h3>
      <p>$10.00</p>
      <button class ="add to cart"><a href="add_to_cart.php?id=1">Add to Cart</a></button>
    </div>

    <div class="product">
      <img src="product 2.jpg" alt="product 2">
      <h3>Cargo DXX</h3>
      <p>$15.00</p>
      <button class ="add to cart"><a href="add_to_cart.php?id=2">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 3.jpg" alt="product 3">
      <h3>Jacket Combo</h3>
      <p>$15.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=3">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 4.jpg" alt="Product 4">
      <h3>Funky Denim</h3>
      <p>$25.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=4">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 5.jpg" alt="Product 5">
      <h3>Supervek Hoodie</h3>
      <p>$35.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=5">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 6.jpg" alt="Product 6">
      <h3>Demonic</h3>
      <p>$45.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=6">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 7.jpg" alt="Product 7">
      <h3>Futuristic</h3>
      <p>$60.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=7">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 8.jpg" alt="Product 8">
      <h3>Black mixie</h3>
      <p>$95.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=8">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 9.jpg" alt="Product 9">
      <h3>White xxx</h3>
      <p>$115.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=9">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 11.jpg" alt="Product 10">
      <h3>Lightning Burst</h3>
      <p>$69.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=10">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 15.jpg" alt="Product 11">
      <h3>Japanese Dxl</h3>
      <p>$80.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=11">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 16.jpg" alt="Product 12">
      <h3>Demonic Denim</h3>
      <p>$66.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=12">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 17.jpg" alt="Product 13">
      <h3>Sekova</h3>
      <p>$97.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=13">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 18.jpg" alt="Product 14">
      <h3>Funky Cargo</h3>
      <p>$55.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=14">Add to Cart</a></button>
    </div>
<div class="product">
      <img src="product 19.jpg" alt="Product 15">
      <h3>Trendy Goldy</h3>
      <p>$90.00</p>
      <button class="add to cart"><a href="add_to_cart.php?id=15">Add to Cart</a></button>
    </div>
    <!-- Add more product divs as needed -->
  </div>
<style>
  body {
  font-family: italic, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color:#FF0000;
  padding: 10px;
}

.container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
  padding: 20px;
}

.product {
  background-color:black;
color:white;
  padding: 20px;
  text-align: center;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.product img {
  width: 100%;
  height: auto;
  border-radius: 5px;
}

.product h3 {
  margin-top: 10px;
  margin-bottom: 5px;
}

.product p {
  margin: 0;
  font-weight: bold;
}

.add-to-cart {
  background-color:white;
  font-color:white;
font-size:25px;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
.product img:hover {
  transform: scale(1.3);
}
.product img{
  transition: transform 0.2s;
}

footer {
  background-color:black;
  color:#FF0000;
  font-style: italic;
  padding: 20px;
  text-align: center;
font-size:25px;
}

footer p {
  font-size: 25px;
}
#about-content {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}


</style>

 <script>
    document.addEventListener("DOMContentLoaded", function() {
      var addToCartButtons = document.getElementsByClassName("add-to-cart");
      for (var i = 0; i < addToCartButtons.length; i++) {
        addToCartButtons[i].addEventListener("click", function() {
          var name = this.getAttribute("data-name");
          var price = parseFloat(this.getAttribute("data-price"));

          var item = {
            name: name,
            price: price
          };

          addToCart(item);
          redirectToCart();
        });
      }

      function addToCart(item) {
        var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
        cartItems.push(item);
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
      }

      function redirectToCart() {
        window.location.href = "cart.html";
      }
    });

<footer>
STAY TUNED FOR THE NEXT DROP!
</footer>
</body>
</html>
