<!DOCTYPE html>
<html>
<head>
  <?php foreach($emp as $e){?>
  <title>Detail Pegawai - <?= $e['EMPLOYEE_ID']?></title>
  <?php 
    $id = $e['EMPLOYEE_ID'];
    $nama = $e['NAMA'];
  } ?>
<?php $this->load->view('page_header_2')?>

<style type="text/css">
.nav-link {
  background: #c4e7ff;
}

#skillBox{
  background: white;
  color: #d1a41d;
  width:auto;
  padding-right: 20px;
  padding-left: 20px;
  padding-top: 5px;
  padding-bottom: 5px;
  margin-left: 10px;
  margin-right: 10px;
  border-radius: 10px;
  border: 2px solid #d1a41d;
}
</style>

<div class="main">
  <div id="myNav" class="overlayForm">
    <div class="overlayBox">
      <div class="row align-bottom">
        <div class="col-sm justify-content-start">
          <?php foreach($emp as $e){?>
              <h3 class="judul" style="margin-bottom: 20px">Edit Biodata - <span style="font-weight: 400"><?= $e['JABATAN_PASTORAL']?> <?= $e['NAMA']?></h1>
          <?php } ?>
        </div>
        <div class="col-sm d-flex justify-content-end">
          <a href="<?= base_url('index.php/detail_pegawai_control/detail/')?><?= $e['EMPLOYEE_ID']?>">
            <div class="closeButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Batal</div>
          </a>
        </div>
      </div>
      <!-- content edit -->
      <?php $this->load->view('overlay/edit_biodata_user')?>
    </div>
  </div>
  <div id="myNav2" class="overlayForm">
    <div class="overlayBox">
      <div class="row align-bottom">
        <div class="col-sm justify-content-start">
          <?php foreach($emp as $e){?>
              <h3 class="judul" style="margin-bottom: 20px">Edit Keuangan - <span style="font-weight: 400"><?= $e['JABATAN_PASTORAL']?> <?= $e['NAMA']?></h1>
          <?php } ?>
        </div>
        <div class="col-sm d-flex justify-content-end">
          <a href="<?= base_url('index.php/detail_pegawai_control/detail/')?><?= $e['EMPLOYEE_ID']?>">
            <div class="closeButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Batal</div>
          </a>
        </div>
      </div>
      <!-- content edit -->
      <?php $this->load->view('overlay/edit_keuangan_user')?>
    </div>
  </div>
  <div id="myNav3" class="overlayForm">
    <div class="overlayBox">
      <div class="row align-bottom">
        <div class="col-sm justify-content-start">
          <?php foreach($emp as $e){?>
              <h3 class="judul" style="margin-bottom: 20px">Edit Asuransi dan Kesehatan - <span style="font-weight: 400"><?= $e['JABATAN_PASTORAL']?> <?= $e['NAMA']?></h1>
          <?php } ?>
        </div>
        <div class="col-sm d-flex justify-content-end">
          <a href="<?= base_url('index.php/detail_pegawai_control/detail/')?><?= $e['EMPLOYEE_ID']?>">
            <div class="closeButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Batal</div>
          </a>
        </div>
      </div>
      <!-- content edit -->
      <?php $this->load->view('overlay/edit_kesehatan_user')?>
    </div>
  </div>
  <div id="myNav4" class="overlayForm">
    <div class="overlayBox">
      <div class="row align-bottom">
        <div class="col-sm justify-content-start">
          <?php foreach($emp as $e){?>
              <h3 class="judul" style="margin-bottom: 20px">Edit Keluarga - <span style="font-weight: 400"><?= $e['JABATAN_PASTORAL']?> <?= $e['NAMA']?></h1>
          <?php } ?>
        </div>
        <div class="col-sm d-flex justify-content-end">
          <a href="<?= base_url('index.php/detail_pegawai_control/detail/')?><?= $e['EMPLOYEE_ID']?>">
            <div class="closeButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Batal</div>
          </a>
        </div>
      </div>
      <!-- content edit -->
      <?php $this->load->view('overlay/edit_keluarga_user')?>
    </div>
  </div>
  <div class="container" style="width: 100%">
    <?php foreach($emp as $e){?>
    <div class="row">
      <div class="col-sm d-flex justify-content-start">
        <h1 class="judul">Detail Pegawai - <span style="font-weight: 400"><?= $e['JABATAN_PASTORAL']?> <?= $e['NAMA']?></span></h1>
      </div>
      <div class="col-sm d-flex justify-content-end align-items-end">
        <p style="font-size: 14px;">Update Terakhir: <?= $e['UPDATE_TERAKHIR']?></p>
      </div>
    </div>
    <?php } ?>
  </div>
  <div class="box">
    <div style="margin-bottom: 20px">
      <ul class="nav nav-pills nav-justified" role="tablist">
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link active" data-toggle="tab" href="#biodata" role="tab" aria-selected="true">Biodata</a>
        </li>
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link" data-toggle="tab" href="#keuangan" role="tab" aria-selected="false">Keuangan</a>
        </li>
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link" data-toggle="tab" href="#asuransi" role="tab" aria-selected="false">Asuransi dan Kesehatan</a>
        </li>
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link" data-toggle="tab" href="#keluarga" role="tab" aria-selected="false">Keluarga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#absensi" role="tab" aria-selected="false">Absensi dan Kehadiran</a>
        </li>
      </ul>
    </div>
    <div class="tab-content">
      <div style="margin-top:30px" class="tab-pane active" id="biodata" role="tabpanel">
        <div class="row align-bottom">
          <div class="col-sm justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">Biodata</h1>
          </div>
          <div class="col-sm d-flex justify-content-end">
            <a>
              <div onclick="openNav()" class="addButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Edit Biodata Pegawai</div>
            </a>
          </div>
        </div>
        <?php foreach($emp as $e){?>
          <table class="table table-striped" style="width: 100%;">
          <tbody>
            <tr>
              <td class="judulin">Nama Pegawai</td>
              <td>:</td>
              <td class="isiKolom"><strong><?= $e['JABATAN_PASTORAL']?> <?= $e['NAMA']?></strong></td>
            </tr>
            
            <?php if($e['STATUS_KEPEGAWAIAN']=="Aktif"){?>
              
              <tr>
                <td>Status Kepegawaian</td>
                <td>:</td>
                <td style="background: #49D198; color:white; font-weight: 600"><?= $e['STATUS_KEPEGAWAIAN']?></td>
              </tr>
              <tr>
                <td>Tanggal Bergabung</td>
                <td>:</td>
                <td><?= $e['TANGGAL_BERGABUNG_PEGAWAI']?></td>
              </tr>
            <?php } elseif ($e['STATUS_KEPEGAWAIAN']=="Non-Aktif"){?>
              <tr>
                <td>Status Kepegawaian</td>
                <td>:</td>
                <td style="background: #f07330; color:white; font-weight: 600"><?= $e['STATUS_KEPEGAWAIAN']?></td>
              </tr>
              <tr>
                <td>Tanggal Bergabung</td>
                <td>:</td>
                <td><?= $e['TANGGAL_BERGABUNG_PEGAWAI']?></td>
              </tr>
              <tr>
                <td>Tanggal Dirumahkan</td>
                <td>:</td>
                <td><?= $e['TANGGAL_DIRUMAHKAN_PEGAWAI']?></td>
              </tr>
            <?php } else { ?>
            <div> missing </div>
            <?php }?>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><?= $e['JENIS_KELAMIN']?></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><?= $e['TANGGAL_LAHIR']?></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><?= $e['ALAMAT']?></td>
            </tr>
            <tr>
              <td>Gelar Pendidikan</td>
              <td>:</td>
              <?php if($e['GELAR_PENDIDIKAN']!=""){?>
              <td><?= $e['GELAR_PENDIDIKAN']?></td>
              <?php } else {?>
              <td class="bg-warning">Gelar Pendidikan Belum Tersedia</td>
              <?php }?>
            </tr>
            <tr>
              <td>Pendidikan Terakhir</td>
              <td>:</td>
              <td><?= $e['PENDIDIKAN_TERAKHIR']?></td>
            </tr>
            <tr>
              <td>Status Pegawai</td>
              <td>:</td>
              <td><?= $e['STATUS_PEGAWAI']?></td>
            </tr>
            <tr>
              <td>Status Pegawai Pastoral</td>
              <td>:</td>
              <td><?= $e['STATUS_PEGAWAI_PASTORAL']?></td>
            </tr>
            <tr>
              <td>Departemen</td>
              <td>:</td>
              <td><?= $e['DEPARTMENT_NAME']?></td>
            </tr>
          </tbody>
        </table>
        <div class="row align-bottom">
          <div class="col-sm justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px;margin-top: 20px">Skill Set</h1>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-md-start">
            <?php
              $ci =& get_instance();
              $ci->load->model('detail_pegawai_model');
              $data = $ci->detail_pegawai_model->get_employee_skill($e['EMPLOYEE_ID']);
              foreach ($data as $d)
            { ?>
              <div class="col-md-auto" id="skillBox"><?= $d['SKILL_NAME']?></div>
            <?php }?>
          </div>          
        </div>
        
      <?php }?>
      </div>
      <div style="margin-top:30px" class="tab-pane" id="keuangan" role="tabpanel">
        <div class="row align-bottom">
          <div class="col-sm justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">Keuangan</h1>
          </div>
          <div class="col-sm d-flex justify-content-end">
            <a>
              <div onclick="openNav2()" class="addButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Edit Keuangan Pegawai</div>
            </a>
          </div>
        </div>
        <?php foreach($emp as $e){?>
          <table class="table table-striped" style="width: 100%;">
            <tbody>
              <tr>
                <td class="judulin">Gaji Pokok</td>
                <td>:</td>
                <td class="isiKolom">Rp <?= number_format($e['POKOK_GAJI'],2,",",".")?></td>
              </tr>
              <tr>
                <td>Uang Makan Pokok</td>
                <td>:</td>
                <td>Rp <?= number_format($e['POKOK_UANG_MAKAN'],2,",",".")?></td>
              </tr>
              <tr>
                <td>Rekening BCA</td>
                <td>:</td>
                <td><?=$e['REKENING_BCA']?></td>
              </tr>
            </tbody>
          </table>
        <?php }?>
      </div>
      <div style="margin-top:30px" class="tab-pane" id="asuransi" role="tabpanel">
        <div class="row align-bottom">
          <div class="col-sm justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">Asuransi</h1>
          </div>
          <div class="col-sm d-flex justify-content-end">
            <a>
              <div onclick="openNav3()" class="addButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Edit Asuransi dan Kesehatan Pegawai</div>
            </a>
          </div>
        </div>
        <?php
          $ci =& get_instance();
          $ci->load->model('detail_pegawai_model');
          $data = $ci->detail_pegawai_model->get_insurance($id);
          if ($data == NULL)
        { ?>
          <table class="table table-striped" style="width: 100%;margin-bottom: 30px">
            <tbody>
              <tr>
                <td class="bg-warning"><strong><?= $nama?></strong> belum memiliki Asuransi</td>
              </tr>
            </tbody> 
          </table>
        <?php } else { foreach($data as $d) ?>
          <table class="table table-striped" style="width: 100%;margin-bottom: 30px">
            <tbody>
              <tr>
                <td class="judulin">Asuransi</td>
                <td>:</td>
                <td class="isiKolom"><?=$d['INSURANCE_NAME']?></td>
              </tr>
              <tr>
                <td class="judulin">Nomor Polis Pegawai</td>
                <td>:</td>
                <td class="isiKolom"><?=$d['NO_POLIS_PEGAWAI']?></td>
              </tr>
            </tbody>
          </table>
        <?php }?>
        <div class="row">
          <div class="col-sm d-flex justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">BPJS</h1>
          </div>
        </div>
        <?php
          $ci =& get_instance();
          $ci->load->model('detail_pegawai_model');
          $data = $ci->detail_pegawai_model->get_bpjs($id);
          if ($data == NULL)
        { ?>
          <table class="table table-striped" style="width: 100%;margin-bottom: 30px">
            <tbody>
              <tr>
                <td class="bg-warning"><strong><?= $nama?></strong> belum terdaftar BPJS</td>
              </tr>
            </tbody> 
          </table>
        <?php } else { foreach($data as $d) ?>
          <table class="table table-striped" style="width: 100%;">
            <tbody>
              <tr>
                <td class="judulin">Nomor BPJS</td>
                <td>:</td>
                <td class="isiKolom"><?= $d['BPJS_ID']?></td>
              </tr>
              <tr>
                <td>Kelas BPJS</td>
                <td>:</td>
                <td><?= $d['KELAS_BPJS']?></td>
              </tr>
              <tr>
                <td>Tanggal Gabung BPJS</td>
                <td>:</td>
                <td><?= $d['TANGGAL_JOIN_BPJS']?></td>
              </tr>
            </tbody>
          </table>
        <?php } ?>
      </div>
      <div style="margin-top:30px" class="tab-pane" id="keluarga" role="tabpanel">
        <div class="row align-bottom">
          <div class="col-sm justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">Pernikahan</h3>
          </div>
          <div class="col-sm d-flex justify-content-end">
            <a>
              <div onclick="openNav4()" class="addButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Edit Keluarga Pegawai</div>
            </a>
          </div>
        </div>
        <?php foreach($emp as $e){?>
          <table class="table table-striped" style="width: 100%;">
            <tbody>
              <tr>
                <td class="judulin">Status Pernikahan</td>
                <td>:</td>
                <td class="isiKolom"><?= $e['STATUS_PERNIKAHAN']?></td>
              </tr>
              <tr>
                <td>Jabatan Keluarga</td>
                <td>:</td>
                <td><?= $e['JABATAN_KELUARGA']?></td>
              </tr>
              <tr>
                <td>Nama Pasangan</td>
                <td>:</td>
                <?php if($e['NAMA_PASANGAN']!=""){?>
                <td><?= $e['NAMA_PASANGAN']?></td>
                <?php } else {?>
                <td class="bg-warning">Nama Pasangan Belum Tersedia</td>
                <?php }?>
              </tr>
              <tr>
                <td>Tanggal Pernikahan</td>
                <td>:</td>
                <?php if($e['TANGGAL_PERNIKAHAN']!=""){?>
                <td><?= $e['TANGGAL_PERNIKAHAN']?></td>
                <?php } else {?>
                <td class="bg-warning">Tanggal Pernikahan Belum Tersedia</td>
                <?php }?>
              </tr>
              <tr>
                <td>Tempat Pasangan Bekerja</td>
                <td>:</td>
                <?php if($e['TEMPAT_KERJA_PASANGAN_PEGAWAI']!=""){?>
                <td><?= $e['TEMPAT_KERJA_PASANGAN_PEGAWAI']?></td>
                <?php } else {?>
                <td class="bg-warning">Tempat Pasangan Bekerja Belum Tersedia</td>
                <?php }?>
              </tr>
              <tr>
                <td>Posisi Pekerjaan Pasangan</td>
                <td>:</td>
                <?php if($e['POSISI_PEKERJAAN_PASANGAN_PEGAWAI']!=""){?>
                <td><?= $e['POSISI_PEKERJAAN_PASANGAN_PEGAWAI']?></td>
                <?php } else {?>
                <td class="bg-warning">Posisi Pekerjaan Pasangan Belum Tersedia</td>
                <?php }?>
              </tr>
            </tbody>
          </table>
        <?php }?>
        <div class="row">
          <div class="col-sm d-flex justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">Anak</h1>
          </div>
        </div>
        <?php
          $ci =& get_instance();
          $ci->load->model('detail_pegawai_model');
          $data = $ci->detail_pegawai_model->get_child($id);
          $i = 1;
          if ($data == NULL)
        { ?>
          <table class="table table-striped" style="width:100%;margin-bottom: 30px">
            <tbody>
              <tr>
                <td class="bg-warning"><strong><?= $nama?></strong> belum memiliki Anak</td>
              </tr>
            </tbody> 
          </table>
        <?php } else { foreach($data as $d){ ?>
          <div class="row">
            <div class="col-sm d-flex justify-content-start">
              <h5 class="subJudul" style="margin-bottom: 20px">Anak Ke-<?= $i?></h1>
            </div>
          </div>
          <table class="table table-striped" style="width: auto;">
            <tbody>
              <tr>
                <td class="judulin">Nama Anak</td>
                <td>:</td>
                <td class="isiKolom"><?= $d['NAMA_CHILD']?></td>
              </tr>
              <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?= $d['TANGGAL_LAHIR_CHILD']?></td>
              </tr>
              <tr>
                <td>BPJS Orang Tua</td>
                <td>:</td>
                <td><?= $d['BPJS_ORANG_TUA']?></td>
              </tr>
              <tr>
                <td>Status Pernikahan Anak</td>
                <td>:</td>
                <td><?= $d['STATUS_PERNIKAHAN_CHILD']?></td>
              </tr>
              <tr>
                <td>Pendidikan Anak</td>
                <td>:</td>
                <td><?= $d['PENDIDIKAN_CHILD']?></td>
              </tr>
            </tbody>
          </table>
          <?php $i = $i+1;
            } ?>
        <?php } ?>
      </div>
      <div style="margin-top:30px" class="tab-pane" id="absensi" role="tabpanel">
        <div class="row align-bottom">
          <div class="col-sm justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">Absensi</h1>
          </div>
        </div>
        <div class="row align-bottom">
          <div class="col-sm justify-content-start">
            <h3 class="judul" style="margin-bottom: 20px">Absensi Meeting Online</h1>
          </div>
        </div>
      </div>
    </div>
</div>
</body>
<script type="text/javascript">
  function openNav() {
    document.getElementById("myNav").style.width = "100%";
    document.body.style.overflow = "hidden";
  }

  function openNav2() {
    document.getElementById("myNav2").style.width = "100%";
    document.body.style.overflow = "hidden";
  }

  function openNav3() {
    document.getElementById("myNav3").style.width = "100%";
    document.body.style.overflow = "hidden";
  }

  function openNav4() {
    document.getElementById("myNav4").style.width = "100%";
    document.body.style.overflow = "hidden";
  }

  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    document.body.style.overflow = "scroll";
  }
</script>

<script type="text/javascript">
  $(function(){
    $("#datepicker").datepicker({
      dateFormat:"yy-mm-dd",
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });

  $(function(){
    $("#datepicker2").datepicker({
      dateFormat:"yy-mm-dd",
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });

  $(function(){
    $("#datepicker3").datepicker({
      dateFormat:"yy-mm-dd",
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });

  $(function(){
    $("#datepicker4").datepicker({
      dateFormat:"yy-mm-dd",
      showButtonPanel: true,
      changeMonth: true,
      changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });
</script>

</html> 
