<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php
        include "classes.php";
        $pet1 = new Pet();

        echo $pet1->getOwner();

        $book1 = new Book("Maths Mastermind", "C Muturi", 300);

        echo "$book1->title <br>";

        $man1 = new Man();
        echo $man1->getManDetails();
    ?>
</body>
</html>