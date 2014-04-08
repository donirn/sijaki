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
			<?php foreach ($jadwal as $jdwl){
				echo "<tr><td>". $jdwl->kode_jadwal;
				echo "</td><td>". $jdwl->nama_hari;
				echo "</td><td>". $jdwl->waktu_mulai;
				echo "</td><td>". $jdwl->waktu_akhir;
				echo "</td><td>". $jdwl->kode_kelas;
				echo "</td><td>". $jdwl->kode_ruangan;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/formUpdateJadwal/". $jdwl->kode_jadwal ."' title='Update'><i class='icon-pencil'></i> Update</a>";
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/deleteJadwal/". $jdwl->kode_jadwal ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>index.php/adminController/insertJadwal" method="POST">
				<tr>
					<td><span class="uneditable-input input-medium">kode jadwal</span></td>
					<td><input class="input-small" type="text" name="nama_hari" placeholder="hari" maxlength="6"></td>
					<td><input class="input-small" type="text" name="waktu_mulai" placeholder="hh:mm:ss" maxlength="8"></td>
					<td><input class="input-small" type="text" name="waktu_akhir" placeholder="hh:mm:ss" maxlength="8"></td>
					<td><input class="input-large" type="text" name="kode_kelas" placeholder="kode kelas" maxlength="20"></td>
					<td><input class="input-mini" type="text" name="kode_ruangan" placeholder="kode ruangan" maxlength="4"></td>
					<td><input class="btn" type="submit" value="Insert"></td>
					<td></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>