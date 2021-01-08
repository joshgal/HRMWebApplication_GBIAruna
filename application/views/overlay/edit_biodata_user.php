<style type="text/css">
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

<form method="post" action="<?= base_url('index.php/detail_pegawai_control/edit_biodata_pegawai')?>" style="margin-top: 20px">
    <?php foreach($emp as $e){?>
    <input type="text" class="form-control" name="id" hidden value="<?= $e['EMPLOYEE_ID']?>"/>

    <div class="row">
      <div class="col">
        <label><strong>Status Kepegawaian</strong></label>
        <select id="form" name="status_kepegawaian" class="form-control">
          <option value="Aktif" onclick="hide_keluar()" <?php if($e['STATUS_KEPEGAWAIAN'] == "Aktif") { echo "SELECTED"; } ?>>Aktif</option>
          <option value="Non-Aktif" id="non" onclick="show_keluar()" <?php if($e['STATUS_KEPEGAWAIAN'] == "Non-Aktif") { echo "SELECTED"; } ?>>Non-Aktif</option>
        </select>
      </div>
      <div class="col">
        <label><strong>Tanggal Join Pegawai</strong></label>
        <input id="form" type="text" name="tanggal_bergabung_pegawai" class="form-control" placeholder="Masukkan Tanggal Masuk Pegawai" value="<?= $e['TANGGAL_BERGABUNG_PEGAWAI']?>">
      </div>
      <div class="col" id="tanggal-keluar" style="display:none">
        <label><strong>Tanggal Dirumahkan Pegawai</strong></label>
        <input id="form" type="text" name="tanggal_dirumahkan_pegawai" class="form-control" placeholder="Masukkan Tanggal Dirumahkan Pegawai" value="<?= $e['TANGGAL_DIRUMAHKAN_PEGAWAI']?>">
      </div>
    </div>

    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Jabatan Pastoral</strong> - Opsional</label>
        <select id="form" name="jabatan_pastoral" class="form-control">
          <option value="" <?php if($e['JABATAN_PASTORAL'] == "") { echo "SELECTED"; } ?>>[Kosong]</option>
          <option value="Pdt." <?php if($e['JABATAN_PASTORAL'] == "Pdt.") { echo "SELECTED"; } ?>>Pdt.</option>
          <option value="Pdm." <?php if($e['JABATAN_PASTORAL'] == "Pdm.") { echo "SELECTED"; } ?>>Pdm.</option>
          <option value="Pdp." <?php if($e['JABATAN_PASTORAL'] == "Pdp.") { echo "SELECTED"; } ?>>Pdp.</option>
        </select>
      </div>
      <div class="col">
        <label><strong>Nama Depan</strong></label>
        <input id="form" type="text" name="first_name" class="form-control" value="<?= $e['FIRST_NAME']?>">
      </div>
      <div class="col">
        <label><strong>Nama Belakang</strong></label>
        <input id="form" type="text" name="last_name" class="form-control" value="<?= $e['LAST_NAME']?>">
      </div>
    </div>  

    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Jenis Kelamin</strong></label>
        <select id="form" name="jenis_kelamin" class="form-control">
          <option value="Perempuan" <?php if($e['JENIS_KELAMIN'] == "Perempuan") { echo "SELECTED"; } ?>>Perempuan</option>
          <option value="Laki-Laki" <?php if($e['JENIS_KELAMIN'] == "Laki-Laki") { echo "SELECTED"; } ?>>Laki-Laki</option>
        </select>
      </div>
      <div class="col ui-widget">
        <label style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;"><strong>Tanggal Lahir</strong></label>
        <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker" type="text" name="tanggal_lahir" class="form-control" value="<?= $e['TANGGAL_LAHIR']?>">
      </div>
    </div> 

    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Alamat</strong></label>
        <input id="form" type="text" name="alamat" class="form-control" value="<?= $e['ALAMAT']?>">
      </div>
    </div>

    <div class="row" style="margin-top: 30px">
      <div class="col">
        <label><strong>Pendidikan Terakhir</strong></label>
        <select id="form" name="pendidikan_terakhir" class="form-control">
          <option value="Tidak Sekolah" <?php if($e['PENDIDIKAN_TERAKHIR'] == "Tidak Sekolah") { echo "SELECTED"; } ?>>Tidak Sekolah</option>
          <option value="SD" <?php if($e['PENDIDIKAN_TERAKHIR'] == "SD") { echo "SELECTED"; } ?>>SD</option>
          <option value="SMP" <?php if($e['PENDIDIKAN_TERAKHIR'] == "SMP") { echo "SELECTED"; } ?>>SMP</option>
          <option value="SMA" <?php if($e['PENDIDIKAN_TERAKHIR'] == "SMA") { echo "SELECTED"; } ?>>SMA</option>
          <option value="S1/ D4" <?php if($e['PENDIDIKAN_TERAKHIR'] == "S1/ D4") { echo "SELECTED"; } ?>>S1/ D4</option>
          <option value="S2" <?php if($e['PENDIDIKAN_TERAKHIR'] == "S2") { echo "SELECTED"; } ?>>S2</option>
          <option value="S3" <?php if($e['PENDIDIKAN_TERAKHIR'] == "S2") { echo "SELECTED"; } ?>>S3</option>
        </select>
      </div>
      <div class="col">
        <label><strong>Gelar Pendidikan</strong> - Opsional</label>
        <input id="form" type="text" name="gelar_pendidikan" class="form-control" value="<?= $e['GELAR_PENDIDIKAN']?>" placeholder="Masukkan Gelar Pendidikan (contoh: S.Kom.,M.Kom.)">
      </div>
    </div>

    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Status Pegawai</strong></label>
        <select id="form" name="status_pegawai" class="form-control">
          <option value="FULLTIMER" <?php if($e['STATUS_PEGAWAI'] == "FULLTIMER") { echo "SELECTED"; } ?>>FULLTIMER</option>
          <option value="PARTIMER" <?php if($e['STATUS_PEGAWAI'] == "PARTIMER") { echo "SELECTED"; } ?>>PARTIMER</option>
          <option value="VOLUNTEER" <?php if($e['STATUS_PEGAWAI'] == "VOLUNTEER") { echo "SELECTED"; } ?>>VOLUNTEER</option>
        </select>
      </div>
      <div class="col">
        <label><strong>Status Pegawai Pastoral</strong></label>
        <select id="form" name="status_pegawai_pastoral" class="form-control">
          <option value="Pastoral" <?php if($e['STATUS_PEGAWAI_PASTORAL'] == "Pastoral") { echo "SELECTED"; } ?>>Pastoral</option>
          <option value="Admin" <?php if($e['STATUS_PEGAWAI_PASTORAL'] == "Admin") { echo "SELECTED"; } ?>>Admin</option>
        </select>
      </div>
    </div>

    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Departmen</strong></label>
        <select id="form" name="department_id" class="form-control">
          <?php
            $ci =& get_instance();
            $ci->load->model('detail_pegawai_model');
            $data = $ci->detail_pegawai_model->get_departments();
            foreach($data as $d)
          { ?>
          <option value="<?= $d['DEPARTMENT_ID']?>" <?php if($e['DEPARTMENT_NAME'] == $d['DEPARTMENT_NAME']) { echo "SELECTED"; } ?>><?= $d['DEPARTMENT_NAME']?></option>
          <?php } ?>
        </select>
      </div>
    </div>

    <?php
      $ci =& get_instance();
      $ci->load->model('detail_pegawai_model');
      $data2 = $ci->detail_pegawai_model->get_all_skill();
      $id_skill = 1;
      foreach ($data2 as $d) {
        $max = $d['SKILL_ID'];
        if ($id_skill < $max){
          $id_skill = $d['SKILL_ID'];
        }
      }
      $id_skill++;
      $data2 = $ci->detail_pegawai_model->get_employee_skill($e['EMPLOYEE_ID']);
      $i = count($data2); 
      $n = 1;
      $s = 1;
      if ($i > 0) {
      foreach ($data2 as $d) {
    ?>
    <div class="row" style="margin-top: 40px">
      <div class="col">
        <input type="text" class="form-control" name="emp_id[]" hidden value="<?= $e['EMPLOYEE_ID']?>"/>
        <input type="text" name="skill_id[]" class="form-control" value="<?= $d['SKILL_ID']?>" readonly hidden>
        <label><strong>Keahlian Pegawai - <?= $n?></strong></label>
        <input id="form" type="text" name="skill_name[]" class="form-control" value="<?= $d['SKILL_NAME']?>" placeholder="Masukkan Keahlian Pegawai">
      </div>
    </div>
    <?php 
      $n++;
      }
    ?>
    <div id="insert-form-2"></div>

    <div class="laporanButton2" id="btn-tambah-skill" style="margin-top: 30px;padding-top: 10px">Tambah Keahlian Pegawai</div>
    <input type="hidden" id="jumlah-form-keahlian" value="<?= $n?>">
    <input type="hidden" id="jumlah-keahlian" value="<?= $id_skill?>">
    <?php } else {?>
    <div id="insert-form-2"></div>
    <div class="laporanButton2" id="btn-tambah-skill" style="margin-top: 30px;padding-top: 10px">Tambah Keahlian Pegawai</div>
    <input type="hidden" id="jumlah-form-keahlian" value="<?= $n?>">
    <input type="hidden" id="jumlah-keahlian" value="<?= $id_skill?>">
    <?php }?>

    <div class="row" style="margin-top: 20px">
      <div class="col">
          <input type="submit" class="editButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px; text-align: center" value="Simpan Perubahan">
      </div>
    </div>

  <?php } ?>
