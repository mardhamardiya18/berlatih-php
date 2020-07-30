<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  $output = false;
  if(strrev($angka)==$angka){
      $output = true;
  }
  return $output;
}
function polindrom_angka($angka2){
    if($angka2 >= 2 && $angka2 <=8){
        return $angka2 + 1;
    }
    if (palindrome($angka2)) {
        $angka2++;
    }
    while(palindrome($angka2)==false){
        $angka2++;
    }
    return $angka2;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
