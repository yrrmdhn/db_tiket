<?php
    include 'db.php';
    if(isset($_SESSSION['user'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>AIRPORT CR7</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="content">
    <center>
        <a href="index.php?act=tambah-tiket"><input type="submit"
        class="submit" value="Tambah Tiket"></a>
        <a href="index.php?act=data-tiket"><input type="submit"
        class="submit" value="Data Tiket"></a>
        <a href="index.php?act=data-transaksi"><input type="submit"
        class="submit" value="Data Transaksi"></a>
    </center>
    <div class="kotak">
        <?php
        if(isset($_GET['act'])){
            if($_GET['act'] == 'tambah-tiket')
                include 'tambah-tiket.php';
            else if($_GET['act'] == 'data-tiket')
                include 'data-tiket.php';
            else if($_GET['act'] == 'data-transaksi')
                include 'data-transaksi.php';
        }else if(isset($GET_['detail'])){
            include 'detail.php';
        } else{
            include 'data-transaksi.php';           
        }
    ?>
  </div>
</div>
</body>
</html>

           

