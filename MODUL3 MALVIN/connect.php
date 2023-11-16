<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->
<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$HOST = 'localhost:3306';$USER = 'root';$NAME = 'modul3_jurnal';$PASS ='';
// 
$koneksi = mysqli_connect($HOST, $USER, $NAME, $PASS);

// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($koneksi-> connect_error){
    die("connection failed". $koneksi->connect_error);
}
$koneksi->close();
// 
?>
