<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text = "Assalamu’alaikum warahmatullahi wabarakatuh,Selamat datang di website resmi SMK YPC Tasikmalaya.
    Dengan penuh rasa syukur, kami hadir sebagai lembaga pendidikan yang berkomitmen untuk mencetak generasi muda yang kompeten, berkarakter<br>";

    echo str_replace("SMK YPC Tasikmalaya", "SMK YPC TASIKMALAYA " ,$text);
    echo substr($text ,46,58);
    ?>
</body>
</html>