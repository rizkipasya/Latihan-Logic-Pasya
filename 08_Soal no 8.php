<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung volume bola</title>
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
function hitungVolumeBola($jari) {
  $pi = 22/7; 
  return (4/3) * $pi * pow($jari, 3); 
}

if (isset($_POST['submit'])) {
  $jari = $_POST['jari'];
  $volumeBola = hitungVolumeBola($jari);

  echo "Volume bola dengan jari-jari $jari adalah $volumeBola";
}
?>
