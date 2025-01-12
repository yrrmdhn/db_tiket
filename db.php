<?php
    $conn = mysql_connect('localhost','root','');
    $select = mysql_select_db('tiket');

    session_start();

    function say($pesan, $lokasi){
        $a = "<script>
                window.alert('$pesan');
                window.location='$lokasi';
            </script>";
            return $a;

    }
?>

