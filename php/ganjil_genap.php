<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ganjil genap</title>
</head>
<body>
    <?php
    $j = 1;
    while($j < 101){
        if ($j % 2 == 0){
            echo "$j = Bilangan Genap <br>";
        }else{
            echo "$j = Bilangan Ganjil <br>";
        }
        $j++;
    }
    ?>
</body>
</html>