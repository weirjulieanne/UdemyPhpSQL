<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php ?>
<?php
$Name = 45;
define("Value_of_Pi", 3.14);
define("Value_of_Gravity", 9.8);
echo "PI VALUE: " . Value_of_Pi; echo "<br/>";
echo "G VALUE: " . Value_of_Gravity;echo "<br/>";


echo "my name is Julie"; echo "<br/>";
$color="red";
$shirt="sleeveless";
$combination= $color. " ".$shirt . " ". "shirt";
echo $combination. "<br/>"; 
echo "{$color} is my favourite colour <br/>";

$phrase1="students who come late and are lazy,";
$phrase2="in class sit in last with Rocks";
$combine2=$phrase1;
$combine2 .=$phrase2;
echo "original full string: $combine2";
?><hr>
Uppercase first: <?php echo ucfirst($combine2);?> <br/>
Uppercase Words: <?php echo ucwords($combine2);?> <br/>
Lowercase: <?php echo strtolower($combine2); ?> <br/>
Uppercase: <?php echo strtoupper($combine2); ?> <br/>

<hr>
Repeat: <?php echo str_repeat($combine2, 3);?><br/>
Make substring from one point to another: <?php echo substr($combine2, 5, 10);?><br/>
Find substring from specific word:  <?php echo strpos($combine2, "come");?><br/>
Find characters: <?php echo strchr($combine2, "R");?><br/>
<hr>
Total length of String: <?php  echo strlen($combine2);?><br/>
Trim: <?php  echo "A". trim(" B C D ") . "E";?><br/>
Find Specific and show after: <?php echo strstr($combine2, "come");?> <br/>
Replace word with new: <?php echo str_replace("sit", "stand", $combine2); ?><br/>
<br/>
<hr>





</body>
</html>