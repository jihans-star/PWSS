<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $jurusan = $_POST['jurusan'];
        $tugas = $_POST['tugas'];
        $absen = $_POST['absen'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        $nilai = ($absen*0.1)+($uts*0.3)+($tugas*0.2)+($uas*0.4);
        if($nilai > 89 &&  $nilai < 101){
            $grade = "A";
        }else if($nilai > 79 &&  $nilai < 90){
            $grade = "B";
        }else if($nilai > 69 &&  $nilai < 80){
            $grade = "C";
        }else if($nilai > 59 &&  $nilai < 70){
            $grade = "D";
        }else if($nilai > 0 &&  $nilai < 60){
            $grade = "E";
        }else{
            $grade = "Tidak Tersedia";
        }
        if($jurusan == "1"){
            echo " Rekayasa Perangkat Lunak";
        }else if($jurusan == "2"){
            echo " Teknik Otomotif";
        }else if($jurusan == "3"){
            echo " Teknik Jaringan Komputer Telekomunikasi";
        }
        if($class == "a"){
            echo "X";
        }else if($class == "b"){
            echo "XI";
        }else if($class == "c"){
            echo "XII";
        }
        $nameup = strtoupper($name);
        $classup = strtoupper($class);
        $jurusanup = strtoupper($jurusan);
        echo "Siswa yang bernama ".$nameup. " Kelas ".$classup. " Jurusan ".$jurusanup." dengan :<br>Total nilai :".$nilai."<br>Grade :".$grade;
    }
    ?>
</body>
</html>