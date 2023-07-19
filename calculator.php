<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form type="calcualtor.php" method="post">
        First Num:<input type="number" step="0.0001"name="num1">
        OP:<input type="text" name="OP">
        Second Num:<input type="number" step="0.001" name="num2">



        <input type="submit">
    </form>

<?php
$num1= $_POST["num1"];
$num2= $_POST["num2"];
$OP =$_POST["OP"];

if($OP=="+"){
    echo $num1+$num2;
}elseif($OP=="-"){
   echo  $num1-$num2;
}elseif($OP=="*"){
    echo $num1*$num2;
}elseif($OP=="/"){
   echo $num1/$num2;
}else{
    echo "Invalid Operation";
}

?>
</body>

</html>