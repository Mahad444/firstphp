<!-- ARITHMETIC OPERATORS -->

<?php
// Addition
echo 1+1;
echo "<br>";
// subtraction
 echo 5-2.6;
 echo "<br>";
//  division
echo 4/2;
echo "<br>";
// multiplication 
echo 6*8;
echo "<br>";
// modolous  this give the remainder of a division
echo 9 % 7;
echo "<br>";
#ASSIGNMENT OPERATORS
//  = this sign is used to assign variables a value
$num = 7;
echo ($num);
echo "<br>";
#the can also be used with arrithmetic operators to add,subtract,multiply and devide assigned operator
 $num += 6;
 echo ($num);
//  this adds number 6 to the assigned operator
?>
<div>
    <?php
    $x = 10;
    $y =9 ;

    var_dump($x == $y) ;//equal to operator;
    echo "<br>";
    var_dump($x != $y ); // not equal operator
    echo "<br>";
    var_dump ($x === $y); // checks the indenticality i.e datatype and value
    echo "<br>";
    var_dump($y < $x); //less than operator
    echo "<br>";
    var_dump($x > $y); // greater than operator
    ?>
</div>
<div>
    <?php
    $num = 10;
    echo ++$num; //pre-increment
    echo "<br>";
    $num2 =10;
    echo $num2++; //post-increment
    echo "<br>";
    $num3 = 10;
    echo --$num3; //pre-decrement
    echo "<br>";
    $num4 = 10;
    echo $num4 --; // post-decrement
    
    ?>
</div>
