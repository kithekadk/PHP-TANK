<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASICS AND ARRAYS</title>
</head>
<body>
    <form method="post" action="basicsandarrays.php">
        Name: <input type="text" name="username" placeholder="Input your Name"><br>
        Email: <input type="email" name="useremail" placeholder="Input your Email"><br>
        Phone Number: <input type="number" name="phonenumber" placeholder="Input your Phone Number"><br>
        <input type="submit" value="SUBMIT">
    </form> 
    <?php
        //Getting user information
        $name = $_POST["username"];
        $email = $_POST["useremail"];
        $phoneNumber= $_POST["phonenumber"];
        echo "My name is $name and my email is $email, please reach me at $phoneNumber";
        echo "<br>";
        //VARIABLES
        $phrase = "Welcome To Todays Session";

        echo "<br>";
        echo "<br>";
        //Data types
        $num1 = 40;

        echo "My age is $num1";
        echo "<br>";

        //Working with strings
        echo strtoupper($phrase);
        echo "<br>";
        echo strtolower($phrase);
        echo "<br>";

        //Modifying strings

        $phrase[5]="B";
        echo "$phrase";
        echo "<br>";
        echo str_replace("Todays", "The", $phrase);
        echo "<br>";
        //Arrays
        $users = array("Ken", "John", "Crispin");

        echo "$users[1]";
        echo "<br>";
        //Adding data to array
        $users[3]="Christine";
        echo "$users[3]";
        echo "<br>";
        echo count($users);
        echo "<br>";

        //Associative array 
        $grades = array("Ken"=>"A", "Jane"=>"D", "Doe"=>"B","Kim"=>"F");
        echo $grades["Doe"];

    ?>
</body>
</html>