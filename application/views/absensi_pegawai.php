<!DOCTYPE html>
<html>
<head>
  <title>Absensi Pegawai</title>

<?php $this->load->view('page_header')?>

<div class="main">
  <div class="container" style="width: 100%">
    <div class="row">
      <div class="col-sm d-flex justify-content-start">
        <h1 class="judul">Absensi Pegawai</h1>
      </div>
      <div class="col-sm align-self-center d-flex justify-content-end">
        <a href="<?= base_url('index.php/absensi_pegawai_control/tambah_absensi_pegawai')?>">
          <div class="addButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px"><img src="<?= base_url('assets/img/addIcon.png')?>" style="margin-right: 10px">Tambah Data Absensi Pegawai</div>
        </a>
      </div>
    </div>
  </div>  
</body>
</html> 
