<?php 
    require_once 'dbkoneksi.php';
    require_once 'tampilan/header.php';
    require_once 'tampilan/menu.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="from_pemesanan.php" role="button">Create pesanan</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tanggal</th>
                    <th>Pakaian_id</th>
                    <th>Quantity</th>
    
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['pakaian_id']?></td>
                        <td><?=$row['quantity']?></td>
  
                        <td>
<a class="btn btn-primary" href="view_pesanan.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pesanan.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_pemesanan.php?iddel=<?=$row['id']?>"

>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>
        <?php
         require_once 'tampilan/footer.php';
        
        
        ?>