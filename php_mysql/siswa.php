<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <h1>Selamat Datang <?= $_SESSION['nama']?></h1>
    <a href="logout.php">Logout</a>
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
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        if(isset($_GET['cari'])){
            $cari = mysqli_real_escape_string($koneksi, $_GET['cari']);
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
                <td>
                    <?php
                    if(file_exists('foto/'.$data['foto'])){
                        ?>
                        <img src="<?= 'foto/'.$data['foto'] ?>" alt="" style="width: 50px; height: 50px;">
                        <?php
                    }
                    ?>
                </td>
                <td>
                    <a href="delete_siswa.php?nisn=<?=$data['nisn'] ?>">
                    <button>Hapus</button>
                    </a>
                    <a href="edit_siswa.php?nisn=<?=$data['nisn'] ?>">
                    <button>Edit</button>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <a href="add_siswa.php"><button>Tambah Siswa</button></a>
</body>
</html>