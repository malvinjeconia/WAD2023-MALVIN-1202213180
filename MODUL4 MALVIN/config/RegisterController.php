<?php

require 'connect.php';

// (1) Mulai session
session_start();
// (2) Ambil nilai input dari form registrasi
$email = $_POST['email'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);

    // a. Ambil nilai input email
    
    // b. Ambil nilai input name
    
    // c. Ambil nilai input username
    
    // d. Ambil nilai input password
    
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()
    
//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($db, $query);

//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if (mysqli_num_rows($result) == 0) {
    // a. Buatlah query untuk melakukan insert data ke dalam database
    $query = "INSERT INTO users VALUES ('', '$name', '$username', '$email', '$password')";
    $result = mysqli_query($db, $query);
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil berwarna hijau
    if($result){
        $_SESSION['message'] = "Pendaftaran berhasil";
        header('Location: ../views/login.php');
    }else{
        $_SESSION['message'] = "Pendaftaran gagal";
        header('Location: ../views/register.php');
    }
// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar
} else {
    $_SESSION["message"] = "Email sudah terdaftar!";
}



//

?>