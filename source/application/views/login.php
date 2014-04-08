		<h2>Selamat Datang di SIJAKI</h2>
	</div>
</div>
<div class="container">
	<form class="form-inline" method="POST" action="<?php echo base_url().'index.php/loginController/verify_login'; ?>">
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<input class="btn" type="submit" value="Sign in">
	</form>
</div>