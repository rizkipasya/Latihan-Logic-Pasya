<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Lingkaran</title>
</head>
<body>
    <form accept="" method="POST">
            <table>
            <tr>
                <td>Masukkan Jari-jari : </td>
                <td><input type="text" name="jari" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
</form>
</body>
</html>

<?php
        function hitungLuasLingkaran($jari) {
            $phi = 22/7;
            return $phi * ($jari * $jari);
        }
        
        if (isset($_POST['submit'])) {
            $jari = $_POST['jari'];
            $luasLingkaran = hitungLuasLingkaran($jari);
        
            echo "Luas lingkaran dengan jari-jari $jari adalah $luasLingkaran";
        }
    
?>
