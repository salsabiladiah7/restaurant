<?php
    include 'koneksi.php';
    $user = $_POST['user'];
    $no = $_POST['no_telp'];
    $pas = $_POST['pass'];

    $query = "INSERT INTO register (user,no_telp,pass) VALUES ('$user','$no','$pas')";
    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        header("location:masuk.php");
    }
    else{
        echo "Gagal Tambah Data".mysqli_error($connect);
        header("location:daftar.php");
    }
?>