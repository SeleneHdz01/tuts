<?php
/**TERNARY OPERATORS */

$score = 20;

//if($score > 40){
//    echo 'high score!';
//}else{
//    echo 'low score :(';
//}

$score > 40 ? 'high score!' : 'low score :(';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<p><?php echo $score > 40 ? 'high score!' : 'low score :(' ?></p>
    
</body>
</html>