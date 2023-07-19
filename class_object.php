<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Book
    {
        var $title;
        var $author;
        var $pages;

        function __construct($name)
        {
            echo "$name<br>";
        }


    }

    $book1 = new Book("Mike");
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    $book2 = new Book("Tom");
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;


       ?>
</body>

</html>