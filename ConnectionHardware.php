
<!DOCTYPE html>
   <html lang="en">
   <head>
       <title>controlpanel</title>
   </head>
   <body>
   <?php

     $conn = new mysqli('localhost','root','','baseRobot');

     $stmt=$conn->prepare("SELECT * FROM movement ORDER BY ID DESC LIMIT 1");
     $stmt->execute();
     $result = $stmt->get_result();
     while($row=$result->fetch_assoc()){
       echo "the last move: ".$row["motion"];
     }
?>
