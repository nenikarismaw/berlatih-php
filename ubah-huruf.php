<?php
function ubah_huruf($string){
    print_r($string);
    echo " => ";
//kode di sini
    $abjad="abcdefghijklmnopqrstuvwxyz";
    $output="";
    for($i=0; $i < strlen($string); $i++){
        $posisi = strrpos($abjad, $string[$i]);
        // echo $posisi;
        $output .= substr($abjad, $posisi+1, 1);
    }
    return $output."<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>