<!DOCTYPE html>
<html>
<head>
   <title>Slide Navbar</title>

	
</head>
<body>

    <?php
session_start();
    // Database credentials
    $host = "localhost";
    $email = "root";
    $password= "";
    $database = "dx_2";

    // Create a database connection
    $conn = new mysqli($host, $email, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 // Initialize the $message variable
$message="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the username and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the SQL statement to check if the user exists
    $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";

    // Execute the query
    $result = $conn->query($sql);

    // Check if a row was returned
    if ($result->num_rows == 1) {
        // User credentials are valid
        // Store username in the session for future use
        $message= "Login successful. Welcome, " . $email;
 $_SESSION['email'] = $email;
 header("Location: home.php"); // Redirect to the home page
            exit();
    } else {
        // Invalid credentials
        $message= "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>


    <form method="POST" action="">
<div class="main">  
	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
<form>
 <?php if (!empty($message)) { ?>
        <div style="background-color:black; color:red;font-size:20px; padding: 30px; border: 1px solid #f5c6cb; border-radius: 5px;"><?php echo $message; ?></div>
    <?php } ?> 
<label for="chk" aria-hidden="true">Login</label>
        <input type="email" id="email" name="email" placeholder="email" required><br>
        <input type="password" id="password" name="password" placeholder="password" required><br>
<button type="submit">LOGIN</button>
</form>
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
	color:white;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 70%;
	height: 30px;
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
	width: 40%;
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
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

</style>


</body>
</html>
