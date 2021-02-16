<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ITPRO</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
  <div class="container">
    <div class="col-12">
      <p>Nama : Andrianus</p>
      <p>List User</p>
    </div>
    <div class="col-12">
      <form class="form-inline" action="index.php">
        <p class="mx-sm-3 mb-2">Cari</p>
        <div class="form-group mx-sm-3 mb-2">
          <input type="text" class="form-control" name="cari" placeholder="Masukan Nama">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
        <a href="tambah.php" class="btn btn-success mb-2 ml-2">Tambah</a>
      </form>
    </div>
    <?php 
          include 'koneksi.php';
          if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b>";
          }
        ?>
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Telephone</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
              include 'koneksi.php';
              $no = 1;
              if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $data = mysqli_query($koneksi,"select * from user where nama like '%".$cari."%'");				
              }else{
                $data = mysqli_query($koneksi,"select * from user");		
              }
              while($d = mysqli_fetch_array($data)){
              ?>
          <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['telp']; ?></td>
            <td><a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">
                <i class="fa fa-trash"></i>
                </a>
                <a href="ubah.php?id=<?php echo $d['id']; ?>" class="btn btn-warning">
                <i class="fa fa-pencil"></i>
                </a>
            </td>
          </tr>
          <?php
              }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>