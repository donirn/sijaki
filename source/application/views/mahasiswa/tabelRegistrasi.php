<div id="content">
	<table class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode Registrasi</th>
				<th>Kode Kelas</th>
				<th>Waktu Registrasi</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($registrasi as $reg){
				echo "<tr><td>". $reg->kode_registrasi;
				echo "</td><td>". $reg->kode_kelas;
				echo "</td><td>". $reg->timestamp;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/mahasiswaController/deleteRegistrasi/".$nim."/". $reg->kode_registrasi ."' title='Delete'><i class='icon-remove'></i> Delete</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
	</table>
</div>