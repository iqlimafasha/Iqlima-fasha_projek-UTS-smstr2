<?php
require_once 'dbkoneksi.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="proses_pesanan.php">
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="id" name="id" type="text" class="form-control"
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" type="date" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pakaian_id" class="col-4 col-form-label">Pakaian Id</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="pakaian_id" name="pakaian_id" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="quantity" class="col-4 col-form-label">Quantity</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-o-left"></i>
          </div>
        </div> 
        <input id="quantity" name="quantity" 
        value="" type="text" class="form-control">
      </div>
    </div>
  </div>
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM pesanan";
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