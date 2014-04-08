<div id="content">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Kode Kelas</th>
        <th>Kapasitas</th>
        <th>Kode Mata Kuliah</th>
        <th>Kode Dosen</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <form action="<?php echo base_url(); ?>index.php/adminController/updateKelas" method="POST">
        <input class="input-small" type="hidden" name="kode_kelas" placeholder="kode_kelas" maxlength="20" value="<?php echo $kelas[0]->kode_kelas ?>">
        <tr>
          <td><span class="uneditable-input input-large"><?php echo $kelas[0]->kode_kelas; ?></td>
          <td><input class="input-mini" type="text" name="kapasitas" placeholder="kapasitas" maxlength="3" value="<?php echo $kelas[0]->kapasitas ?>"></td>
          <td><input class="input-small" type="text" name="kode_matakuliah" placeholder="kode mata kuliah" maxlength="6" value="<?php echo $kelas[0]->kode_matakuliah ?>"></td>
          <td><input class="input-mini" type="text" name="kode_dosen" placeholder="kode dosen" maxlength="3" value="<?php echo $kelas[0]->kode_dosen ?>"></td>
          <td><input class="btn" type="submit" value="Update"></td>
          <td></td>
        </tr>
      </form>
    </tbody>
  </table>
</div>