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

	$sql="SELECT * FROM staff_d where job_type='Waiter'";
	 if($result=mysqli_query($conn,$sql))
            {
            	
            }
    else {
    	echo"<p style='margin-top:150px;'>error:".mysqli_error($conn)."</p>";
    }
    $sql1="SELECT * FROM staff_d where job_type='Chef' ";
	 if($result1=mysqli_query($conn,$sql1))
            {
           	
            }
    else {
    	echo"<p style='margin-top:150px;'>error:".mysqli_error($conn)."</p>";
    }  
    
	$sql2="SELECT * FROM staff_d   where job_type='Cashier' ";
	 if($result2=mysqli_query($conn,$sql2))
            {
           	
            }
    else {
    	echo"<p style='margin-top:150px;'>error:".mysqli_error($conn)."</p>";
    }  
    
                   

?>
<html>
<HEAD>
	<style >
	table, th, td {
    border: 3px solid black;
    border-collapse:collapse;
    
}
           body {
    background-image: url("back3.jpg");
    background-repeat: no-repeat;
    height: 100%;
    background-size: cover;
    }
        summary{
            font-family: serif;
            font-size: 30px;
            
            color:floralwhite;
            
            
        }
  h1   {color: burlywood;
      text-align:center;
      border: 1px solid powderblue;
      background-color: black;
      text-decoration-style: solid;
      font-family: cursive;
      width: 1400px;
    }
    th{
    padding:6px;
    font-style: italic;
    font-family: monospace;
    text-align: center;
    font-size: 30px;
    }
td{
    padding:4px;
    text-align: center;
    font-size: 20px;
    font-family: sans-serif;
    }
        
table{
    margin-top:10px;
    margin-left: 100px;
    width: 1200px;
    }
tr:nth-child(even){background-color: lightblue;}   
tr:nth-child(odd){background-color:white;}  

			body {
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
    margin-left: 70px;
    padding: 18px 50px;
    text-decoration: none;
    width: 250px;
    
}

li a:hover  {
    color: green;
}


.active {
    background-color: #4CAF30;

    
}
li a:active  {
    background-color: #4CAF10;
}
	</style>
	<script>
	function deleteme()
{
if(confirm("Do you really want to delete this  record?"))

{
	window.parent.location = "view_details.php";
}
else{return false;}

}
</script>
</HEAD>




	<body >

        <nav>           
        <ul>
        <li><a  class="active" href="view_details.php">VIEW DETAILS</a></li>
        <li><a href="manage_details.php">MANAGE DETAILS</a></li>
         <li><a   href="Main.php">HOME</a></li><br><br><br>
        </ul>
        </nav>
        <details style="margin-top: 100px;">
        	<summary >Waiter</summary>
        	<?php 
        	 echo  "

                        <table>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Staff-ID</th>
                            <th>Date Of Joining</th>
                            <th></th>

                        </tr>";      
                        while($row = $result->fetch_assoc())
                     {
                     	echo"<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["staff_id"]."</td><td>".$row["doj"]."</td><td><a href='delete_staff.php?id=".$row['staff_id']."' onclick='return deleteme()'>Delete</a></td></tr>";
                     }
                     echo "</table>";

        	?>
        </details>

         <details style="margin-top: 100px;">
        	<summary>Chef</summary>
        	<?php 
        	 echo  "

                        <table>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Staff-ID</th>
                            <th>Date Of Joining</th>
                            <th></th>
                        </tr>";      
                        while($row1 = $result1->fetch_assoc())
                     {
                     	echo"<tr><td>".$row1["firstname"]."</td><td>".$row1["lastname"]."</td><td>".$row1["staff_id"]."</td><td>".$row1["doj"]."</td><td><a href='delete_staff.php?id=".$row1['staff_id']."' onclick='return deleteme()'>Delete</a></td></tr>";    
                     	                 }
                     echo "</table>";

        	?>
        </details>

         <details style="margin-top: 100px;">
        	<summary>Cashier</summary>
        	<?php 
        	 echo  "

                        <table>
                        <tr>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Staff-ID</th>
                            <th>Date Of Joining</th> 
                            <th></th>                           
                        </tr>";      
                        while($row2 = $result2->fetch_assoc())
                     {
                     		echo"<tr><td>".$row2["firstname"]."</td><td>".$row2["lastname"]."</td><td>".$row2["staff_id"]."</td><td>".$row2["doj"]."</td><td><a href='delete_staff.php?id=".$row2['staff_id']."'onclick='return deleteme()'>Delete</a></td></tr>";                     
                     }
                     echo "</table>";
                     

        	?>
        </details>
        



</body>
</html>