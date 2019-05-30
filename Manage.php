<!DOCTYPE html>
<html>
<head>
    <title>Order</title>

<style>
	body, html {
    height: 100%;
    margin: 0;
    
}
    body {
    background-image: url("back.jpg");
    background-repeat: no-repeat;
    height: 100% ;
    background-size: cover;
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
h1   {color: white;
      text-align:center;
      text-decoration-style: solid;
      font-size: 50px;
      margin-top: 60px;

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
table, th, td {
    
    border-collapse:collapse;
    margin-top: -90px;
    
    
}
th{
    padding:3px;
    font-style: italic;
    font-family: monospace;
    text-align: center;
    font-size: 30px;
    color: 
    border-bottom: 1px solid white;
    
    }
td{
    padding:1px;
    text-align: center;
    font-size: 20px;
    font-family: sans-serif;
    color: white;
    border-bottom: 1px solid white;
    }
        
table{
    background-color: #606365;
    width: 1300px;

    }

input[type="text"]{
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
    margin-left: 20px;
    margin-top: 100px;
    float: left;
}

.au{

    width: 320px;
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
</style>
<body >

        <nav>           
        <ul>
        <li><a class="active" href="Manage.php">PLACE ORDER</a></li>
        <li><a href="pending_order.php">PENDING ORDERS</a></li>
        <li><a href="completed_orders.php">COMPLETED ORDERS</a></li>
                <li><a href="Main.php">HOME</a></li><br><br><br>
        </ul>
        </nav>
        <h1><font face='calibri'>MENU CARD</font></h1>
        <form method='POST' action='add_order.php'>

                
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

                $sql = "SELECT * FROM item";
                $result = mysqli_query($conn,$sql);
                
                if ($result->num_rows > 0) {
                 echo  "
                 <div class='menucard'>

                        <table>
                        <tr>
                            <th>Item No</th>
                            <th>Item name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th></th>
                        </tr>";
                         
                        $j=1;

            #            
                    while($row = mysqli_fetch_assoc($result))
                     {
                        
                       
                        echo "<tr><td>" . $row["Item_No"]. "</td><td>" . $row["Item_Name"]. " </td><td>" . $row["Price"]. "</td>
                        <td><input style='width:35px;height:25px;margin-left:15px;' type='text'  name='Quantity[]'></td><td><input type='checkbox' name='item[]' value='".$row["Item_No"]."' ></td>";
                    }
                    echo "</table></div>";
                    }
                     else {
                    echo "0 results";
                    }    
?>
                
                        <br><br><br><br><br>
                <div style="images">
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
                <input type="text" name="name" placeholder="Name" required><br>
                <input type="text" name="email" placeholder="Email" required><br>
                <input type="text" name="m_no" placeholder="Mobile No" required><br>
                <input type="submit" name ="book" value="Order Now">
                
            </form>

</body>