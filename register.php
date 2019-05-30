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

?>

<html>
<head>
   <link rel="icon" href="favicon.ico" type="image" sizes="16x16">

<style>
form{
		position: fixed;
		top: 15%;
		left: 30%;	
		border:1px solid black;	
		background-color: #606365;
		border:none;	
		opacity: 0.9;
		width:47%;
		height:70%;
		font-family: Segoe UI Light;
		}
input[type='text'] {
	 color: white;
    font-size: 18px;
    background-color: #423F3F;
    border-radius: 6px;
    border:none;
    margin:10px;	
    font-family: Segoe UI Light;	
    width: 300px;
    height: 40px;
    float: left;
    padding: 10px 15px 10px 15px;
	   
    }		

    input[type='date']{
      color: white;
    font-size: 18px;
    background-color: #423F3F;
    border-radius: 6px;
    border:none;
    margin:10px;  
    font-family: Segoe UI Light;  
    width: 300px;
    height: 40px;
    float: left;
    padding: 10px 15px 10px 15px;      

    }

::placeholder { 
    color: white;
    font-size: 18px;
    font-family: Segoe UI Light;
    margin: 10px; 
    padding: 10px 15px 10px 15px;
    
  
}

.pass{
		color: white;
    font-size: 22px;
    background-color: #423F3F;
    	border-radius: 6px;
    	border:none;
    	float: left;
    	margin:10px;
    	width: 300px;
		height: 40px;    	
		 padding: 10px 15px 10px 15px;
}

.terms{
	color: white;
	font-size: 15px;
	text-align: center;
	font-family: Segoe UI Light;
}
button {
		color: wheat;
		background-color: #FF1D1D;
		font-size:20px;
		border-radius:7px; 
		border:none;
		font-family: Segoe UI Light;
		padding :10px 50px 10px 50px;
}
button:hover{
		opacity: 0.5;
		cursor: pointer; 
}
.d{
	color: powderblue;
}

</style>
</head>

<body style="background-image: url('back.jpg')">
	<div> <form  action="main.php" method="POST" autocomplete="off">
       

		<center><p style="color:white; font-size:20px;">To start a new season of your bussiness register now</p> </center>      
       <input type="text" placeholder="First Name*" name="fname" required />
       <input type="text" placeholder="Email Id*" name="email" required /><br>
       <input type="text" placeholder="Last Name*" name="lname" required /><br>
  

       
        <input type="text" placeholder="Mobile Number*" name="phone" required >
       
       	<input class="pass" type="password" placeholder="Password*" name="password" required><br>
       <input class="pass"type="password" placeholder="Confirm Password*" name="cpassword" required>
       <input type="text" name="Address" placeholder="Address*" required><br>
       <input type="date" name="date" placeholder="YYYY/DD/MM" ><br>

     
       
       
  
	  
       <div class="terms">
       		<input type="checkbox"  name="submit" />I agree to the <a href="https://www.sportobuddy.com/terms-of-service" target="_blank" style="text-decoration: none;color: #00deff;" required/>Terms of Service</a> and <a href="https://www.sportobuddy.com/privacy-policy" target="_blank" style="text-decoration: none;color: #00deff;">Privacy Policy</a></label>
    	      <br><br> <button name="submit" type="submit">Submit</button>
       
       <p>Already have an account? <a class="d" href="login.html">Log in</a></p>
       </div>
	   </form>
       </div> 
      
</body>

</html>
