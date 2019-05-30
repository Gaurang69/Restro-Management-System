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


     $sql = "SELECT * FROM orders ORDER by CustomerId DESC";
                $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   echo  "<h1>ORDER DETAILS</h1>

                        <table>
                        <tr>
                            <th>Order No</th>
                            <th>Item name</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th></th>
                        </tr>";
                        $prev='';
                        
                         while($row = $result->fetch_assoc())
                     {
                      $curr=$row["CustomerId"];

                       $s="SELECT * from C_table WHERE Customer_Id='".$row["CustomerId"]."'  ORDER by Customer_Id DESC";
                       $re=$conn->query($s);
                       $r=$re->fetch_assoc();
                       if($curr!=$prev) 
                        {echo"<td>".$row["CustomerId"]."</td>";}
                        else{
                          echo "<td> </td>";
                        } 

                        echo  "<td>" . $row["ItemName"]. " </td><td>" . $row["Quantity"]. "</td>  
                        <td><a style='font-size: 25px;' class='link' href='update_status.php?id=".$row['CustomerId']."&stat=".$r['status']."'>".$r['status']."</a></td>";
                        if($r['status']=='Paid'){
                          echo "<td> </td></tr>";
                        }
                        else
            {
                          echo "<td><a style='font-size: 25px;' class='link' href='make_bill.php?id=".$row['CustomerId']."&stat=".$r['status']." '  target='blank'>Pay</a></td></tr>";
                        } 
                        $prev=$curr;
                    }
                    echo "</table>";
                    }
                     else {
                    echo "0 results";
                    }

                    
?>
<html>
	<style>

	table, th, td {
    background-color: #606365;
    width: 1300px;
    margin-top:-100px;
    border-bottom: 1px solid white; 

    
}
            body {
    background-image: url("back.jpg");
    background-repeat: no-repeat;
    height: 100%;
    background-size: cover;
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
    color: white;
    }
        
table{
    margin-top:30px;
    margin-left: 100px;
    width: 1200px;
    
    }

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
        h1   {
      color:white ;
      text-align:center;
      margin-top: 70px;
      
    }


li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    margin-left: 100px;
    padding: 18px 50px;
    text-decoration: none;
    
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
.link{
    width: 60px;
    height: 30px;
    border: 1px solid black;
    background-color: red;
    color: white;
    text-decoration: none;


}
.link:hover{
  opacity: 0.7;
  
}
</style>
	<body >

        <nav>           
        <ul>
        <li><a  href="Manage.php">PLACE ORDER</a></li>
        <li><a  class="active" href="pending_order.php">PENDING ORDERS</a></li>
        <li><a href="completed_orders.php">COMPLETED ORDERS</a></li>
         <li><a   href="Main.php">HOME</a></li><br><br><br>
        </ul>
        </nav>
</body>
</html>
