<?php 
    require_once 'dbkoneksi.php';
    require_once 'tampilan/header.php';
    require_once 'tampilan/menu.php';
?>
<?php 
   $sql = "SELECT * FROM pakaian";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="from_pakaian.php" role="button">Create Tipe Pakaian</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama Pakaian</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Tipe Pakaian id</th>
    
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor =1;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor++?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['ukuran']?></td>
                        <td><?=$row['warna']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['tipe_pakaian_id']?></td>
                        
                        <td>
<a class="btn btn-primary" href="view_pakaian.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_pakaian.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_pakaian.php?iddel=<?=$row['id']?>">Delete</a>
</td>
                    </tr>
                <?php   
                } 
                ?>
            </tbody>
        </table>
        <?php
         require_once 'tampilan/footer.php';
        ?>