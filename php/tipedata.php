<?php
$nim = 'A';
$nama = "alyaa wahhh";
$umur = 17;
$nilai = 95;
$status = TRUE;

echo "---Belajar Tipe Data --- <br><br>";
echo "Tipe Data Char : " . $nim . "<br>";
echo "Tipe Data String : $nama<br>";
print "Tipe Data Int : " . $umur;
printf("Tipe Data Float : %.5f<br><br>", $nilai);
echo "Tipe Data Boolean : <br><br>";
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";