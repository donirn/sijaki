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
			<?php foreach ($dosen as $dsn){
				echo "<tr><td>". $dsn->kode_dosen;
				echo "</td><td>". $dsn->nama_dosen;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/formUpdateDosen/". $dsn->kode_dosen ."' title='Update'><i class='icon-pencil'></i> Update</a></td><td>";
				echo "<a href='". base_url() ."index.php/adminController/deleteDosen/". $dsn->kode_dosen ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>index.php/adminController/insertDosen" method="POST">
				<tr>
					<td><input class="input-mini" type="text" name="kode_dosen" placeholder="kode dosen" maxlength="3"></td>
					<td><input class="input-xlarge" type="text" name="nama_dosen" placeholder="nama dosen" maxlength="30"></td>
					<td><input type="password" name="password" placeholder="password" maxlength="20"></td>
					<td><input class="btn" type="submit" value="Insert"></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>