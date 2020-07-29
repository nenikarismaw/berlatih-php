<?php
function pasangan_terbesar($angka){
    print_r($angka);
    echo " pasangan terbesarnya adalah ";
// kode di sini
    $temp = substr($angka, 0, 2);
    for($i=0; $i<=strlen($angka)-2; $i++){
        $pasangan_terbesar = substr($angka, $i,2);
        if($pasangan_terbesar > $temp){
            $temp = $pasangan_terbesar;
        }
    }
    return $temp. "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>