</form>

<script type="text/javascript">
  function show_keluar(){
    document.getElementById("tanggal-keluar").style.display = "block";
  }

  function hide_keluar(){
    document.getElementById("tanggal-keluar").style.display = "none";
  }

  $('#non').each(function() {
    if(this.selected)
      document.getElementById("tanggal-keluar").style.display = "block";
  });

  $(document).ready(function(){
    if ($("#jumlah-form-keahlian").val()>3){
      $("#btn-tambah-skill").css("display", "none");
    }
  });
  
  $(document).ready(function(){
    $("#btn-tambah-skill").click(function(){
    var jumlah = parseInt($("#jumlah-form-keahlian").val());
    var jumlah_ahli = parseInt($("#jumlah-keahlian").val());
      $("#insert-form-2").append(
        "<div class='row' style='margin-top: 40px'>"+
        "<div class='col'>"+
        "<input type='text' class='form-control' name='emp_id[]' hidden readonly value='<?= $e['EMPLOYEE_ID']?>'/>"+
        "<input type='text' name='skill_id[]' class='form-control' value='"+ jumlah_ahli +"' readonly hidden>"+
        "<label><strong>Keahlian Pegawai - "+ jumlah +"</strong></label>"+
        "<input id='form' type='text' name='skill_name[]' class='form-control' placeholder='Masukkan Keahlian Pegawai'>"+
        "</div>"+
        "</div>"
      );
      jumlah = jumlah+1;
      jumlah_ahli = jumlah_ahli +1;
      $("#jumlah-form-keahlian").val(jumlah);
      $("#jumlah-keahlian").val(jumlah_ahli);
      if ($("#jumlah-form-keahlian").val()>3){
        $("#btn-tambah-skill").css("display", "none");
      }
    });
  });
</script>