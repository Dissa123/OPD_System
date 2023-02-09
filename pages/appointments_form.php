<?php 

require"../connection.php";

// Check Connection
if($conn){
    // insert data to the DB
    $data = $_POST['submit'];
    if($data){
       $name = $_REQUEST['name'];
       $dob = date("Y-m-d H:i:s", strtotime($_REQUEST['dtime']));
       $email = $_REQUEST['email'];
       $mobile = $_REQUEST['number'];

    //    insert data 
    $sql = "INSERT INTO appointment(name,date,email,number) VALUES ('$name','$dob','$email','$mobile')";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Done');</script>";
    }else{
        echo "Query Wrong Please Check Your Query";
    }

    }else{
        echo "something wrong";
    }
}else{
    echo "Connection Error";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Document</title>
</head>
<body>
    
<div class="flex h-screen ">
        <div class="m-auto border  p-10 bg-blue-100">
            <h1 class="text-2xl text-blue-600">Appointments</h1>
            <form action="./appointments_form.php" method="post">
                <label for="" class="flex mt-3">Name</label>
                <input type="text" name="name" class="bg-white border-black border-1" required>

                <label for="" class="flex mt-3">Date</label>
                <input type="datetime-local" name="dtime" class="bg-white border-black border-1" required>

                <label for="" class="flex mt-3">Email Address</label>
                <input type="email" name="email" class="bg-white border-black border-1" required>

                <label for="" class="flex mt-3">Mobile No</label>
                <input type="number" name="number" class="bg-white border-black border-1" required>

               <input type="submit" name="submit" class="flex bg-blue-300 cursor-pointer mt-4 p-2" value="Save Appointment">
            </form>
        </div>
    </div>