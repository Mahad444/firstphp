<!-- welcome to Php class -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$num1 = 10;
$num2 = 15 ;

$result = $num1 + $num2;

echo "the answer is ".$result;

$text = "myname";

echo strtoupper($text) ;
$num3 = 10;
 $num3 ++;
 echo $num3;


echo str_replace('a','w', $text);

// if


$age2 = 10 ;

if($age2>=18){
    echo 'you are allowed to vote';
}elseif($age2<18){
    echo 'you are young to vote';
}else{
    echo 'you are lucky to vote';
}

// switch

$color = "blu";

switch($color){
    case "red":
    echo"red";
    break;
    case "green":
    echo"green";
    break;
    case "blue" :
    echo"blue";
    break;
    default :
    echo"No Color of the sort";
}


?>
</body>
</html>