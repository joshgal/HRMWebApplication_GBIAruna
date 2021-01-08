<form method="post" action="<?= base_url('index.php/detail_pegawai_control/edit_keuangan_pegawai')?>" style="margin-top: 20px">
    <?php foreach($emp as $e){?>
    <input type="text" class="form-control" name="id" hidden value="<?= $e['EMPLOYEE_ID']?>"/>
    <div class="row" style="margin-top: 30px">
      <div class="col">
        <label><strong>Gaji Pokok</strong> - Rp</label>
        <input type="text" name="pokok_gaji" class="form-control" value="<?= $e['POKOK_GAJI']?>">
      </div>
      <div class="col">
        <label><strong>Uang Makan</strong> - Rp</label>
        <input type="text" name="uang_makan" class="form-control" value="<?= $e['POKOK_UANG_MAKAN']?>">
      </div>
    </div> 

    <div class="row" style="margin-top: 40px">
      <div class="col">
        <label><strong>Rekening BCA</strong></label>
        <input type="text" name="rekening_bca" class="form-control" value="<?= $e['REKENING_BCA']?>">
      </div>
    </div>

    <div class="row" style="margin-top: 40px">
      <div class="col">
          <input type="submit" class="editButton" style="padding-right: 42px; padding-left: 42px;padding-top: 11px; text-align: center" value="Simpan Perubahan">
      </div>
    </div>
  <?php } ?>
</form>