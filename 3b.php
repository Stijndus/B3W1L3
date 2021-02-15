<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3b</title>
</head>
<body>
    <?php
    $array = [3,4,8,12];

    foreach($array as $value){
        for($i = 0;$i <= 10; $i++){
            echo $i * $value, " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>