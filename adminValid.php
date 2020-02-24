<?php
    include 'koneksi.php';

    $id = $_POST['ID'];
    $username = $_POST['userr'];
    $password = $_POST['passw'];

    $query = mysqli_query($connect,"select*from admin where id='$id' and username='$username' and password = '$password'");
    $cek = mysqli_num_rows($query);
    if($cek > 0){
        session_start();
        $_SESSION['username']=$username;
            $_SESSION['status']='login';
        header("location:admin2.php");
    }
    else{
        header("location:admin.php");
    }
?>