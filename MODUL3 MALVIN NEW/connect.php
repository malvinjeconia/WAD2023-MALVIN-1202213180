<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php

// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $host = 'localhost:3306'; $username = 'root'; $password = ''; $database = 'modul3_jurnal' ;    
    $koneksi = new mysqli($host, $username, $password, $database);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if($koneksi -> connect_error){
    echo "Database tidak dapat dijangkau!!";
}
// 
?>