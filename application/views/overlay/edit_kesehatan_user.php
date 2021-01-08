<form method="post" action="<?= base_url('index.php/detail_pegawai_control/edit_kesehatan_pegawai')?>" style="margin-top: 20px">
  <?php foreach($emp as $e){?>
    <input type="text" class="form-control" name="id" hidden value="<?= $e['EMPLOYEE_ID']?>"/>
    <div class="row">
    <?php
      $ci =& get_instance();
      $ci->load->model('detail_pegawai_model');
      $data = $ci->detail_pegawai_model->get_insurance($e['EMPLOYEE_ID']);
      if ($data == NULL) { ?>
      <div class="col">
        <label><strong>Asuransi</strong></label>
        <select id="inputAsuransiPegawai" name="insurance_id" class="form-control">
          <option value="kosong">[Tidak Memiliki Asuransi]</option>
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
        <label><strong>No Polis Pegawai</strong></label>
        <input type="text" name="no_polis_pegawai" class="form-control" placeholder="Masukkan Nomor Polis Pegawai">
      </div>
    <?php }  else { foreach($data as $d) {?>
      <div class="col">
        <label><strong>Asuransi</strong></label>
        <select id="inputAsuransiPegawai" name="insurance_id" class="form-control">
          <?php
            $ci =& get_instance();
            $ci->load->model('detail_pegawai_model');
            $data = $ci->detail_pegawai_model->get_all_insurance();
            foreach($data as $f)
          { ?>
          <option value="<?= $f['INSURANCE_ID']?>" <?php if($f['INSURANCE_NAME'] == $d['INSURANCE_NAME']) { echo "SELECTED"; } ?>><?= $f['INSURANCE_NAME']?></option>
          <?php } ?>
          <option value="kosong">[Tidak Memiliki Asuransi]</option>
        </select>
      </div>
      <div class="col">
        <label><strong>No Polis Pegawai</strong> - Opsional</label>
        <input type="text" name="no_polis_pegawai" class="form-control" value="<?= $e['NO_POLIS_PEGAWAI']?>" placeholder="Masukkan Nomor Polis Pegawai">
      </div>
      <?php } ?>
      <?php } ?>
      
    </div>
      

    <?php
      $ci =& get_instance();
      $ci->load->model('detail_pegawai_model');
      $data = $ci->detail_pegawai_model->get_bpjs($e['EMPLOYEE_ID']);
      if ($data==NULL) {?>
    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Nomor BPJS</strong></label>
        <input type="text" name="bpjs_id" class="form-control" placeholder="Masukkan Nomor BPJS">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <input type="text" name="status" class="form-control" hidden value="baru"/>
      </div>
    </div>
    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Kelas BPJS</strong></label>
        <select id="inputAsuransiPegawai" name="kelas_bpjs" class="form-control">
          <option value="" selected>[KOSONG]</option>
          <option value="1">Kelas 1</option>
          <option value="2">Kelas 2</option>
          <option value="3">Kelas 3</option>
        </select>
      </div>
      <div class="col ui-widget">
        <label style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;"><strong>Tanggal Bergabung BPJS</strong></label>
        <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker2" type="text" name="tanggal_join_bpjs" class="form-control" placeholder="Masukkan Tanggal Bergabung BPJS" ">
      </div>
    </div>
    <?php } else { foreach($data as $d) {?>
      <div class="row" style="margin-top: 40px">
        <div class="col">
          <label><strong>Nomor BPJS</strong></label>
          <input type="text" name="bpjs_id" class="form-control" placeholder="Masukkan Nomor BPJS" value="<?= $d['BPJS_ID']?>" readonly="True">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" name="status" class="form-control" hidden value="update"/>
        </div>
      </div>
      <div class="row" style="margin-top: 40px">
        <div class="col">
          <label><strong>Kelas BPJS</strong></label>
          <select id="inputAsuransiPegawai" name="kelas_bpjs" class="form-control">
            <option value="">[KOSONG]</option>
            <option value="1" <?php if($d['KELAS_BPJS'] == 1) { echo "SELECTED"; } ?>>Kelas 1</option>
            <option value="2" <?php if($d['KELAS_BPJS'] == 2) { echo "SELECTED"; } ?>>Kelas 2</option>
            <option value="3" <?php if($d['KELAS_BPJS'] == 3) { echo "SELECTED"; } ?>>Kelas 3</option>
          </select>
        </div>
        <div class="col ui-widget">
          <label style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;"><strong>Tanggal Bergabung BPJS</strong></label>
          <input style="font-family: Poppins;font-style: normal;font-size: 14px;line-height: 21px;" id="datepicker2" type="text" name="tanggal_join_bpjs" class="form-control" value="<?= $d['TANGGAL_JOIN_BPJS']?>" >
        </div>
      </div>
      <?php }?>
    <?php }?>
    <div class="row" style="margin-top: 40px">
      <div class="col">
          <input type="submit" class="editButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px; text-align: center" value="Simpan Perubahan">
      </div>
    </div>
  <?php } ?>
</form>