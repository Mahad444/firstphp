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
print($fruits);
// another way
$age5 = [15,16,17,19,23];
print($age5)
// adding the array
array_push($age5,35)
// using for each 
foreach($fruits as $fruit){
    echo "fruit".$fruit."<br>"
}

?>