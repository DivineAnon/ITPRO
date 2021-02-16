<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITPRO</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="pull-right">Ubah User</h1>
            </div>
            <div class="col-12">  
                <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $data = mysqli_query($koneksi,"select * from user where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <form action="edit.php" method="POST">
                    <div class="form-group">
                      <label>Nama : </label>
                      <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                      <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $d['nama']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Telp</label>
                      <input type="number" class="form-control" name="telp" placeholder="No Telp" value="<?php echo $d['telp']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary pull">Submit</button>
                  </form>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>

</body>

</html>