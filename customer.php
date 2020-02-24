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
    
    <center><h1>MENU MAKANAN/MINUMAN RM SELERA</h1>
    <table bgcolor="#f7dfd4" border="1" width=80%></center>
    <tr>
        <th bgcolor="#eabcac">NO</th>
        <th bgcolor="#eabcac">MAKANAN</th>
        <th bgcolor="#eabcac">MINUMAN</th>
    </tr>
    <?php
        include "koneksi.php";
        $query = "SELECT*FROM menu";
        $sql= mysqli_query($connect,$query);
        while($data = mysqli_fetch_array($sql)){
            echo "<tr>";
            echo "<td>".$data['No']."</td>";
            echo "<td>".$data['Makanan']."</td>";
            echo "<td>".$data['Minuman']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
    <br><br><br>
    <div id=log>
        <form action="customer_create.php" method="POST">
            <br><input type="text" name="no_meja" placeholder="No Meja">
            <br><input type="text" name="nama" placeholder="NAMA PEMESAN"><br>
            <br><input type="text" name="makanan" placeholder="Makanan">
            <br><input type="text" name="jumlah_makanan" placeholder="JUMLAH PORSI"><br>
            <br><input type="text" name="minuman" placeholder="Minuman">
            <br><input type="text" name="jumlah_minuman" placeholder="JUMLAH PORSI"><br><br>
            <button type="submit" class=lin>SIMPAN</button><br><br>
        </form>
    </div>
</body>
</html>