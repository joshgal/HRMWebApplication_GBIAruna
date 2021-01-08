<form method="post" action="<?= base_url('index.php/detail_pegawai_control/edit_pernikahan_pegawai')?>" style="margin-top: 20px">
    <?php foreach($emp as $e){?>
    <input type="text" class="form-control" name="id" hidden value="<?= $e['EMPLOYEE_ID']?>"/>
    <div class="row" style="margin-top: 30px">
      <div class="col">
        <label><strong>Status Pernikahan</strong></label>
        <select id="form" name="status_pernikahan" class="form-control">
          <option value="Menikah" <?php if($e['STATUS_PERNIKAHAN'] == "Menikah") { echo "SELECTED"; } ?>>Menikah</option>
          <option value="Single" <?php if($e['STATUS_PERNIKAHAN'] == "Single") { echo "SELECTED"; } ?>>Single</option>
          <option value="Janda" <?php if($e['STATUS_PERNIKAHAN'] == "Janda") { echo "SELECTED"; } ?>>Janda</option>
          <option value="Duda" <?php if($e['STATUS_PERNIKAHAN'] == "Duda") { echo "SELECTED"; } ?>>Duda</option>
        </select>
      </div>
      <div class="col">
        <label><strong>Jabatan Keluarga</strong></label>
        <select id="form" name="jabatan_keluarga" class="form-control">
          <option value="Belum Menikah" <?php if($e['JABATAN_KELUARGA'] == "Belum Menikah") { echo "SELECTED"; } ?>>Belum Menikah</option>
          <option value="Suami" <?php if($e['JABATAN_KELUARGA'] == "Suami") { echo "SELECTED"; } ?>>Suami</option>
          <option value="Istri" <?php if($e['JABATAN_KELUARGA'] == "Istri") { echo "SELECTED"; } ?>>Istri</option>
          <option value="Pernah Menikah" <?php if($e['JABATAN_KELUARGA'] == "Pernah Menikah") { echo "SELECTED"; } ?>>Pernah Menikah</option>
        </select>
      </div>
      <div class="col ui-widget">
        <label style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;"><strong>Tanggal Pernikahan</strong> - Opsional</label>
        <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker3" type="text" name="tanggal_pernikahan" class="form-control" value="<?= $e['TANGGAL_PERNIKAHAN']?>" placeholder="Masukkan Tanggal Pernikahan Pegawai">
      </div>
    </div> 

    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Nama Pasangan</strong> - Opsional</label>
        <input id="form" type="text" name="nama_pasangan" class="form-control" value="<?= $e['NAMA_PASANGAN']?>" placeholder="Masukkan Nama Pasangan Pegawai">
      </div>
      <div class="col">
        <label><strong>Tempat Pasangan Bekerja</strong> - Opsional</label>
        <input id="form" type="text" name="tempat_kerja_pasangan_pegawai" class="form-control" value="<?= $e['TEMPAT_KERJA_PASANGAN_PEGAWAI']?>" placeholder="Masukkan Tempat Pasangan Bekerja">
      </div>
      <div class="col">
        <label><strong>Posisi Pekerjaan Pasangan</strong> - Opsional</label>
        <input id="form" type="text" name="posisi_pekerjaan_pasangan_pegawai" class="form-control" value="<?= $e['POSISI_PEKERJAAN_PASANGAN_PEGAWAI']?>" placeholder="Masukkan Posisi Pekerjaan Pasangan">
      </div>
    </div>

    <div class="row" style="margin-top: 40px">
      <div class="col">
          <input type="submit" class="editButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px; text-align: center" value="Simpan Perubahan">
      </div>
    </div>
    
    <?php } ?>
