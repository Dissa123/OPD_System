<?php
$user = "Admin";
$password = 123;

if (isset($_POST['submit'])) {
    $_POST["Admin"] = "Admin";
    $_POST["Password"] = 123;
    

    if ($_POST["Admin"] == "Admin" && $_POST["Password"] == 123) {
        if ($count == 1) {
            // Register $username, $password and redirect to file "login_success.php"
            session_start();
            $_SESSION["Admin"] = $Admin;
            header("location:http://localhost:8080/pdo/index.php");
        } else {
            header("location:http://localhost:8080/pdo/index.php?msg=failed");
        }
    } else {

        header("location:http://localhost:8080/pdo/pages/Login.php");
    }
}

?>

<script>
        function validations(){
            let admin = document.forms["myForm"]['Admin'].value;
            if(admin == ""){
                alert("User name and Password incorrect.");
                return false;
            }
        }
    </script>
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
        <div class="m-auto border p-10 bg-blue-100">
            <h1 class="text-2xl text-blue-600">Login</h1>
            <form name="myForm" method="post" action="./Login.php" onsubmit="return validations()">

                <label for="" class="flex mt-3">User Name</label>
                <input type="text" name="Admin" class="bg-white border-black border-1 required">

                <label for="" class="flex mt-3">Password</label>
                <input type="password" name="Password" class="bg-white border-black border-1 required">

                <input type="submit" name="submit" class="flex bg-blue-300 cursor-pointer mt-4 p-2">
            </form>
        </div>
    </div>

    
