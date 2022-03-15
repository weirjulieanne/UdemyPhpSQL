<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array functions</title>
</head>
<body>
    <?php 
    $color=array("red", "green", "blue");
    array_pop($color);
    array_push($color, "black", "white", "pink");
    print_r($color);
    //pop removes the last item
    //push adds items
    //sort sorts ascending
    //rsort sorts reverse
    //implode turns array to string
    ?><br/>

    <?php $numbers=array(12,1,9,79,81,100,99,2,65);?><br/>
 count <?php echo count($numbers); ?><br/>
max  <?php echo max($numbers); ?><br/>
 min <?php echo min($numbers); ?><br/>
  in_array <?php echo in_array(81,$numbers); ?><br/>
   <?php echo sort($numbers); ?><br/>
  sort  <?php print_r($numbers); ?><br/>
  <?php echo rsort($numbers); ?><br/>
  sort  <?php print_r($numbers); ?><br/>
 
  Implode: <?php  $quote=array("never", "give", "up", "learning", "code");
   echo implode(" ", $quote);?><br/>
  Explode <?php   $quote="KEEP LEARNING PHP OK?";
  print_r (explode(" ", $quote));?><br/>
    
   
</body>
</html>