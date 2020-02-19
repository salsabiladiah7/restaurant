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

        $id = $_POST['ID'];
        $username = $_POST['username'];
        $password = $_POST['password'];

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

</body>
</html>