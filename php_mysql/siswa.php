<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <form action="" method="get">
        <input type="search" name="cari" id=""><input type="submit" value="cari">
    </form>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th style="width: 80px;">NISN</th>
            <th style="width: 120px;">NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
        </tr>
        <?php
        include "koneksi.php";
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $sql = "SELECT*FROM siswa WHERE nisn= '$cari' OR nama= '$cari'";
        }else{
            $sql = "SELECT*FROM siswa";
        }

        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?=$no++ ?></td>
                <td><?=$data['nisn'] ?></td>
                <td><?=$data['nama'] ?></td>
                <td><?=$data['jk'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                <td><?=$data['alamat'] ?></td>
                <td><?=$data['nohp'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <a href="add_siswa.php"><button>Tambah Siswa</button></a>
</body>
</html>