<?php
require_once 'dbkoneksi.php';

$id = $_GET['iddel'];
$query = "DELETE FROM tipe_pakaian WHERE id = ?";
$statement = $dbh->prepare($query);
$statement->execute([$id]);

header('location:tipe_pakaian.php');
?>