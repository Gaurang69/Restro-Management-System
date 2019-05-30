<html>
<head>
	 <link rel="icon" href="favicon.ico" type="image" sizes="16x16">
<style>
		.a {
		position: fixed;
		top: 25%;
		left: 45%;	
		border:1px solid black;	
		background-color: #606365;
		border:none;
		border-radius: 10px;
		width: 40%;
		height: 55%;
		opacity: 0.9;
		}
		form{
		text-align: center;	
		
		}
		input[type='text'],input[type='password']{
	 color: white;
    font-size: 18px;
    background-color: #423F3F;
    border-radius: 6px;
    border:none;
    margin:10px;	
    font-family: Segoe UI Light;	
    width: 300px;
    height: 40px;
    padding: 16px 15px 16px 15px;
	   
    }		
	::placeholder { 
    color: white;
    font-size: 18px;
    font-family: Segoe UI Light;
    margin: 10px; 
    padding: 16px 15px 16px 15px;
    }
      input[type='submit'] {
		color: wheat;
		background-color: #FF1D1D;
		font-size:20px;
		border-radius:7px; 
		border:none;
		font-family: Segoe UI Light;
		padding :10px 50px 10px 50px;
}
input[type='submit']:hover{
		opacity: 0.5;
		cursor: pointer; 
}


a{
	color: powderblue;	
	}  
.terms{
	color: white;
	font-size: 15px;
	text-align: center;
	font-family: Segoe UI Light;
}

a{
	color: powderblue;	
	}  

</style>

</head>	

</style>
</head>


<body style="background-image: url('back.jpg');">
	<div class="a"> <form action="Menu.php"  method="POST" autocomplete="off">
       

		<center><p style="color:white; font-size:20px;font-family:Segoe UI Light; ">User Login</p> </center>      
       <input type="text" placeholder="Username*" name="emailid" required /><br>
       <input type="password" placeholder="Password*" name="password" required /><br><br><br>
		 <input type="submit" name="login" value="Login" />	
			</form><br>
	
	
	</div>
	
	</body>
</html>
