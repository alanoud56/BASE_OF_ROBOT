

<html>

<head>
  <title> Slider by CSS  </title>
  <link rel="stylesheet" href="style.css">
  </head>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$db ="robot_arm";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
  echo "Connected successfully";
}

?>


<form  action = "index.php" method ="POST">
<!-- motor1 -->
   <div id ="ttitle">
     MOTOR1
   </div>
    <div class="main">
      <input type="range" min="0" max="100" value="50" id="slider"   name="slider">
      <div id="selector">
        <div class="Btnselector"></div>
        <div id = "selectvalue"> </div>
      </div>

      <div id= "progreessBar"></div>
      </div>

<!-- moving the selector-->
<script>
  var slider = document.getElementById("slider");
  var selector = document.getElementById("selector");
  var selectvalue = document.getElementById("selectvalue");
  var progreessBar = document.getElementById("progreessBar");

  selectvalue.innerHTML =slider.value;

  slider.oninput= function(){
    selectvalue.innerHTML =this.value;
    selector.style.left=this.value +"%";
    progreessBar.style.width=this.value +"%";
  }
</script>


<!-- MOTOR2 -->
<div id ="ttitle">
  MOTOR2
</div>
 <div class="main">
   <input type="range" min="0" max="100" value="50" id="slider2"  name="slider2">
   <div id="selector2">
     <div class="Btnselector"></div>
     <div id = "selectvalue2"> </div>
   </div>

   <div id= "progreessBar2"></div>
   </div>

<!-- moving the selector-->
<script>
var slider2 = document.getElementById("slider2");
var selector2 = document.getElementById("selector2");
var selectvalue2 = document.getElementById("selectvalue2");
var progreessBar2 = document.getElementById("progreessBar2");

selectvalue2.innerHTML =slider2.value;

slider2.oninput= function(){
 selectvalue2.innerHTML =this.value;
 selector2.style.left=this.value +"%";
 progreessBar2.style.width=this.value +"%";
}
</script>



<!-- MOTOR3 -->
<div id ="ttitle">
  MOTOR3
</div>
 <div class="main">
   <input type="range" min="0" max="100" value="50" id="slider3"   name="slider3">
   <div id="selector3">
     <div class="Btnselector"></div>
     <div id = "selectvalue3"> </div>
   </div>

   <div id= "progreessBar3"></div>
   </div>

<!-- moving the selector-->
<script>
var slider3= document.getElementById("slider3");
var selector3 = document.getElementById("selector3");
var selectvalue3 = document.getElementById("selectvalue3");
var progreessBar3 = document.getElementById("progreessBar3");

selectvalue3.innerHTML =slider3.value;

slider3.oninput= function(){
 selectvalue3.innerHTML =this.value;
 selector3.style.left=this.value +"%";
 progreessBar3.style.width=this.value +"%";
}
</script>


<!-- MOTOR4 -->
<div id ="ttitle">
  MOTOR4
</div>
 <div class="main">
   <input type="range" min="0" max="100" value="50" id="slider4"  name="slider4" >
   <div id="selector4">
     <div class="Btnselector"></div>
     <div id = "selectvalue4"> </div>
   </div>

   <div id= "progreessBar4"></div>
   </div>

<!-- moving the selector-->
<script>
var slider4= document.getElementById("slider4");
var selector4 = document.getElementById("selector4");
var selectvalue4 = document.getElementById("selectvalue4");
var progreessBar4= document.getElementById("progreessBar4");

selectvalue4.innerHTML =slider4.value;

slider4.oninput= function(){
 selectvalue4.innerHTML =this.value;
 selector4.style.left=this.value +"%";
 progreessBar4.style.width=this.value +"%";
}
</script>


<!-- MOTOR5 -->
<div id ="ttitle">
  MOTOR5
</div>
 <div class="main">
   <input type="range" min="0" max="100" value="50" id="slider5"   name="slider5">
   <div id="selector5">
     <div class="Btnselector"></div>
     <div id = "selectvalue5"> </div>
   </div>

   <div id= "progreessBar5"></div>
   </div>

<!-- moving the selector-->
<script>
var slider5= document.getElementById("slider5");
var selector5 = document.getElementById("selector5");
var selectvalue5 = document.getElementById("selectvalue5");
var progreessBar5= document.getElementById("progreessBar5");

selectvalue5.innerHTML =slider5.value;

slider5.oninput= function(){
 selectvalue5.innerHTML =this.value;
 selector5.style.left=this.value +"%";
 progreessBar5.style.width=this.value +"%";
}
</script>



<!-- MOTOR6 -->
<div id ="ttitle">
  MOTOR6
</div>
 <div class="main">
   <input type="range" min="0" max="100" value="50" id="slider6"  name="slider6">
   <div id="selector6">
     <div class="Btnselector"></div>
     <div id = "selectvalue6"> </div>
   </div>

   <div id= "progreessBar6"></div>
   </div>

<!-- moving the selector-->
<script>
var slider6= document.getElementById("slider6");
var selector6 = document.getElementById("selector6");
var selectvalue6 = document.getElementById("selectvalue6");
var progreessBar6= document.getElementById("progreessBar6");

selectvalue6.innerHTML =slider6.value;

slider6.oninput= function(){
 selectvalue6.innerHTML =this.value;
 selector6.style.left=this.value +"%";
 progreessBar6.style.width=this.value +"%";
}


</script>

<button  class ="btn save " type = "submit" name="button" > Save  <button/>
</form>



<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


if (isset($_POST['button'])) {
$sql = "INSERT INTO `robotArmAngles`(`motor1`, `motor2`,`motor3`,`motor4`,`motor5`,`motor6`,`ON/OFF`) VALUES ('".$_POST['slider']."','".$_POST['slider2']."','".$_POST['slider3']."','".$_POST['slider4']."','".$_POST['slider5']."','".$_POST['slider6']."','1') ";
$result = $conn->query($sql);
 }

 ?>



 <?php
/*
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
*/
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
