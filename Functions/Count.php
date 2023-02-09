<?php 
require_once "../connection.php";
if($conn){
    $sql = "SELECT * FROM appointment";
    $result = mysqli_query($conn,$sql);
    if($result){
        $row = mysqli_num_rows($result);

        if($row){
            echo $row;
        }else{
            echo "Not Recorded";
        }
    }
}