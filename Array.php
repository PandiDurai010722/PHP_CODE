<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $friends =array("kevin","karen","Oscar","Jim",1,false);
    $friends[1]=400;
     echo $friends[1];true;
     echo "<br>";
     $friends[6]=true;
     
     echo $friends[6];
     echo count($friends)
    ?>
</body>
</html>