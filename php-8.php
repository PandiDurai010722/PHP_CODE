<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // Return Statement

    // 2^3->2*2*2
   function cube ($num){
     return  $num*$num*$num;
   }

   $cubeResult=cube(4);
   echo $cubeResult;
   echo "<br>";
   echo cube(5);

   
   ?>
</body>
</html>