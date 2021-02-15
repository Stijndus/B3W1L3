<?php
$getal1 = rand(0, 100);
$getal2 = rand(0, 100);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $getal1;?> + <?php echo $getal2;?> = <?php echo $getal1 + $getal2;?></h2>
    <h2><?php echo $getal2;?> - <?php echo $getal1;?> = <?php echo $getal2 - $getal1;?></h2>
    <h2><?php echo $getal1;?> * <?php echo $getal2;?> = <?php echo $getal1 * $getal2;?></h2>
    <h2><?php echo $getal1;?> / <?php echo $getal2;?> = <?php echo $getal1 / $getal2;?></h2>
</body>
</html>