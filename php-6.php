<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php ?>
    <form action="php-6.php" method="get">
        Name:<input text="text" name="name">
        <br>
        Age:<input type="number" name='age'>
        <input type="submit">
    </form>
    <br>
    Your name is <?php
                    echo $_GET["name"]
                    ?>
    <br>
    Your age is <?php
                echo $_GET["age"]
                ?>

</body>

</html>