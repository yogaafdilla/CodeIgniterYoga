
<div class="login-form">
	<form action="<?= base_url('Register/register');?>" method="post">
		<h2 class="text-center">Register</h2>
		<div class="form-group">
			<?= $this->session->flashdata('message'); ?>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" class="form-control" placeholder="Masukan Username Baru" required="required">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Masukan Password Baru" required="required" id="txtPassword">
		</div>
		<div class="form-group">
			<label>Retype Password</label>
			<input type="password" name="retype-password" class="form-control" placeholder="Masukan Kembali Password" required="required" id="txtConfirmPassword">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block" id="btnSubmit">Register</button>
		</div>
		<!-- <div class="clearfix">
			<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
		</div> -->
	</form>
	<div class="form-group">
		<a href="<?php echo base_url('Login');?>" ><div class="btn btn-danger btn-block">Login</div></a>
	</div>
</div>

