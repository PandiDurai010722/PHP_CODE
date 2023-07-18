<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="Using _Checkboxes.php" method="post">
Apples<input type="checkbox" name="fruits[]" value="apples"><br>
Oranges<input type="checkbox" name="fruits[]" value="Oranges"><br>
Pears<input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit">
  </form>    
  
  <br>
  <br>
<?php 
 $fruits = $_POST["fruits"];
 echo $fruits[2];
?>

</body>
</html>