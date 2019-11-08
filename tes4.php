<?php
// siapkan 2 angka awal
$angka_sebelumnya=1;
$angka_sekarang=$angka_sebelumnya+1;
$angka_ketiga=4;
  
//tampilkan 2 angka awal
echo "$angka_sebelumnya $angka_sekarang $angka_ketiga ";
 
for ($i=0; $i<8; $i++)
{
  // hitung angka yang akan ditampilkan
  $output = $angka_ketiga + $angka_sekarang + $angka_sebelumnya;
  echo " $output";
  
  //siapkan angka untuk perhitungan berikutnya
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}
 
// hasil: 
// 0 1 1 2 3 5 8 13 21 34 55 89
?>
function centuryFromYear($year) {
    return $year % 100 == 0 ? $year / 100 : $Math.floor($year / 100) + 1;
}

