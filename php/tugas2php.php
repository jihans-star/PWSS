<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jumlah = 100;
    $lebar = 20;
    $pimpinan = 5;
    $kolom= $jumlah / $lebar;
    $pemimpin =  $lebar / $pimpinan;

    for ($i=0; $i < $lebar; $i++) {
        # code...
        for ($j=0; $j < $kolom; $j++) {
            # code...
            echo "x";
        }
        echo "<br>";
        for ($h=0; $h < 1; $h++) {
            # code...
            echo "        p";
            echo "<br>";
        }
    }
    ?>
</body>
</html>