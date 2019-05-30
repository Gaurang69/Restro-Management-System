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
$sql="DELETE  from staff where Staff_Id='".$id."'";
if(mysqli_query($conn,$sql)){

	echo "<script>location.href='view_details.php'</script>";

}
else
{
	echo "Error:".mysqli_error($conn);
}