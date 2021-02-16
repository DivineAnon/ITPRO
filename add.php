<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$telp = $_POST['telp'];

if(is_numeric($telp) == TRUE){    
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama','$telp')");
}
else{
    echo '<p style="color:#f00">Anda harus Memasukan Angka</p>';
}
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>