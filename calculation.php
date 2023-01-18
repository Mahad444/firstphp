<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type ="number" name= "num1"><br>
        <input type ="number" name= "num2"><br>
        <button type="submit" name="submit">AddNumbers</button>
    </form>
</body>
</html>
<?php
 if(isset($_POST["submit"])){
     $num1 = $_POST["num1"];
     $num2 = $_POST["num2"];
     $answer = $num1+$num2;
     echo "The answer is".$answer;
 }

?>
    