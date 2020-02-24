<?php
        include 'koneksi.php';

        $Makanan = $_POST['makanan'];
        $Minuman = $_POST['minuman'];
        $query= "SELECT*FROM menu WHERE Makanan='$Makanan' and Minuman='$Minuman'";
        $result = mysqli_query($connect,$query);
        $cek = mysqli_num_rows($result);
        if($cek>0){
            session_start();
            $_SESSION['makanan'] = $Makanan;
            $_SESSION['minuman'] = $Minuman;
            header("location:customer_create.php");
        }
        else{
            echo "Gagal".mysqli_error($connect);
        }
?>