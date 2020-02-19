<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include 'koneksi.php';

        $makanan = $_POST['makanan'];
        $minuman = $_POST['minuman'];

        $query=mysqli_query($connect,"select*from menu where Makanan='$makanan' and Minuman='$minuman'");
        $cek = mysqli_num_rows($query);
        if($cek > 0){
            session_start();
            $_SESSION['Makanan']=$makanan;
            $_SESSION['status']='login';
            header("location:input.php");
        }
        else{
            header("location:customer.php");
        }
    ?>
</body>
</html>