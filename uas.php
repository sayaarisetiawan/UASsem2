<?php 
$t=date("H");

if ($t < "20") {
    echo "Have a good day!";
} else
    echo "Have a nice day!";
    echo "<br>";
    echo "Program ini adalah contoh sederhana dalam bahasa PHP yang mengecek waktu saat ini dan mencetak pesan berdasarkan waktu tersebut.<br>

    - Baris pertama `$t=date(H); mengambil waktu saat ini dalam format jam menggunakan fungsi `date(H)` dan menyimpannya dalam variabel $t.<br>
    
    - Baris kedua `if ($t < 20) {` memeriksa apakah waktu saat ini kurang dari 20 (8 malam). Jika kondisi tersebut benar, maka blok kode di dalam kurung kurawal `{}` akan dijalankan.<br>
    
    - Baris ketiga `echo Have a good day!;` mencetak pesan Have a good day! jika waktu saat ini kurang dari 20.<br>
    
    - Jika kondisi pada baris kedua tidak terpenuhi (waktu saat ini lebih dari atau sama dengan 20), maka program akan melanjutkan ke baris keempat `} else` dan menjalankan blok kode di dalam kurung kurawal `{}` setelahnya.<br>
    
    - Baris kelima `echo Have a nice day!;` mencetak pesan Have a nice day! jika waktu saat ini lebih dari atau sama dengan 20.<br>
    
    Jadi, program ini akan mencetak pesan Have a good day! jika waktu saat ini kurang dari 20 (8 malam), dan mencetak pesan Have a nice day! jika waktu saat ini lebih dari atau sama dengan 20.";
?>