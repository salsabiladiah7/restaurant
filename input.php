<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css";>
    <link rel="stylesheet" type="text/css" href="a.css";>
    <title>Document</title>
</head>
<body>
    <div class=hh>
        <center><h1  class=a>RM. SELERA<h1></center>
    </div>
    <br><br><br>
    <?php 
    include 'koneksi.php';
    $no_meja = $_POST['no_meja'];
    $nama = $_POST['nama'];
    $makanan = $_POST['makanan'];
    $minuman = $_POST['minuman'];

    $query = "INSERT INTO pesanan VALUES('$no_meja','$nama','$makanan','$minuman')";
    $sql= mysqli_query($connect,$query);
    ?>
    <center><h1>DATA PESANAN</h1>
    <table bgcolor="#f7dfd4" border="1" width="80%"></center>
        <tr>
            <th bgcolor"#eabcac">NO. MEJA</th>
            <th bgcolor"#eabcac">ATAS NAMA</th>
            <th bgcolor"#eabcac">MAKANAN</th>
            <th bgcolor"#eabcac">MINUMAN</th>
        </tr>
        <?php
        include "koneksi.php";
        $query= "SELECT*FROM pesanan";
        $sql=mysqli_query($connect,$query);
        while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $data['no_meja']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['makanan']; ?></td>
            <td><?php echo $data['minuman']; ?></td>
	    </tr>
	    <?php } ?>
        </table>
        <br><br>
        <a class=link href="login.php">SELESAI</a>
</body>
</html>