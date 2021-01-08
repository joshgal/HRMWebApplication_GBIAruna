<!DOCTYPE html>
<html>
<head>
  <title>Uang Makan Pegawai</title>

<?php $this->load->view('page_header')?>

<div class="main">
  <div class="container" style="width: 100%">
    <div class="row">
      <div class="col-sm d-flex justify-content-start">
        <h1 class="judul">Uang Makan Pegawai</h1>
      </div>
      <div class="col-sm align-self-center d-flex justify-content-end">
        <a href="<?= base_url('index.php/uang_makan_control/tambah_uang_makan')?>">
          <div class="addButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px"><img src="<?= base_url('assets/img/addIcon.png')?>" style="margin-right: 10px">Tambah Periode Uang Makan Pegawai</div>
        </a>
      </div>
    </div>
  </div>  
</body>
</html> 
