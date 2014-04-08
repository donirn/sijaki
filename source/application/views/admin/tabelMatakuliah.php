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
			<?php foreach ($matakuliah as $mk){
				echo "<tr><td>". $mk->kode_matakuliah;
				echo "</td><td>". $mk->nama_matakuliah;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/formUpdateMatakuliah/". $mk->kode_matakuliah ."' title='Update'><i class='icon-pencil'></i> Update</a></td><td>";
				echo "<a href='". base_url() ."index.php/adminController/deleteMatakuliah/". $mk->kode_matakuliah ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>index.php/adminController/insertMatakuliah" method="POST">
				<tr>
					<td><input class="input-small" type="text" name="kode_matakuliah" placeholder="kode mata kuliah" maxlength="6"></td>
					<td><input class="input-xxlarge" type="text" name="nama_matakuliah" placeholder="nama mata kuliah" maxlength="50"></td>
					<td><input class="btn" type="submit" value="Insert"></td>
					<td></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>