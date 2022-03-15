<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php 
    $firstNumber= 3;
    $secondNumber=4;
    $thirdNumber=3.65478;?>

    <?php echo $thirdNumber + 9 -6; ?> <br/>
    <?php echo 3.1/6;?><br/>
   Ceil: <?php echo ceil($thirdNumber);?><br/>
   Floor: <?php echo floor($thirdNumber);?><br/>
   <?php echo "is {$firstNumber} : integer " . is_int($firstNumber);?><br/>
   <?php echo "is {$thirdNumber} : integer " . is_int($thirdNumber);?><br/>
   <?php echo "is {$firstNumber} : float " . is_float($firstNumber);?><br/>
   <?php echo "is {$thirdNumber} : float " . is_float($thirdNumber);?><br/>
   <?php echo "is {$firstNumber} : numeric " . is_numeric($firstNumber);?><br/>
   <?php echo "is {$thirdNumber} : numeric " . is_numeric($thirdNumber);?><br/>
  decimal to binary <?php echo decbin(3); ?><br/>
  binary to decimal <?php echo bindec(11); ?><br/>
  square root <?php echo sqrt(4); ?><br/> 
   absolute value<?php echo abs(-50+100); ?><br/>
    power <?php echo pow(2,10); ?><br/>
  modulo <?php echo fmod(15,7); ?><br/>
   random<?php echo rand(); ?><br/>
  random  <?php echo rand(400,1600); ?><br/>


</body>
</html>