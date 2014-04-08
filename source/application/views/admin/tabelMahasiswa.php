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
			<?php foreach ($mahasiswa as $mhs){
				echo "<tr><td>". $mhs->nim;
				echo "</td><td>". $mhs->nama;
				echo "</td><td>". $mhs->angkatan;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/formUpdateMahasiswa/". $mhs->nim ."' title='Update'><i class='icon-pencil'></i> Update</a></td><td>";
				echo "<a href='". base_url() ."index.php/adminController/deleteMahasiswa/". $mhs->nim ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>index.php/adminController/insertMahasiswa" method="POST">
				<tr>
					<td><input class="input-small" type="text" name="nim" placeholder="nim" maxlength="9"></td>
					<td><input class="input-xlarge" type="text" name="nama" placeholder="nama" maxlength="30"></td>
					<td><input class="input-mini" type="text" name="angkatan" placeholder="angkatan" maxlength="4"></td>
					<td><input type="password" name="password" placeholder="password" maxlength="20"></td>
					<td><input class="btn" type="submit" value="Insert"></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>