<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D'YAVOL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
 <div class="photo-gallery">
      <img src="brand.jpg" alt="Photo 1">
      <img src="brand2.jpg" alt="Photo 2">
      <img src="brand3.jpg" alt="Photo 3"> 
</div>





    <h1>D'YAVOL X</h1>

    <nav>
      <ul>
        <li><a href="about.php">About us</a></li>
        <li><a href="products.php">Products</a></li>
  <li><a href="brand.php">Upcoming Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="banner">
      <h2>Welcome to Our Store!</h2>
      <p>LUXURY STREET WEARS</p>
    </section>

    <section class="products">
      <div class="product">
        <img src="product 10.jpg" alt="Product 1">
        <h3>CHILLAX CARGO</h3>
        <p>SOLD OUT</p>
      </div>

      <div class="product">
        <img src="product 12.jpg" alt="Product 2">
        <h3>BURNING CARGO</h3>
        <p>SOLD OUT</p>
      </div>
       <div class="product">
        <img src="product 13.jpg" alt="Product 3">
        <h3>JAPANESE LXX HOODIE</h3>
        <p>LIMITED EDITION</p>
      </div>
 <div class="product">
        <img src="product 14.jpg" alt="Product 4">
        <h3>COUPLES COMBO</h3>
        <p>COMING SOON</p>
      </div>


      <!-- More product listings -->
    </section>
  </main>
 <footer>
 <p>EXPLORE YOUR STYLE TODAY.</p>
  <div class="footer-content">
    <div class="footer-section">
      <h4>About Us</h4>
          <p>IN A WORLD OF SHEEP,
D'YAVOL X IS CRAFTED FOR WOLVES</p>
    </div>
    <div class="footer-section">
      <h4>Contacts</h4>
<p>Company Address :Mannat,853 street ,Mumbai.</p>
      <p>Email: dyavol@srk.com</p>
          <p>   im@srk.com</p>
      <p>Phone: 8822546969</p>
    </div>
    <div class="footer-section">
     
      <p>@ALL RIGHTS ARE RESERVED 2023</p>
    </div>
  </div>
 
</footer>
<script src="script.js"></script>
<style>
/* Reset default styles */
body, h1, h2, h3, p, ul, li {
  margin: 0;
  padding: 0;
}

/* Global styles */
body {
  background-image: url('dyvaol.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  overflow-x:hidden;
}
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  color: #333;

}

.container {
  max-width: 1200px;
  margin: 0;
  padding:0;
}

/* Header */
header {

  background-color: #333;
  color: #FF0000;
  padding:0;

}
  header image{
      position: relative;
      height: 800px;

    }
header h1 {
  background-color:black;
  color: #FF0000;
  padding: 5px;
  font-size: 80px;
  margin-bottom: 5px;
  text-align: center;
  text-transform: uppercase;
   position: fixed;
      top: 0;
      left: 0;
      width: 100%;

}

nav ul {
  list-style: none;
  text-align: center;
   position: fixed;
padding: 80px;
      top: 0;
     text-align: center;
width: 88%;
}

nav ul li {
  display: inline-block;
  margin-right: 40px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
  text-transform: uppercase;
  transition: color 0.3s ease;
}

nav ul li a:hover {
  color: #e5e5e5;
}
.header-photo {
  width: 100%;
  max-height: 850px;
overflow-x: scroll;
 margin: 0;
  padding:0;
}

.footer-photo {
  width: 100%;
  max-height: 200px;
}



/* Banner */
.banner {
  background-color: #f2f2f2;
  padding: 40px;
  text-align: center;
}

.banner h2 {
  font-size: 48px;
  margin-bottom: 20px;
}

.banner p {
  font-size: 30px;
  color:black;
}

/* Products */
.products {
  color:white;
  margin-top: 40px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.product {
  background-color:black;
  padding: 30px;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
}

.product img:hover {
transform: scale(1.1);
}

.product img {
  max-width: 100%;
  height: auto;
  margin-bottom: 10px;
  border-radius: 5px;
transition: transform 0.2s;
}

.product h3 {
  font-size: 24px;
  margin-bottom: 10px;
  color:white;
}

.product p {
  font-size: 16px;
  color:yellow;
  margin-bottom: 20px;
}

.product button {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
}

.product button:hover {
  background-color: #555;
}
.product-list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.product {
  width: 350px;
  text-align: center;
  margin: 10px;
}

.product img {
  width: 100%;
  height: auto;
  margin-bottom: 10px;
}



/* Footer */
footer {
  background-color:black;
  color:#FF0000;
  font-style: italic;
  padding: 20px;
  text-align: center;
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


</body>
</html>
