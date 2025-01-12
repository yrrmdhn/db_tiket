<?php
    include 'db.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $cek = mysql_query("select * from user where user ='$user' and pass ='$pass'");
    if(mysql_num_rows($cek) == 1){
        $_SESSION['user'] = $user;
        echo say("Selamat Datang","index.php");
    }
?>