</form>
<form method="post" action="<?= base_url('index.php/detail_pegawai_control/edit_anak_pegawai')?>">
  <?php foreach($emp as $e){?>
    <hr style="margin-top: 40px">
    
    <?php
      $ci =& get_instance();
      $ci->load->model('detail_pegawai_model');
      $data = $ci->detail_pegawai_model->get_child($e['EMPLOYEE_ID']);
      $i = 1;
      if ($data == NULL)
    { ?>
      <div class="row" style="margin-top: 40px">
        <div class="col">
          <table class="table table-striped" style="width:100%;margin-bottom: 30px">
            <tbody>
              <tr>
                <td class="bg-warning"><strong><?= $e['NAMA']?></strong> belum memiliki Anak</td>
              </tr>
            </tbody> 
          </table>
        </div>
      </div>
    <?php } else { foreach($data as $d){ ?>
      <div class="row align-bottom">
        <div class="col-sm justify-content-start">
              <h5 class="subJudul" style="margin-bottom: 20px; color: #D61C22">Anak Ke-<?= $i?></h1>
        </div>
        <div class="col-sm d-flex justify-content-end">
          <a href="<?= site_url('detail_pegawai_control/delete_anak_pegawai/')?><?= $d['CHILD_ID']?>">
            <div class="closeButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px">Hapus</div>
          </a>
        </div>
      </div>

      <div class="row">
        <input type="text" class="form-control" name="id" hidden value="<?= $e['EMPLOYEE_ID']?>"/>
        <input type="text" HIDDEN name="child_id[]" class="form-control" value="<?= $d['CHILD_ID']?>" readonly="true">
        <div class="col">
          <label><strong>Nama Anak</strong></label>
          <input id="form" type="text" name="nama_child[]" class="form-control" value="<?= $d['NAMA_CHILD']?>">
        </div>
      </div>

      <div class="row" style="margin-top: 40px;margin-bottom: 40PX">
        <div class="col ui-widget">
          <label style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;"><strong>Tanggal Lahir Anak</strong></label>
          <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker4" type="text" name="tanggal_lahir_child[]" class="form-control" value="<?= $d['TANGGAL_LAHIR_CHILD']?>">
        </div>
        <div class="col">
          <label><strong>BPJS Orang Tua</strong></label>
          <select id="form" name="bpjs_orang_tua[]" class="form-control">
            <option value="Ikut" <?php if($d['BPJS_ORANG_TUA'] == "Ikut") { echo "SELECTED"; } ?>>Ikut</option>
            <option value="Mandiri" <?php if($d['BPJS_ORANG_TUA'] == "Mandiri") { echo "SELECTED"; } ?>>Mandiri</option>
          </select>
        </div>
        <div class="col">
          <label><strong>Status Pernikahan Anak</strong></label>
          <select id="form" name="status_pernikahan_child[]" class="form-control">
            <option value="Menikah" <?php if($d['STATUS_PERNIKAHAN_CHILD'] == "Menikah") { echo "SELECTED"; } ?>>Menikah</option>
            <option value="Lajang" <?php if($d['STATUS_PERNIKAHAN_CHILD'] == "Lajang") { echo "SELECTED"; } ?>>Lajang</option>
            <option value="Pernah Menikah" <?php if($d['STATUS_PERNIKAHAN_CHILD'] == "Pernah Menikah") { echo "SELECTED"; } ?>>Pernah Menikah</option>
          </select>
        </div>
        <div class="col">
          <label><strong>Pendidikan Anak</strong></label>
          <select id="form" name="pendidikan_child[]" class="form-control">
            <option value="Belum Sekolah" <?php if($d['PENDIDIKAN_CHILD'] == "Belum Sekolah") { echo "SELECTED"; } ?>>Belum Sekolah</option>
            <option value="SD" <?php if($d['PENDIDIKAN_CHILD'] == "SD") { echo "SELECTED"; } ?>>SD</option>
            <option value="SMP" <?php if($d['PENDIDIKAN_CHILD'] == "SMP") { echo "SELECTED"; } ?>>SMP</option>
            <option value="SMA" <?php if($d['PENDIDIKAN_CHILD'] == "SMA") { echo "SELECTED"; } ?>>SMA</option>
            <option value="S1" <?php if($d['PENDIDIKAN_CHILD'] == "S1") { echo "SELECTED"; } ?>>S1</option>
            <option value="S2" <?php if($d['PENDIDIKAN_CHILD'] == "S2") { echo "SELECTED"; } ?>>S2</option>
            <option value="S3" <?php if($d['PENDIDIKAN_CHILD'] == "S3") { echo "SELECTED"; } ?>>S3</option>
          </select>
        </div>
      </div>

      <hr style="margin-top: 40px">

      <?php $i = $i+1;
      } ?>
    <div class="row" style="margin-top: 40px">
      <div class="col">
          <input type="submit" class="editButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px; text-align: center" value="Simpan Perubahan">
      </div>
    </div>
    <?php } ?>
  <?php } ?>
</form>

<hr style="margin-top: 20px">
<?php
  $ci =& get_instance();
  $ci->load->model('detail_pegawai_model');
  $data = $ci->detail_pegawai_model->get_all_child();
  $id_child = 1;
  foreach ($data as $d) {
    $max =  $d['CHILD_ID'];
    if ($max > $id_child) {
      $id_child = $d['CHILD_ID'];
    }
  }
  $id_child++;
  ?>
<?php foreach($emp as $e){?>
<form method="post" action="<?= base_url('index.php/detail_pegawai_control/tambah_anak_pegawai/')?><?= $e['EMPLOYEE_ID']?>">
<?php }?>
  <div id="insert-form"></div>
  <button class="laporanButton2" type="button" id="btn-tambah-form" style="margin-top: 20px;padding-top: 10px">Tambah Data Anak</button>
  <input type="hidden" id="jumlah-form" value="<?= $id_child?>">
  <div class="row" style="margin-top: 40px">
    <div class="col">
        <input id="simpan-anak" type="submit" class="editButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px; text-align: center; display:none" value="Simpan Perubahan">
    </div>
  </div>
</form>

<script>
    $(document).ready(function(){
      $("#btn-tambah-form").click(function(){
        var jumlah = parseInt($("#jumlah-form").val());
        $("#insert-form").append(
          "<div class='row align-bottom'>"+
          "<div class='col-sm justify-content-start'>"+
          "<h5 class='subJudul' style='margin-bottom: 20px; margin-top: 40px; color: #D61C22'>Form Data Anak Tambahan</h1>"+
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
          "<div class='col'>"+
          "<label><strong>Status Pernikahan Anak</strong></label>"+
          "<select id='form'name='status_pernikahan_child[]' class='form-control'>"+
          "<option value='Menikah'>Menikah</option>"+
          "<option value='Lajang'>Lajang</option>"+
          "<option value='Pernah Menikah'>Pernah Menikah</option>"+
          "</select>"+
          "</div>"+
          "<div class='col'>"+
          "<label><strong>Pendidikan Anak</strong></label>"+
          "<select id='form' name='pendidikan_child[]' class='form-control'>"+
          "<option value='Belum Sekolah'>Belum Sekolah</option>"+
          "<option value='SD'>SD</option>"+
          "<option value='SMP'>SMP</option>"+
          "<option value='SMA'>SMA</option>"+
          "<option value='S1'>S1</option>"+
          "<option value='S2'>S2</option>"+
          "<option value='S3'>S3</option>"+
          "</select>"+
          "</div>"+
          "</div>"
          );
        jumlah = jumlah+1;
        $("#jumlah-form").val(jumlah); 
        $("#simpan-anak").css("display", "block"); 
      });
      
      $("#btn-reset-form").click(function(){
        $("#insert-form").html("");
        $("#jumlah-form").val("1");
      });
    });
</script>