<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	if(isset($_POST["login"])){
 	$email=$_POST["emailid"];
 	$pass=$_POST["password"];
 	$sq1="SELECT * FROM Customer where email='".$email."' AND password ='".$pass."'";
            if($resu=mysqli_query($conn,$sq1))
            {}
			$rows = mysqli_num_rows($resu);

			if($rows==1)
			{

					 
					$message="Login Successful";  
              echo "<script type='text/javascript'>alert('$message');</script>";	
			}
			else{
				$message="Login Unsuccessful";  
              echo "<script type='text/javascript'>alert('$message');</script>";
              echo "<script> location.href='login.php'; </script>";
			}
 }

?>

<!DOCTYPE html>
<html>

<head>
	<title>Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>

	<div class="menu-body">
	
		<!-- Section starts: Appetizers -->
		<div class="menu-section">

			<h2 class="menu-section-title">MAIN COURSE</h2>
		
			<!-- Item starts -->
			<div class="menu-item">
				<div class="menu-item-name">
					Dish 1
				</div>
				
				<div class="menu-item-price">
					Rs50
				</div>

				<div class="menu-item-description">
					desc about dish
				</div>

			</div>
			<!-- Item ends -->

			<!-- Item starts -->
			<div class="menu-item">

				<div class="menu-item-name">
					 Dish 2
				</div>
				
				<div class="menu-item-price">
					Rs50
				</div>

				<div class="menu-item-description">
					desc about dish
				</div>
				
			</div>
			<!-- Item ends -->

			<!-- Item starts -->
			<div class="menu-item">

				<div class="menu-item-name">
					Dish 3
				</div>

				<div class="menu-item-price">
					Rs30
				</div>

				<div class="menu-item-description">
					desc about dish
				</div>

			</div>
			<!-- Item ends -->

			<!-- Item starts -->
			<div class="menu-item">

				<div class="menu-item-name">
					 Dish 4
				</div>

				<div class="menu-item-price">
					Rs30
				</div>

				<div class="menu-item-description">
					desc about dish
				</div>

			</div>
			<!-- Item ends -->
			
		</div>
		<!-- Section ends: Appetizers -->
		
		<!-- Section starts: Drinks -->
		<div class="menu-section">

			<h2 class="menu-section-title">DRINKS</h2>
		
			<!-- Item starts -->
			<div class="menu-item">

				<div class="menu-item-name">
					Drink 1
				</div>

				<div class="menu-item-price">
					Rs30
				</div>

				<div class="menu-item-description">
					desc about drink
				</div>

			</div>
			<!-- Item ends -->

			<!-- Item starts -->
			<div class="menu-item">

				<div class="menu-item-name">
					 Drink 2
				</div>

				<div class="menu-item-price">
					Rs 30
				</div>

				<div class="menu-item-description">
					desc about drink
				</div>

			</div>
			<!-- Item ends -->

			<!-- Item starts -->
			<div class="menu-item">

				<div class="menu-item-name">
					 Drink 3
				</div>

				<div class="menu-item-price">
					Rs 30
				</div>

				<div class="menu-item-description">
					desc about drink
				</div>

			</div>
			<!-- Item ends -->

			<!-- Item starts -->
			<div class="menu-item">

				<div class="menu-item-name">
					 Drink 4
				</div>

				<div class="menu-item-price">
					Rs 30
				</div>

				<div class="menu-item-description">
					desc about drink
				</div>

			</div>
			<!-- Item ends -->
			
		</div>
		<!-- Section ends: Drinks -->
		
	</div>	
	
</body>
</html>