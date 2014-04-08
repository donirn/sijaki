		<h2>Mahasiswa <?php echo $nim; ?></h2>
	</div>
</div>
<div class="container">
	<div id="menu">
		<ul class="nav nav-tabs">
			<li class="<?php if($active=='home')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/mahasiswaController/index/<?php echo $nim; ?>">Home</a></li>
			<li class="<?php if($active=='kelas')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/mahasiswaController/viewKelas/<?php echo $nim; ?>">Daftar Kelas</a></li>
			<li class="<?php if($active=='registrasi')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/mahasiswaController/viewRegistrasi/<?php echo $nim; ?>">Kelas yang Sudah Diambil</a></li>
			<li class="<?php if($active=='jadwal')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/mahasiswaController/viewJadwal/<?php echo $nim; ?>">Jadwal Kuliah</a></li>
			<li><a href="<?php echo base_url(); ?>">Logout</a></li>
		</ul>
	</div>