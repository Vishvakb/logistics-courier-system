<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/1920_1080.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align='center' style="font-weight: bold;font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h2>Courier Logistics Management System</h2>
     
</body>
</html>
