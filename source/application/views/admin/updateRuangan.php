<div id="content">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Kode</th>
        <th>Kapasitas</th>
        <th>Ada Proyektor?</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <form action="<?php echo base_url(); ?>index.php/adminController/updateRuangan" method="POST">
        <input class="input-small" type="hidden" name="kode_ruangan" placeholder="kode_ruangan" maxlength="4" value="<?php echo $ruangan[0]->kode_ruangan ?>">
        <tr>
          <td><span class="uneditable-input input-mini"><?php echo $ruangan[0]->kode_ruangan; ?></td>
          <td><input class="input-mini" type="text" name="kapasitas" placeholder="kapasitas" maxlength="3" value="<?php echo $ruangan[0]->kapasitas ?>"></td>
          <td><input class="input-mini" type="text" name="ada_proyektor" placeholder="1(Ya) 0(Tidak)" maxlength="1" value="<?php echo $ruangan[0]->ada_proyektor ?>"></td>
          <td><input class="btn" type="submit" value="Update"></td>
          <td></td>
        </tr>
      </form>
    </tbody>
  </table>
</div>