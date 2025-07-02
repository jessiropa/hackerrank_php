<?php

// memiliki array sebagai berikut 
$arr = [1, 2, 3, 4, 10, 11];

// menampilkan data arrah
echo "DATA ARRAY <br>";

// menampilkan array menggunakan foreach 
foreach ($arr as $row) {
    echo $row . "<br>";
}
echo "<br>";

echo "Menjumlahkan array bisa dilakukan dengan cara <br>";
echo "1. Fungsi array_sum pada php <br>";

$avg = array_sum($arr);
echo 'Total penjumlah array menggunakan array_sum : ', $avg;

echo "<br>";
echo "2. Perulangan <br>";
// membuat variabel penampung hasil penjumlahan
$result = 0;
// melakukan penjumlahan sebanyak jumlah array
for($i = 0; $i < count($arr); $i++){
    // melakukan penjumlahan setiap elemen array
    // penjumlahan dengan cara umum
    // $result = $result + $arr[$i];
    // penjumlahan dengan menggunakan increment
    $result += $arr[$i];
}

echo "Total penjumlahan array menggunakan perulangan : ", $result;