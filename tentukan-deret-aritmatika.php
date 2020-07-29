<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini ;
    print_r($arr) ;
    echo "Deret Aritmatika? "; 
    $hasil = true;
    for($i=1; $i<count($arr); $i++){
        if($arr[$i]-$arr[$i-1] !== $arr[1]-$arr[0]) {
            $hasil = false;
        break;
        }
    }
    if ($hasil == true){
        echo "True <br><br>";
    }
    else{
        echo "False <br><br>";
    }
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>