<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
    $name=array('Julie', "Linda", "Josh", "Julia");
    echo $name[1];
    ?><br/>



    <?php 
    $food=array("pizza", "apples", 10, 20, array("positive", "negative"), "pasta");
    echo $food[2];
    ?><br/>
<pre>
    <?php echo print_r($food);?><pre><br/>


    <?php 
    $color=array("a"=> "40", "b"=> "pizza", "c"=> "something"); ?><br/>
    <?php $color["b"];?><br/>
</body>
</html>