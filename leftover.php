<!DOCTYPE html>
<html>
<head>
    <title>Leftover</title>

<style>
    body, html {
    height: 100%;
    margin: 0;
}
       body {
    background-image: url("back.jpg");
    background-repeat: no-repeat;
    height: 100%;
    background-size: cover;
    }
 h1   {color: white;
      text-align:center;
      font-size: 50px;
      margin-top: 10px;

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
    margin-left: 180px;
    padding: 18px 50px;
    text-decoration: none;
    
}

li a:hover  {
    color: green;
}


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           ',.active {
    background-color: #4CAF30;
}
li a:active  {
    background-color: #4CAF10;
}


        
table, th, td {
    
    border-collapse:collapse;
    margin-top: 100px;
    
    
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
    margin-top: ;
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
<body>       
 <form method='POST' action='main.php'>

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
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                 echo  "<h1>Select leftover items</h1>

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
                    while($row = $result->fetch_assoc())
                     {
                        
                       
                        echo "<tr><td>" . $row["Item_No"]. "</td><td>" . $row["Item_Name"]. " </td><td>" . $row["Price"]. "</td>
                        <td><input style='width:35px;height:25px;margin-left:15px;' type='text'  name='Quantity[]'></td><td><input type='checkbox' name='item[]' value='".$row["Item_No"]."'  ></td>";
                    }
                    echo "</table>";
                    }
                     else {
                    echo "0 results";
                    }    
                     echo '<br><br><br><br>
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
        </div>';           
                
                
               echo' <input style="margin-top: 100px;" type="text" name="Ngo" placeholder="NGO - Name" required><br>
               <input  type="text" name="e_date" placeholder="Best Use Before " required><br>
                <input type="submit" name="submit">
            </form>

</body>';
?>