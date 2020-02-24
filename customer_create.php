<?php 
    include 'koneksi.php';
    $no_meja = $_POST['no_meja'];
    $nama = $_POST['nama'];
    $makanan = $_POST['makanan'];
    $jumlah_makanan = $_POST['jumlah_makanan'];
    $minuman = $_POST['minuman'];
    $jumlah_minuman = $_POST['jumlah_minuman'];

    $query= "SELECT*FROM menu WHERE Makanan='$makanan' and Minuman='$minuman'";
    $result = mysqli_query($connect,$query);
    $cek = mysqli_num_rows($result);
    if($cek>0){
        session_start();
        $_SESSION['makanan'] = $Makanan;
        $_SESSION['minuman'] = $Minuman;

        $query2 = "INSERT INTO pesanan (no_meja,nama,makanan,jumlah_makanan,minuman,jumlah_minuman) VALUES('$no_meja','$nama','$makanan','$jumlah_makanan','$minuman','$jumlah_minuman')";
        $sql= mysqli_query($connect,$query2);
        $num = mysqli_affected_rows($connect);
    
        if($num>0){
            header("location:customer2.php");
        }
        else{
            echo "GAGAL TAMBAH DATA PESANAN".mysqli_connect_error();
        }
    }
    else{
        echo "Gagal".mysqli_connect_error();
    }
?>