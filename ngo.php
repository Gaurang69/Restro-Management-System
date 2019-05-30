
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
if(isset($_POST['submit'])){
    $ngo=$_POST["Ngo"];
    $d=$_POST["e_date"];
    $j=0;
        foreach ($_POST['item'] as $ItemNo) {
#       echo "<p>".$ItemNo."</p>";
        $item_array[$j]=$ItemNo;
        $sq="SELECT item_name From item where item_no=$ItemNo";
        $j++;
        if(mysqli_query($conn,$sq)){

        }
        else{
#           echo "aa";
        }
         $a=$conn->query($sq);
        $s = $a->fetch_assoc();
        $n=$s["item_name"];
        $ins="INSERT INTO left_food (NGO,Item_No,Item_Name,Best_use_before) VALUES ('".$ngo."','".$ItemNo."','".$n."','".$d."') ";
        if(mysqli_query($conn,$ins)){
    
            
            

        }
        else{
            echo "error:".mysqli_error($conn);
        }
    }
    if(!empty($_POST["Quantity"])){
    $i=0;
    foreach ($_POST['Quantity'] as $Qty) {
        
        if($Qty!=""){
            

#           echo "<p>QTY".$Qty."</p>";
#           echo "ItemN0".$item_array[$i];
        $ins1="UPDATE left_food SET Quantity='".$Qty."'  WHERE Item_No='".$item_array[$i]."' ";
        if(mysqli_query($conn,$ins1)){

        }
        else{
        echo "error:".mysqli_error($conn);
        }
        $i++;
    }   
    
}   

}
else{
    echo "error2:".mysqli_error($conn);

}
#echo "<script> location.href='Main.php'; </script>";

}
