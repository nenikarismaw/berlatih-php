<?php

function cari_mean($arr){
//kode di sini
    print_r($arr);
    echo " Hasil mean adalah ";
    $count_array = count($arr);
    $jumlah=0;
    for($i=0; $i<count($arr); $i++){
        $jumlah+=$arr[$i];
    }
    echo round($jumlah/$count_array)."<br>";
}

echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>