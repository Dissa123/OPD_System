<?php
include_once '../connection.php';
$P_id = $_GET['done_id'];
echo $P_id;
$sql = "DELETE FROM `appointment` WHERE a_id='$P_id'";

if(mysqli_query($conn,$sql)){
    echo "Record deleted successfully";
    header("location:../pages/Patient_All_Apiments.php");
}else {
   
}
?>