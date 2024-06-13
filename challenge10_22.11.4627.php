<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Challenge 10</title>
</head>
<body>
 <form method="POST" action="input.php">
 Nama anda: <input type="text" name="Nama"> <br>
 Masukkan angka pertama <input type="text" name="Angka pertama"> <br>
 Masukkan angka kedua : <input type="Angka kedua"> </input> <br>
 <input type="submit" value="Submit">
 </form>

 <?php


 $tambah = $angka1 + $angka2;
 $kurang = $angka1 - $angka2;
 $kali = $angka1 * $angka2;
 $bagi = $angka1 / $angka2;
 $modulus = $angka1 % $angka2;

 echo "<ha2> perhitungan Aritmatika </h2>";
 echo "$angka1 + $angka2 = $tambah";
 echo "<br>$angka1 - $angka2 = $kurang";
 echo "<br>$angka1 * $angka2 = $kali";
 echo "<br>$angka1 / $angka2 = $bagi";
 echo "<br>$angka1 % $angka2 = $modulus";
 ?>
</body>
</html>
