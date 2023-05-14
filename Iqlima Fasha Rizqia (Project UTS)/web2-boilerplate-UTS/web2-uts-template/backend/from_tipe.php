<?php 
require_once 'dbkoneksi.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <form method="POST" action="proses_tipe.php">
  <div class="form-group row">
    <label for="tipe" class="col-4 col-form-label">Tipe Pakaian</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="tipe" name="tipe" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM tipe_pakaian";
            $rsjenis = $dbh->query($sqljenis);
        ?>
     
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
        <input type="submit" name="proses" type="submit"
        class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>