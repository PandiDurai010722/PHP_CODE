<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $phrase = "Pandidurai";  
    echo substr ($phrase,5,3);
    echo "<br>";
    echo str_replace("durai","Aruna",$phrase);
    echo "<br>";
    echo strtolower($phrase);
    echo "<br>";
    $phrase[2]="N";
    echo "<br>";
    echo $phrase; 
    echo "<br>";
    echo $phrase[1];
    echo "<br>";
    echo strtoupper($phrase);
    echo "<br>";
    
    ?>
</body>
</html>