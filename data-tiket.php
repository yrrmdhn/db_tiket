<center>
    <table class="tabel">
        <tr>
            <th>Kode Tiket</th>
            <th>Kode Pesawat</th>
            <th>Nama Penumpang</th>
            <th>Penerbangan</th>
            <th>Tujuan</th>
            <th colspan="2">Aksi</th>
       </tr>
          <?php
             $q = mysql_query("select * from tiket");
             while($a = mysql_fetch_array($q)){
            ?>
        <tr>
            <td><?= $a['kodeTiket']?></td>
            <td><?= $a['kodePesawat']?></td>
            <td><?= $a['namaPembeli']?></td>
            <td><?= $a['berangkat']?></td>
            <td><?= $a['tujuan']?></td>
            <td><a href=".?detail=<?= $a['idTiket']?>">Detail
            </a></td>
            <td><a href=".?act=data-tiket&hapus=<?= $a['idTiket']?>">Hapus
            </a></td>
        </tr>
        <?php }?>
    </table>
</center>
<?php
    if(isset($_GET['hapus'])){
        $idTiket = $_GET['hapus'];
        $q = mysql_query("delete from tiket where idTiket='$idTiket'");
        if($q){
            echo say("Berhasil dihapus","Index.php?act=data-tiket");

        }
    }
?>
             
