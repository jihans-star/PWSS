<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['tombol'])){
        $class = $_POST['class'];
        $arah = $_POST['arah'];
    if($class == "eksekutif" && $arah == "Tasik Jakarta"){
        $harga1 =200000;
        echo "Selamat Kamu Mendapatkan Potongan Harga 20%<br>";
        $diskon = $harga1*0.2;
        $harga = $harga1 - $diskon;
    }else if($class == "eksekutif" && $arah == "Tasik Bandung"){
        $harga1 =80000;
        echo "Selamat Kamu Mendapatkan Potongan Harga 20%<br>";
        $diskon = $harga1*0.2;
        $harga = $harga1 - $diskon;
    }else if($class == "bisnis" && $arah == "Tasik Jakarta"){
        $harga =150000;
    }else if($class == "bisnis" && $arah == "Tasik Bandung"){
        $harga =40000;
    }else if($class == "ekonomi" && $arah == "Tasik Jakarta"){
        $harga =100000;
    }else if($class == "ekonomi" && $arah == "Tasik Bandung"){
        $harga =35000;
    }else{
        $harga =0;
    }
    echo "Class : ".$class. "<br> Jurusan :".$arah. "<br>Harga :Rp.".$harga;
    }
    ?>
</body>
</html>