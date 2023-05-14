<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];
$query = "DELETE FROM pesanan WHERE id = ?";
$statement = $dbh->prepare($query);
$statement->execute([$id]);

header('location:pesanan.php');
?>