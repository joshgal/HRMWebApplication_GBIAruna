<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Pegawai</title>
  <style type="text/css">
    #form{
      font-family: Poppins;
      font-style: normal;
      font-size: 14px;
      line-height: 21px;
    }
    .nav-link {
      background: #c4e7ff;
    }

    .laporanButton2{
      height: 40px;
      width: 100%;
      border-style: none;
      background: #1078CA;
      text-align: center;
      border-radius: 10px;
      padding-bottom: 20px;
      text-decoration: none;
      color: #ffffff;
      font-family: Poppins;
      font-style: normal;
      font-weight: 600;
      font-size: 12px;
      line-height: 18px; 
    }

    .laporanButton2:hover{
      background:#115E9A;
    }
  </style>

<?php $this->load->view('page_header_2')?>

<div class="main">
  <div class="container" style="width: 100%">
    <div class="row">
      <div class="col-sm d-flex justify-content-start">
        <h1 class="judul">Tambah Data Pegawai</h1>
      </div>
    </div>
  </div>

  <div class="box">

    <div style="margin-bottom: 40px">
      <ul class="nav nav-pills nav-justified" role="tablist">
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link active" data-toggle="tab" href="#biodata" role="tab" aria-selected="true">Biodata</a>
        </li>
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link" data-toggle="tab" href="#keuangan" role="tab" aria-selected="false">Keuangan</a>
        </li>
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link" data-toggle="tab" href="#kesehatan" role="tab" aria-selected="false">Asuransi dan Kesehatan</a>
        </li>
        <li class="nav-item" style="margin-right: 1px">
          <a class="nav-link" data-toggle="tab" href="#keluarga" role="tab" aria-selected="false">Keluarga</a>
        </li>
      </ul>
    </div>

    <form method="post" action="" style="margin-top: 20px">
    <div class="tab-content">
      <div class="tab-pane active" id="biodata">
        <h3 class="judul" style="margin-bottom: 30px;">Biodata</h3>
          <div class="row">
            <div class="col">
              <label><strong>Status Kepegawaian</strong></label>
              <select id="form" name="status_kepegawaian" class="form-control">
                <option value="Aktif" onclick="hide_keluar()">Aktif</option>
                <option value="Non-Aktif" onclick="show_keluar()">Non-Aktif</option>
              </select>
            </div>
            <div class="col">
              <label><strong>Tanggal Join Pegawai</strong></label>
              <input id="form" type="text" name="tanggal_bergabung_pegawai" class="form-control" placeholder="Masukkan Tanggal Masuk Pegawai">
            </div>
            <div class="col" id="tanggal-keluar" style="display:none">
              <label><strong>Tanggal Dirumahkan Pegawai</strong></label>
              <input id="form" type="text" name="tanggal_keluar_pegawai" class="form-control" placeholder="Masukkan Tanggal dirumahakan Pegawai">
            </div>
          </div>

          <div style="width: 100%;height: 2px;background: #d1d1d1;margin-top: 50px; margin-bottom: 50px"></div>
          <div class="row">
            <div class="col">
              <label><strong>Nomor KTP</strong></label>
              <input id="form" type="text" name="employee_id" class="form-control" placeholder="Masukkan Nomor KTP Pegawai">
            </div>
            <div class="col">
              <label><strong>Nama Depan</strong></label>
              <input id="form" type="text" name="first_name" class="form-control" placeholder="Masukkan Nama Depan Pegawai">
            </div>
            <div class="col">
              <label><strong>Nama Belakang</strong></label>
              <input id="form" type="text" name="last_name" class="form-control" placeholder="Masukkan Nama Belakang Pegawai">
            </div>
          </div>
          <div class="row" style="margin-top: 50px">
            <div class="col">
              <label><strong>Jabatan Pastoral</strong> - Opsional</label>
              <select id="form" name="jabatan_pastoral" class="form-control">
                <option value="" selected>[Kosong]</option>
                <option value="Pdt.">Pdt.</option>
                <option value="Pdm.">Pdm.</option>
                <option value="Pdp.">Pdp.</option>
              </select>
            </div>
            <div class="col">
              <label><strong>Jenis Kelamin</strong></label>
              <select id="form" name="jenis_kelamin" class="form-control">
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-Laki">Laki-Laki</option>
              </select>
            </div>
            <div class="col ui-widget">
              <label id="form"><strong>Tanggal Lahir</strong></label>
              <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker" type="text" name="tanggal_lahir" class="form-control"  placeholder="Masukkan Tanggal Lahir Pegawai">
            </div>
          </div>
          
          <div style="width: 100%;height: 2px;background: #d1d1d1;margin-top: 50px"></div>
          <div class="row" style="margin-top: 50px">
            <div class="col">
              <label><strong>Pendidikan Terakhir</strong></label>
              <select id="form" name="pendidikan_terakhir" class="form-control">
                <option value="Tidak Sekolah">Tidak Sekolah</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1/ D4">S1/ D4</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
              </select>
            </div>
            <div class="col">
              <label><strong>Gelar Pendidikan</strong> - Opsional</label>
              <input id="form" type="text" name="gelar_pendidikan" class="form-control" placeholder="Masukkan Gelar Pendidikan (contoh: S.Kom.,M.Kom.)">
            </div>
          </div>
          <div class="row" style="margin-top: 50px">
            <div class="col">
              <label><strong>Status Pegawai</strong></label>
              <select id="form" name="status_pegawai" class="form-control">
                <option value="FULLTIMER">FULLTIMER</option>
                <option value="PARTIMER">PARTIMER</option>
                <option value="VOLUNTEER">VOLUNTEER</option>
              </select>
            </div>
            <div class="col">
              <label><strong>Status Pegawai Pastoral</strong></label>
              <select id="form" name="status_pegawai" class="form-control">
                <option value="Pastoral">Pastoral</option>
                <option value="Admin">Admin</option>
              </select>
            </div>
          </div>
          
          <div class="row" style="margin-top: 40px">
            <div class="col">
              <label><strong>Departmen</strong></label>
              <select id="form" name="status_pegawai" class="form-control">
                <?php
                  $ci =& get_instance();
                  $ci->load->model('detail_pegawai_model');
                  $data = $ci->detail_pegawai_model->get_departments();
                  foreach($data as $d)
                { ?>
                <option value="<?= $d['DEPARTMENT_NAME']?>"><?= $d['DEPARTMENT_NAME']?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div style="width: 100%;height: 2px;background: #d1d1d1;margin-top: 50px"></div>

          <?php
            $ci =& get_instance();
            $ci->load->model('detail_pegawai_model');
            $data2 = $ci->detail_pegawai_model->get_all_skill();
            $id_skill = 1;
            foreach ($data2 as $d) {
              $max = $d['SKILL_ID'];
              if ($id_skill < $max){
                $id_skill = $d['SKILL_ID']+1;
              }
            }
            $n = 1;
          ?>
          <div class="row">
            <div class="col">
              <div id="insert-form-skill"></div>
              <div class="laporanButton2" id="btn-tambah-skill" style="margin-top: 30px;padding-top: 10px">Tambah Keahlian Pegawai</div>
              <input type="hidden" id="jumlah-form-keahlian" value="<?= $n?>">
              <input type="hidden" id="jumlah-keahlian" value="<?= $id_skill?>">
            </div>
          </div>
      </div>

      <div class="tab-pane" id="keuangan">
        <h3 class="judul" style="margin-bottom: 30px;">Keuangan</h3>
          <div class="row" style="margin-top: 30px">
            <div class="col">
              <label><strong>Gaji Pokok</strong> - Rp</label>
              <input id="form" type="text" name="pokok_gaji" class="form-control" placeholder="Masukkan Gaji Pokok Pegawai">
            </div>
            <div class="col">
              <label><strong>Uang Makan</strong> - Rp</label>
              <input id="form" type="text" name="uang_makan" class="form-control" placeholder="Masukkan Uang Makan Pegawai">
            </div>
          </div> 

          <div class="row" style="margin-top: 40px">
            <div class="col">
              <label><strong>Rekening BCA</strong></label>
              <input id="form" type="text" name="rekening_bca" class="form-control" placeholder="Masukkan Rekening BCA Pegawai">
            </div>
          </div>
      </div>

      <div class="tab-pane" id="kesehatan">
        <h3 class="judul" style="margin-bottom: 30px;">Asuransi</h3>
          <div class="row">
            <div class="col">
              <label><strong>Asuransi</strong> - Opsional</label>
              <select id="form" name="insurance_id" class="form-control">
                <option value="">[Tidak Memiliki Asuransi]</option>
                <?php
                  $ci =& get_instance();
                  $ci->load->model('detail_pegawai_model');
                  $data = $ci->detail_pegawai_model->get_all_insurance();
                  foreach($data as $f)
                { ?>
                <option value="<?= $f['INSURANCE_ID']?>"><?= $f['INSURANCE_NAME']?></option>
                <?php } ?>
              </select>
            </div>
            <div class="col">
              <label><strong>No Polis Pegawai</strong> - Opsional</label>
              <input type="text" name="no_polis_pegawai" class="form-control" placeholder="Masukkan Nomor Polis Pegawai">
            </div>
          </div>
          <div style="width: 100%;height: 2px;background: #d1d1d1;margin-top: 50px"></div>
          <h3 class="judul" style="margin-bottom: 30px;margin-top: 30px">BPJS</h3>
          <div class="row" style="margin-top: 40px">
            <div class="col">
              <label><strong>Nomor BPJS</strong> - Opsional</label>
              <input id="form" type="text" name="bpjs_id" class="form-control" placeholder="Masukkan Nomor BPJS" placeholder="Masukkan Nomor BPJS Pegawai">
            </div>
          </div>
          <div class="row" style="margin-top: 40px">
            <div class="col">
              <label><strong>Kelas BPJS</strong> - Opsional</label>
              <select id="form" name="kelas_bpjs" class="form-control">
                <option value="" selected>[KOSONG]</option>
                <option value="1">Kelas 1</option>
                <option value="2">Kelas 2</option>
                <option value="3">Kelas 3</option>
              </select>
            </div>
            <div class="col ui-widget">
              <label id="form"><strong>Tanggal Bergabung BPJS</strong> - Opsional</label>
              <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker2" type="text" name="tanggal_join_bpjs" class="form-control" placeholder="Masukkan Tanggal Bergabung Bpjs">
            </div>
          </div>
      </div>

      <div class="tab-pane" id="keluarga">
        <h3 class="judul" style="margin-bottom: 30px">Pernikahan</h3>

        <div class="row" style="margin-top: 30px">
          <div class="col">
            <label><strong>Status Pernikahan</strong></label>
            <select id="form" name="status_pernikahan" class="form-control">
              <option value="Menikah">Menikah</option>
              <option value="Single">Single</option>
              <option value="Janda">Janda</option>
              <option value="Duda">Duda</option>
            </select>
          </div>
          <div class="col ui-widget">
            <label id="form" style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;"><strong>Tanggal Pernikahan</strong> - Opsional</label>
            <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker3" type="text" name="tanggal_pernikahan" class="form-control" placeholder="Masukkan Tanggal Pernikahan Pegawai">
          </div>
        </div>

        <div class="row" style="margin-top: 40px">
          <div class="col">
            <label><strong>Jabatan Keluarga</strong></label>
            <select id="form" name="jabatan_keluarga" class="form-control">
              <option value="Belum Menikah">Belum Menikah</option>
              <option value="Suami">Suami</option>
              <option value="Istri">Istri</option>
              <option value="Pernah Menikah">Pernah Menikah</option>
            </select>
          </div>
          <div class="col">
            <label><strong>Nama Pasangan</strong> - Opsional</label>
            <input id="form" type="text" name="nama_pasangan" class="form-control" placeholder="Masukkan Nama Pasangan Pegawai">
          </div>
        </div> 

        <div class="row" style="margin-top: 40px">
          <div class="col">
            <label><strong>Tempat Pasangan Bekerja</strong> - Opsional</label>
            <input id="form" type="text" name="tempat_kerja_pasangan_pegawai" class="form-control" placeholder="Masukkan Tempat Pasangan Bekerja">
          </div>
          <div class="col">
            <label><strong>Posisi Pekerjaan Pasangan</strong> - Opsional</label>
            <input id="form" type="text" name="posisi_pekerjaan_pasangan_pegawai" class="form-control" placeholder="Masukkan Posisi Pekerjaan Pasangan">
          </div>
        </div> 

       
        <?php
          $ci =& get_instance();
          $ci->load->model('detail_pegawai_model');
          $data = $ci->detail_pegawai_model->get_all_child();
          $id_child = 1;
          foreach ($data as $d) {
            $id_child = $d['CHILD_ID']+1;
          }
        ?>
        <div id="tambah-anak" style="display: none">
          <div style="width: 100%;height: 2px;background: #d1d1d1;margin-top: 50px; margin-bottom: 50px"></div>
          <div class="row align-bottom">
            <div class="col-sm justify-content-start">
                <h3 class="judul" style="margin-bottom: 20px">Data Anak</h3>
            </div>
            <div class="col-sm d-flex justify-content-end">
              <div id="btn-reset-form" class="closeButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Batal</div>
            </div>
          </div>
        </div>
        <div id="insert-form"></div>
        <div class="laporanButton2" id="btn-tambah-form" style="margin-top: 30px;padding-top: 10px">Tambah Data Anak</div>
        <input type="hidden" id="jumlah-form" value="<?= $id_child?>">
        <div class="row" style="margin-top: 20px">
          <div class="col">
              <input id="simpan-anak" type="submit" class="editButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px; text-align: center; display:block" value="Simpan Perubahan">
          </div>
        </div>

      </div>
    </div>
    </form>
  </div>
</body>
<script type="text/javascript">
  function show_keluar(){
    document.getElementById("tanggal-keluar").style.display = "block";
  }

  function hide_keluar(){
    document.getElementById("tanggal-keluar").style.display = "none";
  }

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

  $(document).ready(function(){
    $("#btn-tambah-form").click(function(){
      var jumlah = parseInt($("#jumlah-form").val());
      $("#insert-form").append(
        "<div class='row align-bottom'>"+
        "<div class='col-sm justify-content-start'>"+
        "<h5 class='subJudul' style='margin-bottom: 20px; margin-top: 10px; color: #D61C22'>Form Data Anak Tambahan</h1>"+
        "</div>"+
        "</div>"+
        "<div class='row'>"+
        "<input type='text' HIDDEN name='child_id[]'' value='"+ jumlah +"' class='form-control'>"+
        "<div class='col'>"+
        "<label><strong>Nama Anak</strong></label>"+
        "<input id='form' type='text' name='nama_child[]'' class='form-control' placeholder='Masukkan Nama Lengkap Anak' required>"+
        "</div>"+
        "</div>"+ 
        "<div class='row' style='margin-top: 40px'>"+
        "<div class='col ui-widget'>"+
        "<label style='font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;''><strong>Tanggal Lahir Anak</strong></label>"+
        "<input style='font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;'' type='text' name='tanggal_lahir_child[]'' class='form-control' placeholder='Masukkan Tanggal Lahir Anak' required>" +
        "</div>"+
        "<div class='col'>"+
        "<label><strong>BPJS Orang Tua</strong></label>"+
        "<select id='form' name='bpjs_orang_tua[]'' class='form-control' required>"+
        "<option value='Ikut'>Ikut</option>"+
        "<option value='Mandiri'>Mandiri</option>"+
        "</select>"+
        "</div>"+
        "</div>"+
        "<div style='width: 100%;height: 2px;background: #d1d1d1;margin-top: 50px; margin-bottom: 50px'></div>"
        );
      jumlah = jumlah+1;
      $("#jumlah-form").val(jumlah); 
      $("#tambah-anak").css("display", "block"); 
    });
    $("#btn-reset-form").click(function(){
      $("#insert-form").html("");
      $("#tambah-anak").css("display", "none");
    });
    $("#btn-tambah-skill").click(function(){
      var jumlah_skill = parseInt($("#jumlah-form-keahlian").val());
      var jumlah_ahli = parseInt($("#jumlah-keahlian").val());
      $("#insert-form-skill").append(
        "<div class='row' style='margin-top: 40px'>"+
        "<div class='col'>"+
        "<input type='text' name='skill_id[]' class='form-control' value='"+ jumlah_ahli +"' readonly hidden>"+
        "<label><strong>Keahlian Pegawai - "+ jumlah_skill +"</strong></label>"+
        "<input id='form' type='text' name='skill_name[]' class='form-control' placeholder='Masukkan Keahlian Pegawai'>"+
        "</div>"+
        "</div>"
      );
      jumlah_skill = jumlah_skill +1;
      jumlah_ahli = jumlah_ahli +1;
      $("#jumlah-form-keahlian").val(jumlah_skill);
      $("#jumlah-keahlian").val(jumlah_ahli);
      if ($("#jumlah-form-keahlian").val()>3){
        $("#btn-tambah-skill").css("display", "none");
      }
    });
  });
</script>
</html> 