<?php
$nama = $_POST['Nama'];
$angka1 = $_POST['Angka pertama'];
$angka2 = $_POST['Angka kedua'];
echo "Masukkan nama anda : <b>$nama</b> <br>";
echo "Masukkan nilai pertama(1-10) : <b>$angka1</b> <br>";
echo "Masukkan nilai kedua(1-10) : <b>$angka2</b> <br>";

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
?>
