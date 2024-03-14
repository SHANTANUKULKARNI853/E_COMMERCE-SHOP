<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

 <?php
include "connect1.php";
// Database credentials
$host = "localhost";
$email= "root";
$password= "";
$database = "dx_2";

// Create a database connection
$conn = new mysqli($host,$email, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form inputs
    $name = $_POST['name'];
if (!preg_match('/^[A-Za-z]+$/', $name)) {
    // Handle the validation error, e.g., display an error message or redirect back to the form page
    echo "Invalid name. Only alphabetic characters are allowed.";
    // You can also set a flag to indicate validation failure and handle it accordingly.
} else {
    // Proceed with storing the valid name in the database.
}
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];


   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO register (name, email, password, number) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $password, $number);
     
$message="";
    if ($stmt->execute()) {
        $message ="you are Registered successfully!!!";
 header("Location: login.php"); // Redirect to the home page
            exit();
    } 
else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<form method="POST" action="">


	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
<?php if (!empty($message)) { ?>
        <div style="background-color:black; color:red;font-size:20px; padding: 20px; border: 1px solid #f5c6cb; border-radius: 5px;"><?php echo $message; ?></div>
    <?php } ?>
				<form> 
					<label for="chk" aria-hidden="true">REGISTER</label>
					<input type="text" name="name" id="name" pattern="[A-Za-z]+" placeholder="Enter Your name" required>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
					<input type="password" name="password" id="password" placeholder="Enter Password" required>
        <input type="number" id="number" name="number" id="number" placeholder="enter mobile number" required>

					<button type="submit">REGISTER</button>

  <script>
    function displayMessage() {
      alert("Payment is in process !"); // Change this message to the desired one
    }
  </script>
				</form>
<center><p>Already have an account? <a href="login.php">Login here</a></p></center>
			</div>
	</div>
</form>
<style>
body{
  background-image: url('dyvaol.jpg');
  background-repeat: no-repeat;
  background-size: cover;
display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
	
}
.container {
  width: 300px;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #ccc;
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
</style>
</body>
</html>