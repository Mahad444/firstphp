<!-- Learning Constants -->

<?php
define("CONSTANT","This is a constant",false);
echo CONSTANT;

/*define("NUMBERS",99);
echo numbers;*/ 

#the above code brings out errors due to case sensitivity

define("NUMBERS",99,true);
echo numbers;
#the code solves the case sensitivity by using `true` boolean


?>