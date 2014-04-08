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
      <form action="<?php echo base_url(); ?>index.php/adminController/updateDosen" method="POST">
        <input class="input-small" type="hidden" name="kode_dosen" placeholder="kode_dosen" maxlength="3" value="<?php echo $dosen[0]->kode_dosen ?>">
        <tr>
          <td><span class="uneditable-input input-small"><?php echo $dosen[0]->kode_dosen; ?></td>
          <td><input class="input-xlarge" type="text" name="nama_dosen" placeholder="nama dosen" maxlength="30" value="<?php echo $dosen[0]->nama_dosen ?>"></td>
          <td><input type="password" name="password" placeholder="password" maxlength="20"></td>
          <td><input class="btn" type="submit" value="Update"></td>
        </tr>
      </form>
    </tbody>
  </table>
</div>