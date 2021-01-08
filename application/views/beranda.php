<!DOCTYPE html>
<html>
<head>
  <title>Beranda - Data Pegawai</title>

<?php $this->load->view('page_header')?>

<div class="main">
  <div class="container" style="width: 100%">
    <div class="row">
      <div class="col-sm d-flex justify-content-start">
        <h1 class="judul">Beranda</h1>
      </div>
      <div class="col-sm align-self-center d-flex justify-content-end">
        <a href="<?= base_url('index.php/beranda_control/tambah_pegawai')?>">
          <div class="addButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px"><img src="<?= base_url('assets/img/addIcon.png')?>" style="margin-right: 10px">Tambah Data Pegawai</div>
        </a>
        <a href="<?= base_url('index.php/beranda_control/buat_laporan_custom')?>">
          <div class="laporanButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px"><img src="<?= base_url('assets/img/addIcon.png')?>" style="margin-right: 10px">Laporan Custom</div>
        </a>
      </div>
    </div>
  </div>
  
  <div class="box">
    <p class="box-judul">Data Pegawai
    <table id="example" class="table table-striped">
      <thead class="thead-dark">
        <tr>
        <th>No KTP</th>
        <th>Nama Pegawai</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Usia</th>
        <th>Department</th>
        <th>Gaji Pokok (Rp)</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($emp as $e){?>
        <tr>
        <th><?= $e['EMPLOYEE_ID']?></th>
        <th><a class="btnEmpDetail" href="<?= base_url('index.php/detail_pegawai_control/detail/')?><?= $e['EMPLOYEE_ID']?>"><?= $e['JABATAN_PASTORAL']?> <?= $e['NAMA']?></a></th>
        <th><?= $e['JENIS_KELAMIN']?></th>
        <th><?= $e['TEMPAT_LAHIR']?></th>
        <th><?= $e['TANGGAL_LAHIR']?></th>
        <th><?= $e['USIA']?></th>
        <th><?= $e['DEPARTMENT_NAME']?></th>
        <th><?= number_format($e['POKOK_GAJI'],2,",",".")?></th>
        </tr>
        <?php }?>
      </tbody>
  </table>

  </div>
</div>
   
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable( {
          dom: 'Bfrtip',
          buttons: [
            {
                extend: 'print',
                text: 'Print Semua',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                },
                className: "btnPrintAll"
            },
            {
                extend: 'print',
                text: 'Print Baris Terpilih',
                className: "btnPrintSel"
            },
            {
                extend: 'csv',
                text: 'CSV',
                className: "btnCsv"
            }
          ],
          select: true,
        });
    } );
</script>
</body>
</html> 
