<div id="content">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Angkatan</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <form action="<?php echo base_url(); ?>index.php/adminController/updateMahasiswa" method="POST">
        <input class="input-small" type="hidden" name="nim" placeholder="nim" maxlength="9" value="<?php echo $mahasiswa[0]->nim ?>">
        <tr>
          <td><span class="uneditable-input input-small"><?php echo $mahasiswa[0]->nim ?></td>
          <td><input class="input-xlarge" type="text" name="nama" placeholder="nama" maxlength="30" value="<?php echo $mahasiswa[0]->nama ?>"></td>
          <td><input class="input-mini" type="text" name="angkatan" placeholder="angkatan" maxlength="4" value="<?php echo $mahasiswa[0]->angkatan ?>"></td>
          <td><input type="password" name="password" placeholder="password tidak berubah" maxlength="20"></td>
          <td><input class="btn" type="submit" value="Update"></td>
        </tr>
      </form>
    </tbody>
  </table>
</div>