<?php # adalah tag pembuka dan penutup untuk menandai awal dan akhir blok kode PHP dalam sebuah file PHP.
$nilai = 60; # Mendefinisikan variabel $nilai dan memberinya nilai 60.
if($nilai >= 90){
 echo "Nilai Memuaskan"; #  Klausa if pertama mengevaluasi apakah nilai $nilai lebih besar dari atau sama dengan 90. Jika ya, maka pesan "Nilai Memuaskan" akan ditampilkan.
}elseif ($nilai >= 80){
 echo "Nilai Bagus"; # Jika kondisi di atas tidak terpenuhi, klausa elseif ini akan mengevaluasi apakah nilai $nilai lebih besar dari atau sama dengan 80. Jika ya, maka pesan "Nilai Bagus" akan ditampilkan.
}elseif($nilai >=50){
 echo "Nilai Kurang"; #  Jika kedua kondisi sebelumnya tidak terpenuhi, klausa elseif ini akan mengevaluasi apakah nilai $nilai lebih besar dari atau sama dengan 50. Jika ya, maka pesan "Nilai Kurang" akan ditampilkan.
}else{
 echo "Nilai Sangat Kurang"; # Jika tidak satupun dari kondisi di atas terpenuhi, maka blok kode di dalam klausa else akan dieksekusi. Di sini, pesan "Nilai Sangat Kurang" akan ditampilkan.
}
?>

<!-- Dalam konteks ini, karena nilai variabel $nilai adalah 60, maka kondisi $nilai >= 50 terpenuhi, sehingga hasil yang akan ditampilkan adalah "Nilai Kurang". -->