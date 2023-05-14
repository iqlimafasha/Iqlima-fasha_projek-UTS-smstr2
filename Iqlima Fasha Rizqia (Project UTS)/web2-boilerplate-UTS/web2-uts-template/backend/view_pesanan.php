<?php 
require_once 'dbkoneksi.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_pelanggan b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PELANGGAN ' . $row['nama'];
?>

<table class="table table-hover table-striped">
    <tbody>
        <tr>   <td>Id</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Tanggal</td><td><?=$row['tanggal']?></td></tr>
        <tr>   <td>Pakaian Id</td><td><?=$row['pakaian_id']?></td></tr>
        <tr>   <td>Quantity</td><td><?=$row['quantity']?></td></tr>
    </tbody>
</table>
</body>
</html>