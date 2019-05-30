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
$id=$_GET['id'];
$sql="SELECT * from c_table WHERE Customer_Id='".$id."' ";
if(mysqli_query($conn,$sql)){

}
else{
	echo "Error:".mysqli_error($conn);
}
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$name=$row["name"];
$email=$row["email"];
$no=$row["contact"];

$sql1="SELECT * from orders WHERE CustomerId='".$id."' ";
if(mysqli_query($conn,$sql1)){

}
else{
	echo "Error:".mysqli_error($conn);
}
echo"		<h1>BILL DETAILS</h1><br>
		
		<label>NAME :  </label>   ". $name."  <br>
		<label>EMAIL ID :  </label> " . $email."<br>
		<label>CONTACT :   </label>  ". $no."<br><br><br>
		<label>ORDER DETAILS:</label><br><br>";
$i=0;
$total=0;
$res = $conn->query($sql1);
while($row1 = $res->fetch_assoc()){
$item[$i]=$row1['ItemName'];
$i_no[$i]=$row1['ItemNo'];
$q[$i]=$row1['Quantity'];

$sql2="SELECT * from item WHERE Item_No='".$i_no[$i]."' ";
if(mysqli_query($conn,$sql2)){

}
else{
	echo "Error:".mysqli_error($conn);
}
$res2 = $conn->query($sql2);
$row2 = $res2->fetch_assoc();
$Cost[$i]=$row2['Price'];


$Amount[$i]=$Cost[$i]*$q[$i];
	
	$total=$total+$Amount[$i];
echo "<label>Item Name:</label>" . $item[$i]."<br>
		<label>Item No:</label>	".$i_no[$i]. "<br>
		<label>Quantity:</label> ". $q[$i]."<br>
		<label>Price:</label>	".$Cost[$i]. "<br>
		<label>Amount:</label>	".$Amount[$i]. "<br><br>";
				$i++;
	}

	echo "<br><br><br><br><br><br><label>Total Amount:</label>	".$total. "<br><br>";

	
$sql="UPDATE c_table SET Is_Paid='1' WHERE  Customer_Id='".$id."'";
if(mysqli_query($conn,$sql))
{

}
else{
	echo "Error:".mysqli_error($conn);
}
$st=$_GET["stat"];
if($st=="Served"){
			$sql1="UPDATE c_table SET status='Paid' WHERE  Customer_Id='".$id."'";
		if(mysqli_query($conn,$sql1))
		{

		}
		else{
			echo "Error:".mysqli_error($conn);
		}
	}

?>
