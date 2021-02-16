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
                <h1 class="pull-right">Input User</h1>
            </div>
            <div class="col-12">
                <form action="add.php" method="POST">
                    <div class="form-group">
                      <label>Nama : </label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Telp</label>
                      <input type="number" class="form-control" name="telp" placeholder="No Telp">
                    </div>
                    <button type="submit" class="btn btn-primary pull">Submit</button>
                  </form>
            </div>
        </div>
    </div>

</body>

</html>