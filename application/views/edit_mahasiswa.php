<div class="container">
	<h3><i class="fas fa-edit"></i>UBAH DATA MAHASISWA</h3>

	<?php  foreach ($mahasiswa as $mhs) : ?>

		<form method="post" action="<?php echo base_url().'Myadmin/update' ?>" enctype="multipart/form-data">

			<div class="form-group">
				<label>NPM Mahasiswa</label>
				<input type="text" name="npm" class="form-control" value="<?php echo $mhs->int_npm ?>">
			</div>

			<div class="form-group">
				<label>Nama Mahasiswa</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
				<input type="text" name="nama" class="form-control" value="<?php echo $mhs->str_nama ?>">
			</div>

			<div class="form-group">
				<label>Semester</label>
				<select class="form-control" name="semester" value="<?php echo $mhs->int_semester ?>">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
				</select>
			</div>

			<div class="form-group">
				<label>Gambar</label>
				<input type="file" name="gambar" class="form-control" value="<?php echo $mhs->gambar ?>">
			</div>

			<div align="left">
				<button type="submit" class=" btn btn-success btn-sm mt-3">Simpan Perubahan</button>
				<a href="<?php echo base_url('Myadmin/index') ?>" ><div class="btn btn-sm btn-danger mt-3 ">Kembali</div></a>
			</div>
			
		</form>

	<?php endforeach; ?>
	
</div>