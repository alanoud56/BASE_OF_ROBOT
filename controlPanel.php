<!DOCTYPE html>
<html lang ="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Control Panel</title>
  <link rel="stylesheet" href="style.css">
  </head>

  <body>


    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db ="baseRobot";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }else{
      echo "Connected successfully";
    }

    ?>
    <form  action = "controlPanel.php" method ="POST">
<div class="container">
  <button class="btn btn1" name="buttonR">RIGHT</button>
  <button class="btn btn2" name="buttonL">LEFT</button>
  <button class="btn btn3" name="buttonF">FORWARD</button>
  <button class="btn btn4" name="buttonB">BACKWARD</button>
  <button class="btn btn5" name="buttonS">STOP</button>
  </div>


</form>


<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// right button -->
if (isset($_POST['buttonR'])) {
$sql = "INSERT INTO `movement`(`motion`)VALUES('R')";
$result = $conn->query($sql);
 }

// left button -->
 if (isset($_POST['buttonL'])) {
 $sql = "INSERT INTO `movement`(`motion`)VALUES('L')";
 $result = $conn->query($sql);
  }


  // FORWARD button -->
   if (isset($_POST['buttonF'])) {
   $sql = "INSERT INTO `movement`(`motion`)VALUES('F')";
   $result = $conn->query($sql);
    }



  // BACKWARD button -->
   if (isset($_POST['buttonB'])) {
   $sql = "INSERT INTO `movement`(`motion`)VALUES('B')";
   $result = $conn->query($sql);
    }



    // STOP button -->
    if (isset($_POST['buttonS'])) {
    $sql = "INSERT INTO `movement`(`motion`)VALUES('S')";
   $result = $conn->query($sql);
        }

?>
  </body>
  </html>
