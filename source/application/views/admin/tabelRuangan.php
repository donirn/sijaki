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
			<?php foreach ($ruangan as $ruang){
				echo "<tr><td>". $ruang->kode_ruangan;
				echo "</td><td>". $ruang->kapasitas;
				echo "</td><td>"; if($ruang->ada_proyektor) echo "Ya"; else echo "Tidak";
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/adminController/formUpdateRuangan/". $ruang->kode_ruangan ."' title='Update'><i class='icon-pencil'></i> Update</a></td><td>";
				echo "<a href='". base_url() ."index.php/adminController/deleteRuangan/". $ruang->kode_ruangan ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
		<tfoot>
			<form action="<?php echo base_url(); ?>index.php/adminController/insertRuangan" method="POST">
				<tr>
					<td><input class="input-mini" type="text" name="kode_ruangan" placeholder="kode ruangan" maxlength="4"></td>
					<td><input class="input-mini" type="text" name="kapasitas" placeholder="kapasitas" maxlength="3"></td>
					<td><input class="input-medium" type="text" name="ada_proyektor" placeholder="1(Ya) 0(Tidak)" maxlength="1"></td>
					<td><input class="btn" type="submit" value="Insert"></td>
					<td></td>
				</tr>
			</form>
		</tfoot>
	</table>
</div>