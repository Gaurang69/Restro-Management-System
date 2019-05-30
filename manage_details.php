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
 $sq="SELECT * FROM add_staff";
        if($re=$conn->query($sq)){
            
        }
        else{
            echo "Error:".mysqli_error($conn);
        }

?>
<html>
<HEAD>
	<style >
			body {
    height: 100%;
    margin: 0;
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
            margin-top: 20px;
            
            
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
select{
    height: 40px;
     margin: 15px;
     margin-left: 130px;
     width: 450px;
     font-size: 18px;
     padding-left: 10px;

}
input[type="text"],input[type="date"]{
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

	</style>
    <script>
function myFunction() {
    alert("Staff Details Added Successfully");
}
</script>


</HEAD>




	<body >

        <nav>           
        <ul>
        <li><a   href="view_details.php">VIEW DETAILS</a></li>
        <li><a  class="active" href="manage_details.php">MANAGE DETAILS</a></li>
         <li><a   href="Main.php">HOME</a></li><br><br><br>
        </ul>
        </nav>
        
        <details style="margin-top: 100px;">
            <summary >Add Staff Member</summary>
           <form  method="post">
            <select name="jtype"><option >Select</option>
             <?php

       
            while($row3 = mysqli_fetch_array($re))
            {
                
                $jtype=$row3["job_type"];
                echo $jtype;
                $id=$row3["id"];
                echo"<option value=".$jtype.">$jtype</option>";
            }
            
    ?>   
            </select>
            <br><br>  
            
                <input type="text" name="fname" placeholder="Firstname"><br>
                <input type="text" name="lname" placeholder="Lastname"><br>
                <input type="date" name="doj"><br>
                <input type="submit" name="submit2">
            </form>
                </details>

</body>
</html>
<?php 
    if(isset($_POST["submit2"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $doj=$_POST["doj"];
    $job_type=$_POST["jtype"];
    $sq1="INSERT into staff (Firstname,Lastname,job_type,doj) values('".$fname."','".$lname."','".$job_type."','".$doj."')";
     
            if($resu=mysqli_query($conn,$sq1))
            {
                

            }
            else{
                echo "error:".mysqli_error($conn);
            }
        
             $sql5="SELECT staff_id from staff_d where firstname='".$fname."' AND lastname='".$lname."'";
    if($ress=mysqli_query($conn,$sql5))
    {
        

    }
    else{
                echo "error:".mysqli_error($conn);
            }   

    $row5= mysqli_fetch_array($ress);  
    $id=$row5["staff_id"];
    
    
  
             if($job_type=="Waiter"){

                                
                               echo'<h3 style="color:white"> For Waiter </h3><form action="add_staff.php?id='.$id.'" method="post"><input type="text"name="tno" placeholder="Table-No"><br><input type="submit" name="submit1" onclick="myFunction()" ></form>';}
                
             if($job_type=="Chef"){
                echo'<h3 style="color:white"> For Chef </h3><form action="add_staff.php?id='.$id.'" method="post"><input type="text"name="Delicacy" placeholder="Delicacy"><br><input type="submit" name="submit" onclick="myFunction()" ></form>';
              }  
             if($job_type=="Cashier"){
                echo'<h3 style="color:white"> For Cashier</h3><form action="add_staff.php?id='.$id.'" method="post"><input type="text"name="shift_time" placeholder="Shift Time"><br><input type="submit" name="cash" onclick="myFunction()" ></form>';
            }
   
               
                    
          }         

?>