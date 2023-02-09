<?php
include("./NavigationBar.php")
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
    <div class="flex flex-col justify-around mt-4 items-center ">
        <h1 class="mt-4">Appointment</h1>
        <div class="border-2 p-2 mt-4 flex flex-row justify-center items-center hover:bg-blue-400 hover:text-white">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADAUlEQVR4nO2Zz0tUURTHP4yTIbnItEXqaiLal6V/QRHaRiTalP0PQpZStqhsmWi0KRqSViVELV2U6D+QuNIRyiK10q3ZxrhwBg6XO2/evfNm3hTzhQOPee98zz3v3Xt+DTTQQANJIAP0AWPAHLAC7AJ/RHbltzfAbaBXdFJHNzAJfAMOPOUr8BDoSmPh7cBTYD9g4bb8Bp4Ax2q1+KvAL8dCvgPPgGvAGXHykEgHcBa4DjwHNh36P4Er1Vx4Vt66bfgD0A80eXINAB8dfDNyP1G0AO8tQ6vAhQS4LwFrFvc7sZkIso7F54EjSRkAWoGXDicS+RL2trlD9XDXsjWdxIGt1eJLOTFEINqtaGO2Ta0wq+z+ANoq3TqrAXv+NLABfAZOBZyJQiVbqdtKUhd9CaSsKOqb8iEkOh2oZNfpozxpxfkQ3FMc5joEC4rjQVylJqu2MUkqLQcGFMeXuAVgn1UeZFN0IAtsKZ7zcZTGlYKpbUjRAYMXimeUGJhTCqYwS9uBYcXzOo7CilIwVWXaDvQonuU4CjtKwSSzUjgJjMhndcm84pmPeG4EyEXYOW6V3GWh439zxHM60VQqhQg7h6188P87sBNzC+UkYj0qIUuKZyniufGkt5A+xKYNTPsQn/M9xDqMmh42bQdu+IbRsTpLZHnFczOOQq9S2KyDUmJb8ZicUBYZGTrVQzF3OaSYQyZmRUUz+kjLgUXFcd9HsUtiblHZNBe+GPUtwiz0K/0934YGGfcVCdakzfNBThJUoUycd8HYWlf2pwhAuySOIomZ29QKr5Td7dCmHplV6pRvRh7VxoRlc7BSwpkaOjFh2XqcBGlWxnyaeDbgTESh1do2Rt56Dowj0eJwohAYnVzRZt2x+MSGu/pLTDtK4QWZHvhk7KwkqUUH31SSb96FISu9F2VLGvBhSfkd0k80y3WPFGb5CP1BaoQ2+Ro62YXKnrz1o6SATpmYbQQs3NQ2pjw4QR0gI0OnW1KzL0tnty9irj/JvVFpUurib9YGGuAfx18eKsRFV7jUgwAAAABJRU5ErkJggg==">            <a href="./appointments_form.php">New Appointment</a>
        </div>
        <section class="mt-4">
            <?php include"./Appointment_Table.php";?>
   </section>
    </div>

  