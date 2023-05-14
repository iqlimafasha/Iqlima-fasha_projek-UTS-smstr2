<?php
require_once 'dbkoneksi.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$id = $_GET['edit'];
    $sql = "SELECT * FROM tipe_pakaian WHERE id = ? ";
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
    <title>Edit Tipe Pesanan</title>
  </head>
  <body>
  <div id="layoutSidenav_content">
            <main>
                <div class="card-body">
                    <form method="POST" action="proses_tipe.php">
                        <input type="hidden" name="idedit" value="<?= $result['id'] ?>">
                        <div class="form-group">
                            <label for="tipe" class="form-label">Tipe Pakaian</label>
                            <input id="tipe" name="tipe" required type="text" class="form-control"
                                value="<?= $result['tipe'] ?>">
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