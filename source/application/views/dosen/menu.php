		<h2>Dosen <?php echo $kode_dosen; ?></h2>
	</div>
</div>
<div class="container">
	<div id="menu">
		<ul class="nav nav-tabs">
			<li class="<?php if($active=='home')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/dosenController/index/<?php echo $kode_dosen; ?>">Home</a></li>
			<li class="<?php if($active=='jadwal')echo 'active'; ?>"><a href="<?php echo base_url(); ?>index.php/dosenController/viewJadwal/<?php echo $kode_dosen; ?>">Jadwal</a></li>
			<li><a href="<?php echo base_url(); ?>">Logout</a></li>
		</ul>
	</div>