<div id="content">
	<table class="table table-hover table-condensed">
		<thead>
			<tr>
				<th>Kode Kelas</th>
				<th>Kapasitas</th>
				<th>Kode Mata Kuliah</th>
				<th>Kode Dosen</th>
				<th>Daftar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($kelas as $kls){
				echo "<tr><td>". $kls->kode_kelas;
				echo "</td><td>". $kls->kapasitas;
				echo "</td><td>". $kls->kode_matakuliah;
				echo "</td><td>". $kls->kode_dosen;
				echo "</td><td>";
				echo "<a href='". base_url() ."index.php/mahasiswaController/insertRegistrasi/".$nim."/". $kls->kode_kelas ."' title='Daftar'>Daftar</a>";
				echo "</td></tr>";
			}
			?>
		</tbody>
	</table>
</div>