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

 /*
 if(isset($_POST["submit"])){
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $mob=$_POST["phone"];
            $pass=$_POST["password"];
            $cpass=$_POST["cpassword"];
            $date=$_POST["date"];
            $Address=$_POST["Address"];
            $sq="SELECT email FROM Customer where email='".$email."'";
            if($res=mysqli_query($conn,$sq))
           
			$row = mysqli_num_rows($res);
			
			if($row>=1)
			{

					$message="Registration unsuccessful,an account with same username exists.PLease Register Again";  
              echo "<script type='text/javascript'>alert('$message');</script>";	
			}
			else{	
            if($pass=$cpass){
            $sql1="INSERT into Customer (firstname,lastname,email,password,Address,contact,DOB) values('".$fname."','".$lname."','".$email."','".$pass."','".$Address."','".$mob."','".$date."')";
            if(mysqli_query($conn,$sql1)){
             }
            else{
              echo "error:".mysqli_error($conn);
            }
           }	
         }
      } 
*/
if(isset($_POST["login"])){
 	$username=$_POST["emailid"];
 	$pass=$_POST["password"];
 	$sq1="SELECT * FROM Manager_ttable where username='".$username."' AND password ='".$pass."'";
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
	<title>Home Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="icon" href="favicon.ico" type="image" sizes="16x16">
</head>	
	<style>
	body, html {
    height: 100%;
    margin: 0;
}

		ul {
    list-style-type: none;
    position: fixed;
    top:0;
    left:0;
    width: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 18px 18px;
    text-decoration: none;
    
}

li a:hover  {
    color: green;
}


.active {
    color: #4CAF30;
}
li a:active  {
    background-color: #4CAF10;
}
.logo{
	position: absolute;
	top:80px;
	left:40%;
	width: 20%;
	height: 20%;
}
.bg {
    /* The image used */
    background-image: url("steak.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-repeat: no-repeat;
    background-size: cover;
    
}

.t1{
	position: absolute;
	top: 60%;
	left: 35%;
	color: white;
	font-size: 50px;
	text-decoration: underline;		

}	
.about{
	border: 1px solid black;
	padding: 14px 16px;
	font-size: 35px;
	width:15%;
	text-align: center;
	margin: 50px 200px 50px;
}
.au{
	width: 45%;
	float: right;
	margin: 2px;
}
div.au img {
	width: 100%;
	height:250px;
 	
}
div.au img:hover {
	opacity: 0.7;
	cursor: pointer;
}

.t2{
	margin: 25px;
	font-size: 30px;
}
/*input[type="text"]{
	 height: 40px;
	 margin: 15px;
	 margin-left: 130px;
	 width: 450px;
	 font-size: 18px;
	 padding-left: 10px;



}
input[type="submit"]
{
	height: 50px;
	width: 110px;
	margin:30px 300px;
	border-radius: 10px;
	background-color:#45B651;
	font-size: 18px;
	color: white;	
	border: none;	

}
input[type="submit"]:hover{
	opacity: 0.85;
	cursor: pointer;

}
::placeholder{
	padding-left: 10px;
	font-size: 15px;

}
form{
	margin: 20px;
	margin-top: 50px;
	float: left;
}
textarea{
	
	margin:38px 10px 0px;
	font-size: 18px;
	margin-top: 70px;
}
*/
.cont_us{
	width: 100%;
	height: 100px;
	background-color: black;
}
.cont{
	width: 100%;
	height:350px;	
	background-color: #333
}
.address{
	margin-left: -619px;
	margin-top: 3px;
}
.phone{
	margin-left: 630px;
	margin-top: -105px;
}

center{
	color: #45B651;
	font-size: 20px;
	 
}
	</style>









<body >

		<nav>			
		<ul>
	  	<li><a href="#ho">HOME</a></li>
	  	<li><a href="#about us">ABOUT US</a></li>
	  	<li><a href="#contact">CONTACT</a></li>
	  	<li style="float:right"><a class="active" href="view_details.php">STAFF DETAILS</a></li>
	  	<li style="float:right"><a class="active" href="leftover.php">MANAGE LEFTOVER </a></li>
	  	<li style="float:right"><a class="active" href="Manage.php">MANAGE ORDER </a></li>
	  	</ul>
		</nav>

		<!--HOME -->	
		<div class="bg" id="ho">
			<i><h1 class="t1">Best restaurant of the city</h1></i>
			<img class="logo" src="logo.jpg">
		</div>

		<!---About Us-->
		<div id="about us">
			<br><br><br><br><br>
			<b><p class="about">About us</p></b><br>
			<div style="width: 40%;" >
				<i><p class="t2">Restaurant is a place for simplicity. Good food, good beer, and good service. Simple is the name of the game, and we’re good at finding it in all the right places, even in your dining experience. We’re a small group from Denver, Colorado who make simple food possible. Come join us and see what simplicity tastes like.</p></i>
			</div>
			<div style="width: 60%;position: absolute;top:120%;right: 2%;">
			<div class="au">

					<img src="1.jpg">

			</div>
			<div class="au">		
					<img src="2.jpg">
			</div >
			<div class="au">		
					<img src="3.jpg">
			</div>
			<div class="au">		
					<img src="4.jpg">
			</div>
			</div>
		</div>



		
	<!--CONTACT-->

		<div id="contact">
			<br><br><br><br><br>
			<div class="cont_us" style="font-size: 35px;color: white;padding-top: 50px;text-align: center;"><b>CONTACT US</b><div>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.314903073141!2d72.82444621490015!3d19.00584058712814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce94a3e8f18b%3A0xfc07f3a9635b773f!2sFLEA+Bazaar+Caf%C3%A9!5e0!3m2!1sen!2sin!4v1534065700808" width="98%" height="450" frameborder="2" style="border:2px;margin-left: 10px;margin-top: 60px" allowfullscreen></iframe>
	
			</div>	
			<!--<div>
			<form method="post" action="#">
				<input type="text" name="name" placeholder="Name" required><br>
				<input type="text" name="email" placeholder="Email" required><br>
				<input type="text" name="m_no" placeholder="Mobile No" required><br>
				<input type="submit" value="Submit">
				
			</form>

			<textarea rows=9 cols=40 placeholder="Message"></textarea>
			<br><br><br><br><br><br>
			</div>-->	
		<div class="cont">

			<i class="fa fa-home" style="font-size: 43px;color: white;margin-left: 0px;margin-top: 10px"></i>	
			<i class="fa fa-phone" style="font-size: 43px;color: white;margin-left: 590px;margin-top: 100px"></i>
			<br><br>
			<div class="address">
			<center> Trade View Building Lowerparel</center>
			<center>Oasis City Complex</center>
			<center> Pandurang Budhkar Marg</center>
			<center> Mumbai 400013</center>
			<center>Maharashtra</center>
			</div>
			<div class="phone">
				<center>Contact No- 022 2497 0740</center>
				<center>Hours-12 PM  TO  11 PM</center><br>
				<a class="website" href="main.html " style="text-decoration: none;"><center>@Restaurant.com</center></a>
			</div>

		
	</div>	
</body>
</html>