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

echo "the answer is ".$result."<br>";

$text = "myname"."<br>";

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

<div>
    <?php
    $numbersByFive = array(15,20,21,22,17,30);
    foreach($numbersByFive as $answer){
        $anser = $answer/5;
        if($answer%5)
 echo "number is not divisible by five is =".$answer."<br>";
 else{
    print_r("this is divisible by five is =".$answer."<br>");
 }
    }
    ?>
</div>
<div>
    <?php
    $alphabetLetters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
    foreach($alphabetLetters as $counterr);
    $counterr = "Institution";
    if ($counterr === count($alphabetLetters)){
        echo "the letters are".$counterr;
    } 


     
    ?>
</div>
</body>
</html>