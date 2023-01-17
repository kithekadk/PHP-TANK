<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions logica operators and conditional statements</title>
</head>
<body>
    <!-- <form method="post" action="functions.php">
        Name: <input type="text" name="name" placeholder="Input your name">
        <input type="submit" value="SUBMIT">
    </form> -->

    <form method="post" action="functions.php">
        Marks: <input type="text" name="marks" placeholder="Input your marks">
        <input type="submit" value="PROCEED">
    </form>

    <?php
        $marks = $_POST["marks"];

        switch ($marks) {
            case 0<=40:
                echo "Pass";
                break;
            case 41<50:
                echo "Credit";
                break;
            case 60<100:
                echo "Distinction";
                break;
            default:
                echo "Case not captured yet";
        }
        function welcome($name){
            echo "Welcome $name";
        }
        $username =$_POST["name"];
        welcome("$username");
        echo "<br>";

        function cube($num){
            return $num*$num*$num;
        }

        echo cube(5);

        //conditional statements
        $isMale = true;
        $isTall = false;
        echo "<br>";

        if ($isMale){
            echo "You are a Man";
        }elseif ($isTall){
            echo "You are Tall";
        }else{
            echo "You are neither Male nor Tall";
        }

        //logical operators
        if ($isMale && $isTall){
            echo "You are a tall man";
        }elseif($isMale || $isTall){
            echo "You are either male or tall";
        }else{
            echo "You are neither male nor tall";
        }

        //LOOPS
        echo "<br>";
        $age = 1;
        while ($age <= 10){
            echo "My age is $age <br>";
            $age++;
        }

        $num2 = 5;
        do {
            echo "$num2 <br>";
            $num2++;
        }while ($num2<=15);

        $num3 = 0;
        for ($num3 = 0; $num3 <=12; $num3++){
            echo "Number $num3 <br>";
        }
    ?>
</body>
</html>