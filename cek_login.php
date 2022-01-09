<?php 
    session_start();

    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];  
    $data = mysqli_query($db, "SELECT * FROM tb_user WHERE nama='$username' and password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek>0){
        $_SESSION['nama']=$username;
        $_SESSION['password']=$password;
        $_SESSION['status']="login";
        header("location:home.php");        
    } else{
        header("location:login.php?pesan=gagal");
    }
?>