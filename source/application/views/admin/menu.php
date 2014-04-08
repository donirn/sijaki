		<h2>Administrator</h2>
	</div>
</div>
<div class="container">
	<div id="menu">
		<ul class="nav nav-tabs">
			<li class="<?php if($active=='home')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/adminController">Home</a></li>
			<li class="<?php if($active=='mahasiswa')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/adminController/viewMahasiswa">Mahasiswa</a></li>
			<li class="<?php if($active=='dosen')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/adminController/viewDosen">Dosen</a></li>
			<li class="<?php if($active=='matakuliah')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/adminController/viewMatakuliah">Mata Kuliah</a></li>
			<li class="<?php if($active=='ruangan')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/adminController/viewRuangan">Ruangan</a></li>
			<li class="<?php if($active=='kelas')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/adminController/viewKelas">Kelas</a></li>
			<li class="<?php if($active=='jadwal')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/adminController/viewJadwal">Jadwal</a></li>
			<li><a href="<?php echo base_url(); ?>">Logout</a></li>
		</ul>
	</div>