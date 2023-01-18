<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="data.php" method="post">
        Username:<input type= "text" name ="username">
        Email:<input type= "text" name ="email">
        <button type= "submit" name ="submit" >Submit</button>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];

    echo "My Name is $username and my email is $email";
}
?>