<?php
// IF ELSEIF ELSE STATEMENTS
$age  = 17;
if ($age == 12){
    echo "You are too young to be here";
}elseif ( $age == 18 ){
    echo "You are perfectly fine to be here ";
    }
else{
    echo "You are welcome";
}
?>


 <!-- SWITCH STATEMENTS  -->
<div>
<?php
    $favColor = "Red";
    switch ($favColor) {
        case "Red":
            echo ("this is a red color");
            break;

            case "blue": 
                echo ("this color is blue");
                 break;

                 default : 
                 echo ("No such Color");
    }
    ?>
    </div>