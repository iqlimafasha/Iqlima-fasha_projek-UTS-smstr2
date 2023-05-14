<?php 
    require_once 'dbkoneksi.php';
    require_once 'tampilan/header.php';
    require_once 'tampilan/menu.php';
?>
<?php 
   $sql = "SELECT * FROM tipe_pakaian";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="from_tipe.php" role="button">Create Tipe Pakaian</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tipe</th>
    
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['tipe']?></td>
  
                        <td>
<a class="btn btn-primary" href="view_tipe.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="edit_tipe.php?edit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_tipe.php?iddel=<?=$row['id']?>">Delete</a>
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