
<?php 
require_once ("../connection.php");

$pid = $_GET['id'];
$query = "select * from appointment where $pid";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
$mail = new PHPMailer(true);
//From email address and name
$mail->From = "from@yourdomain.com";
$mail->FromName = "Hospital";

//To address and name
$mail =  $row['email'];
$name = $row['name'];
$number = $row['number'];
$date =  $row['date'];
$pid = $pid;

$mail->addAddress($mail, $name);
$mail->addAddress($mail);

//Address to which recipient will reply
$mail->addReplyTo("reply@yourdomain.com", "Reply");
//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = " Appointments Details";
$mail->Body = "<i>Your Appointments Details</i>";
$mail->AltBody = $pid;
$mail->AltBody = $date;
$mail->AltBody = $name;
$mail->AltBody = $number;
$mail->AltBody =$mail;

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
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
<div class="flex flex-col h-screen">
        <div class="m-auto border p-10 bg-blue-100 flex flex-col">
            <h1 class="text-2xl text-blue-600">Login</h1>
            <form method="post" action="./mail.php">

                <label for="" class="flex mt-3">Appointment No</label>
                <input type="text" value="<?php echo $pid?>" class="bg-white border-black border-1 p-2">

                <label for="" class="flex mt-3">Date and Time</label>
                <input type="text" value="<?php echo $row['date']?>" class="bg-white border-black border-1 p-2">


                <label for="" class="flex mt-3">Patient Name</label>
                <input type="text" value="<?php echo $row['name']?>" class="bg-white border-black border-1 p-2">
               
                <label for="" class="flex mt-3">Mobile No,</label>
                <input type="text" value="<?php echo $row['number']?>" class="bg-white border-black border-1 p-2">
                
               
                <label for="" value="flex mt-3">Email Address</label>
                <input type="text" value="<?php echo $row['email']?>" class="bg-white border-black border-1 p-2">

               <input type="submit" name="submit" class="flex bg-blue-300 cursor-pointer mt-4 p-2">
            </form>
        </div>
    </div>


