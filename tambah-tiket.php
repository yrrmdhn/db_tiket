<table class="khusus">
<form action="simpan-tiket.php" method="post">
<tr>
    <td>Kode Tiket</td>
    <td>:</td>
    <td><input type="text" name="kodeTiket" class="input"
     value="<?= rand(0, 999999)?>"></input></td>
 </tr>
<tr>
    <td>Kode Pesawat</td>
    <td>:</td>
    <td>
        <select name="kodePesawat" class="input">
            <option>KD001</option>
            <option>KD002</option>
            <option>KD003</option>
            <option>KD004</option>
            <option>KD005</option>
            <option>KD006</option>
</select>
    </td>
 </tr>
 <tr>
    <td>Nama Pembeli</td>
    <td>:</td>
    <td><input type="text" name="namaPembeli" class="input"
    required placeholder="Nama Pembeli"></input></td>
 </tr>
 <tr>
    <td>Penerbangan</td>
    <td>:</td>
    <td><input type="text" name="berangkat" value="Surabaya" 
     class="input"></input></td>
 </tr>
 <tr>
    <td>Tujuan</td>
    <td>:</td>
    <td><input type="text" name="tujuan" class="input"
    placeholder="Tujuan"></input></td>
</tr>
 <tr>
    <td>Tanggal Berangkat</td>
    <td>:</td>
    <td><input type="date" placeholder="Tanggal Pemberangkatan" 
    name="tglBerangkat" class="input"></input></td>
</tr>
 <tr>
    <td>Waktu Pemberangkatan</td>
    <td>:</td>
    <td><input type="time" name="waktuBerangkat" class="input"
    placeholder="Waktu Pemberangkatan"></input></td>
</tr>
 <tr>
    <td>Waktu Sampai</td>
    <td>:</td>
    <td><input type="time" name="waktuSampai" placeholder="Waktu Sampai" 
    class="input"></input></td>
</tr>
 <tr>
    <td>Harga Tiket</td>
    <td>:</td>
    <td><input type="number" placeholder="Harga Tiket" 
    name="harga" class="input"></input></td>
</tr>
 <tr>
    <td>No Kursi</td>
    <td>:</td>
    <td><input type="text" name="noKursi" class="input"
     value="<?= rand(1, 100)?>"></input></td>
</tr>
<tr>
    <td>Kelas Pesawat</td>
    <td>:</td>
    <td>
        <select name="kelas" class="input">
            <option>Pilih Kelas Pesawat</option>
            <option></option>
            <option>Eksekutif</option>
            <option>Ekonomi</option>
            <option>Bisnis</option>
b      </select>
   </td>
 </tr>
 <tr>
                <td colspan="3"><input type="submit" class="submit kanan" value="Tambah"
                  required=""></input></td>
            </tr>
</form>
</table>