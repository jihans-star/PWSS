<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bus.php" method="post">
        <table>
            <tr>
                <td>Pilih Kelas</td>
                <td>
                    <select name="class" id="">
                        <option value="eksekutif">Eksekutif</option>
                        <option value="bisnis">Bisnis</option>
                        <option value="ekonomi">Ekonomi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <input type="radio" name="arah" id="" value="Tasik Jakarta">Tasik Jakarta
                    <input type="radio" name="arah" id="" value="Tasik Bandung">Tasik Bandung
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Lihat Harga" name = "tombol">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>