<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Jihan";
    $hight = 170;
    $value = 85;
    echo "Test TNI<br>";
    echo "Nama : ".$name. "<br> Tinggi Badan :".$hight. "<br>Nilai TPA :".$value;

    if($hight > 169 && $value > 84 ){
        echo"<br>Selamat Anda Lulus";
    }else{
        echo "<br>Maaf Tidak Lulus";
    }
    ?>
</body>
</html>