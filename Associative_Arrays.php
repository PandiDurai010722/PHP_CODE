<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="Associative_Arrays.php" method="post">
<input type="text" name="student">
<br>
<input type="submit">
</form>
    <?php
       $grades =array("jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
       echo $grades[$_POST["student"]];
    //    $grades["jim"]="F";
    //    echo $grades["jim"];
    //    echo "<br>";
    //    echo count($grades);
    ?>
</body>
</html>