<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Grading system</h1>
    <form action="grading.php" method="post">
        <input type="number" name="cat1">
        <input type="number" name="cat2">
        <input type="number" name="cat3">
        <button type="submit" name="submiti">Get Total</button>
    </form>
    
</body>
</html>

<?php
    if(isset($_POST['sumbiti'])){
        $cat1 = $_POST ['cat1'];
        $cat2 = $_POST ['cat2'];
        $cat3 = $_POST ['cat3'];
        $total = $cat1+$cat2+$cat3 ;
     echo "the Total max  is $total";

        //  if ($total >=80 && $total<= 100 ){
        //      echo `the grand total is $total=Grade A`;
        //  }
        //  elseif($total >=60 && $total<= 79 ){
        //      echo `the grand total is $total=Grade B`;
        //  }
        //  elseif($total >= 50 && $total<= 59 ){
        //      echo `the grand total is $total=Grade C`;
        //  }
        //  elseif($total <=0 && $total <= 49 ){
        //      echo `the grand total is $total=Grade D`;
        //  }else{
        //  echo `the grand total is $total=Grade E`;
            
        // }
    }
    
    ?>
</div> 