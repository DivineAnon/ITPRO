<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
 
// update data ke database
mysqli_query($koneksi,"update user set nama='$nama', telp='$telp' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>