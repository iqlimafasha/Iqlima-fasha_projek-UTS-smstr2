<?php 
require_once 'dbkoneksi.php';
?>
<?php 

   $_tgl = $_POST['tanggal'];
   $_pakaianid = $_POST['pakaian_id'];
   $_qyt = $_POST['quantity'];

   $_proses = $_POST['proses'];

   // array data

   $ar_data[]=$_tgl; // ? 2
   $ar_data[]=$_pakaianid;// 3
   $ar_data[]=$_qyt;
  

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (`tanggal`,`pakaian_id`,`quantity`) VALUES (?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET tanggal=?,pakaian_id=?,quantity=?
     WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:pesanan.php');
?> 