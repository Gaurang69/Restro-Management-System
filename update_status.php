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
$c_id=$_GET["id"];
$st=$_GET['stat'];
echo $c_id;	
echo $st;
if($st=="Not_Ready"){
$sql="UPDATE c_table SET status='Ready' WHERE  Customer_Id='".$c_id."'";
if(mysqli_query($conn,$sql))
{

}
else{
	echo "Error:".mysqli_error($conn);
}
}
if($st=="Ready"){
			$sql1="UPDATE c_table SET status='Served' WHERE  Customer_Id='".$c_id."'";
		if(mysqli_query($conn,$sql1))
		{

		}
		else{
			echo "Error:".mysqli_error($conn);
		}
	}
echo "<script> location.href='pending_order.php'; </script>";