<div id="content">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Kode Jadwal</th>
        <th>Hari</th>
        <th>Waktu Mulai</th>
        <th>Waktu Akhir</th>
        <th>Kode Kelas</th>
        <th>Kode Ruangan</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <form action="<?php echo base_url(); ?>index.php/adminController/updateJadwal" method="POST">
        <input class="input-small" type="hidden" name="kode_jadwal" placeholder="kode_jadwal" maxlength="10" value="<?php echo $jadwal[0]->kode_jadwal ?>">
        <tr>
          <td><span class="uneditable-input input-medium"><?php echo $jadwal[0]->kode_jadwal; ?></span></td>
          <td><input class="input-small" type="text" name="nama_hari" placeholder="hari" maxlength="6" value="<?php echo $jadwal[0]->nama_hari ?>"></td>
          <td><input class="input-small" type="text" name="waktu_mulai" placeholder="hh:mm:ss" maxlength="8" value="<?php echo $jadwal[0]->waktu_mulai ?>"></td>
          <td><input class="input-small" type="text" name="waktu_akhir" placeholder="hh:mm:ss" maxlength="8" value="<?php echo $jadwal[0]->waktu_akhir ?>"></td>
          <td><input class="input-large" type="text" name="kode_kelas" placeholder="kode kelas" maxlength="20" value="<?php echo $jadwal[0]->kode_kelas ?>"></td>
          <td><input class="input-mini" type="text" name="kode_ruangan" placeholder="kode ruangan" maxlength="4" value="<?php echo $jadwal[0]->kode_ruangan ?>"></td>
          <td><input class="btn" type="submit" value="Update"></td>
          <td></td>
        </tr>
      </form>
    </tbody>
  </table>
</div>