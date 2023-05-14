<?php
require_once 'dbkoneksi.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$id = $_GET['idedit'];
    $sql = "SELECT * FROM pakaian WHERE id = ? ";
    $statement = $dbh -> prepare($sql);
    $statement -> execute([$id]);
    $result = $statement -> fetch();
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pakaian</title>
  </head>
  <body>
  <div id="layoutSidenav_content">
            <main>
                <div class="card-body">
                    <form method="POST" action="proses_pakaian.php">
                        <input type="hidden" name="idedit" value="<?= $result['id'] ?>">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Pakaian</label>
                            <input id="nama" name="nama" type="text" class="form-control" required
                                value="<?= $result['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="ukuran" class="form-label">Ukuran</label>
                            <input id="ukuran" name="ukuran" type="text" class="form-control" required
                                value="<?= $result['ukuran'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="warna" class="form-label">Warna</label>
                            <input id="warna" name="warna" required type="text" class="form-control"
                                value="<?= $result['warna'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="stok" class="form-label">Stok</label>
                            <input id="stok" name="stok" required type="text" class="form-control"
                                value="<?= $result['stok'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga" class="form-label">Harga</label>
                            <input id="harga" name="harga" required type="text" class="form-control"
                                value="<?= $result['harga'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tipe_pakaian_id" class="form-label">Tipe Pakaian Id</label>
                            <input id="tipe_pakaian_id" name="tipe_pakaian_id" required type="text" class="form-control"
                                value="<?= $result['tipe_pakaian_id'] ?>">
                        </div>
                        <div class="form-group mt-4">
                            <input type="submit" name="proses" type="submit" class="btn btn-secondary btn-success form-control"
                            value="Update" />
                        </div>
                    </form>
                </div>
            </main>
    </div>
</body>
</html>