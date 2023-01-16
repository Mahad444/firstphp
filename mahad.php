<?php

$age = 18;

if ($age >= 18)
{
    echo "you 18yrs and above "
}

elseif($age<18)
{
    echo("you are not 18yrs");
}else($age){
    echo("you are 18yrs");
}

?>

<!-- LOOPS -->
<!-- for Loop -->
<?php
for ($i= 1; $i<=10; $i++){
    echo i;
}
?>
<!-- While Loop -->
<?php
$i=i;
while($i<=10){
    echo i
}
?>
<!-- do while -->
<?php
do{

}

$fruits = array('mango', 'orange', 'pineapple', 'apple');
print_r($fruits);
// another way
$age5 = [15,16,17,19,23];
print_r($age5)
// adding the array
array_push($age5,35)
// using for each 
foreach($fruits as $fruit){
    echo "fruit".$fruit."<br>"
}
//functions
function functionName(parameter1,parameter2){
    return()
}

function Add(a,b){
    $sum = a+b;
    return $sum;
}
$results = NumberAdding(20,30)
echo $results
?>
<!-- Exercise
**write a ffunction thats's going to count the number of characters in  a word

-->