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
				echo "</td></tr>";
			}
			?>
		</tbody>
	</table>
</div>