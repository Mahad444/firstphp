<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body> -->
    <h1><?php
    session_start();
    
    echo  $_SESSION['username'] ."<br>" .$_SESSION['email'];
    ?></h1>
<!-- </body>
</html> -->