<!DOCTYPE html>
<html>
<head>
  <title>Laporan Custom</title>

<?php $this->load->view('page_header_2')?>

<div class="main">
  <div class="container" style="width: 100%">
    <div class="row">
      <div class="col-sm d-flex justify-content-start">
        <h1 class="judul">Laporan Custom</h1>
      </div>
    </div>
  </div>

  <form method="post" action="<?= base_url('index.php/beranda_control/submit_laporan_item')?>">
    <div class="box">
      <p class="subJudul">Daftar Tabel</p>
      <div class="row">
        <div class="col">
          <label id="judul" style="margin-top: 10px">Pilih Tabel</label>
          <select class="custom-select" id="pilih-tabel" name="pilihan_tabel">
            <option value="none" selected>Silahkan pilih tabel yang hendak diekspor</option>
            <option disabled>─────────────────────────────────────────────────────────────────────────────────────────────────────</option>
            <option value="employees">Pegawai</option>
            <option value="child">Anak</option>
            <option value="presence">Kehadiran</option>
          </select>
        </div>
      </div>
      <input type="button" id="btn-table" class="editButton" onclick="get_nama_tabel()" style="margin-top: 20px;padding-top: 10px" value="Apply"\>
    </div>
  
    <div class="box" id="tab-pegawai" style="display: none">
      <h3 class="subJudul">Kolom Pegawai</h3>
      <div class="row">
        <div class="col">
          <label id="judul">Pilih Tabel kolom</label>
          <?php
          $ci =& get_instance();
          $ci->load->model('beranda_model');
          $data = $ci->beranda_model->get_employees_features();
          foreach ($data as $d) { ?>
          <?php if ($d == "FIRST_NAME"){?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="kolom[]" value='concat(FIRST_NAME," ", LAST_NAME) as NAMA_LENGKAP'>
            <label class="form-check-label">
              NAMA_LENGKAP
            </label>
          </div>
          <?php } elseif ($d == "LAST_NAME"){} 
          elseif ($d == "EMPLOYEE_ID"){ ?>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="kolom[]" value='<?= $d?>'>
              <label class="form-check-label">
                NOMOR_KTP
              </label>
            </div>
          <?php } else {?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="kolom[]" value="<?= $d?>">
            <label class="form-check-label">
              <?= $d?>
            </label>
          </div>
          <?php } ?>
          <?php } ?>
          
          <!-- <input type="checkbox" name='kolom[]' value="jenis_kelamin">Jenis Kelamin<br/>
          <input type="checkbox" name='kolom[]' value="tempat_lahir">Tempat Lahir<br/>
          <input type="checkbox" name='kolom[]' value="tanggal_lahir">Tanggal Lahir<br/>
          <input type="checkbox" name='kolom[]' value="alamat">Alamat<br/>
          <input type="checkbox" name='kolom[]' value="status_pernikahan">Status Pernikahan<br/> -->
        </div>
      </div>
      <input type="submit" id="btn-table" class="editButton" style="margin-top: 20px;padding-top: 10px" value="Apply"\>
    </div>
    <div class="box" id="tab-anak" style="display: none">
      <h3 class="subJudul">Kolom Anak</h3>
      <div class="row">
        <div class="col">
          <label id="judul">Pilih Tabel kolom</label>
          <?php
          $ci =& get_instance();
          $ci->load->model('beranda_model');
          $data = $ci->beranda_model->get_child_features();
          foreach ($data as $d){ ?>
          <?php if ($d == "NAMA_ORANG_TUA"){?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="kolom[]" value='concat(employees.FIRST_NAME," ", employees.LAST_NAME) as NAMA_ORANG_TUA'>
            <label class="form-check-label">
              <?= $d?>
            </label>
          </div>
          <?php } else {?>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="kolom[]" value="<?= $d?>">
            <label class="form-check-label">
              <?= $d?>
            </label>
          </div>
          <?php } ?>
          <?php } ?>
        </div>
      </div>
      <input type="submit" id="btn-table" class="editButton" style="margin-top: 20px;padding-top: 10px" value="Apply"\>
    </div>
    <div class="box" id="tab-kehadiran" style="display: none">
      <h3 class="subJudul">Kolom Kehadiran</h3>
      <div class="row">
        <div class="col">
          <label id="judul">Pilih Tabel kolom</label>
          
        </div>
      </div>
      <input type="submit" id="btn-table" class="editButton" style="margin-top: 20px;padding-top: 10px" value="Apply"\>
    </div>  
  </form>

  

</body>

<script type="text/javascript">
  function get_nama_tabel(){
    var tabel = document.getElementById("pilih-tabel").value;
    if(tabel == "none"){
      alert("Silahkan pilih tabel yang hendak dieksport");
    } else {
      if (tabel == "employees"){
        document.getElementById("tab-pegawai").style.display = "block";
      } else if (tabel == "child"){
        document.getElementById("tab-anak").style.display = "block";
      } else if (tabel == "presence"){
        document.getElementById("tab-kehadiran").style.display = "block";
      } 
      document.getElementById("btn-table").setAttribute("disabled", "disabled");
      document.getElementById("btn-table").style.cssText = "display: none";
    }
  }
</script>
</html>   