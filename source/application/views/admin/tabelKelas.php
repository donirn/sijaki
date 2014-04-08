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
			<?php foreach ($kelas as $kls){
				echo "<tr><td>". $kls->kode_kelas;
				echo "</td><td>". $kls->kapasitas;
				echo "</td><td>". $kls->kode_matakuliah;
				echo "</td><td>". $kls->kode_dosen;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/formUpdateKelas/". $kls->kode_kelas ."' title='Update'><i class='icon-pencil'></i> Update</a>";
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/deleteKelas/". $kls->kode_kelas ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>index.php/adminController/insertKelas" method="POST">
				<tr>
					<td><input class="input-large" type="text" name="kode_kelas" placeholder="kode kelas" maxlength="20"></td>
					<td><input class="input-mini" type="text" name="kapasitas" placeholder="kapasitas" maxlength="3"></td>
					<td><input class="input-small" type="text" name="kode_matakuliah" placeholder="kode mata kuliah" maxlength="6"></td>
					<td><input class="input-mini" type="text" name="kode_dosen" placeholder="kode dosen" maxlength="3"></td>
					<td><input class="btn" type="submit" value="Insert"></td>
					<td></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>