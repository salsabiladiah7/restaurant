<?php
    include 'koneksi.php';

    $user = $_POST['usser'];
    $pasw = $_POST['paass'];

    $query = mysqli_query($connect,"SELECT*FROM register WHERE user='$user' AND pass='$pasw'");
    $cek = mysqli_num_rows($query);

    if($cek>0){
        session_start();
        $_SESSION['usser']=$user;
        $_SESSION['paass']=$pasw;
        $_SESSION['status']='login';
        header("location:customer.php");
    }
    else{
        echo "Gagal LOGIN".mysqli_error($connect);
        header("location:masuk.php");
    }
?>
