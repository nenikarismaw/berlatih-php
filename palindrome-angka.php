<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  echo "<br> Palindrome angka ($angka): <br>";
  while(true){
    $angka += 1;
    $result = intval(strrev(strval($angka)));
    if($result == $angka){
        echo $result;
    break;
    } 
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>