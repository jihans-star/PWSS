<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hasilnilai.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" id="" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><select name="class" id="" required>
                <option name="a">X</option>
                <option name="b">XI</option>
                <option name="c">XII</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><select name="jurusan" id="" required>
                <option name="1">RPL</option>
                <option name="2">TO</option>
                <option name="3">TJKT</option>
                </select>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><input type="number" name="tugas" id=""></td>
            </tr>
            <tr>
                <td>Nilai Absen</td>
                <td><input type="number" name="absen" id="" required></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="number" name="uts" id="" required></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="number" name="uas" id="" required></td>
            </tr>
            <td><input type="submit" value="SIMPAN" name="submit"></td>
        </table>
    </form>
</body>
</html>