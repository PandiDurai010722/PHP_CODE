<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form action="swtich_statements.php" method="post">
    what was your grade?
    <input type="text" name="grade">
    <input type="submit">

</form>


<?php
$grade = $_POST["grade"];
switch ($grade) {
    case "A":
        echo "You did amazing!";
        break;
    case "B":
        echo "You did pretty good";
        break;

    case "C":
        echo "You did poorly";
        break;
    case "D":
        echo "You did very bad";
        break;
    case "F":
        echo "You Fail ";
        break;
    default:
        echo "Invalid Grade";
}


?>
</body>

</html>