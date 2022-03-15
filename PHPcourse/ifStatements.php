<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
<?php
    $Weather="Sun";
    if($Weather =="Sunny"){
        echo "Weather is pleasant<br>";
    } elseif ($Weather == "Rainy") {
        echo "Weather is not pleasant<br>";
    } else {
        echo "No forcast availabile";
    }
?>
<hr>
<?php 
$Bought_Product= true;
if($Bought_Product){
    echo "<h1>Thank you</h1><br>";
    echo "<p>Your product will be dispatched soon </p>";
} else {
    echo "<h1>Please wait</h1><br>";
    echo "<p>Your payment is being processed </p>";
}
?>
<hr>
<?php 
$a=4;
$b=3;
$c="can not be out";
if($b<5 && $a >0){
    $c=$a/$b;
}
echo $c;
?>

</body>
</html>