<div id="content">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Kode</th>
        <th>Nama</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <form action="<?php echo base_url(); ?>index.php/adminController/updateMatakuliah" method="POST">
        <input class="input-small" type="hidden" name="kode_matakuliah" maxlength="6" value="<?php echo $matakuliah[0]->kode_matakuliah ?>">
        <tr>
          <td><span class="uneditable-input input-small"><?php echo $matakuliah[0]->kode_matakuliah; ?></td>
          <td><input class="input-xxlarge" type="text" name="nama_matakuliah" placeholder="nama mata kuliah" maxlength="50" value="<?php echo $matakuliah[0]->nama_matakuliah ?>"></td>
          <td><input class="btn" type="submit" value="Update"></td>
          <td></td>
        </tr>
      </form>
    </tbody>
  </table>
</div>