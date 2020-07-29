<?php

function papan_catur($angka) {
// tulis kode di sini
    echo "Papan Catur ($angka):<br>";
    for($i=0; $i<$angka; $i++){
        for($j=0; $j<$angka*2-($i%2); $j++){
            if($i%2==0 && $j%2==0){
                echo "#";
            }else if($i%2==0 && $j%2==1){
                echo "&nbsp;";
            }else if($i%2==1 && $j%2==0){
                echo "&nbsp;";
            }else if($i%2!==0 && $j%2!==0){
                echo "#";
            }
        }
        echo "<br>";
    }
    echo "<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/