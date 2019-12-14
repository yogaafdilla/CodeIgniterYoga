<div class="container-fluid">
	
	<div class="card">
		<h5 class="card-header">Detail Data Mahasiswa</h5>
		<div class="card-body">
			
			<?php foreach($mahasiswa as $mhs) : ?>

				<div class="row">	
					<div class="col-md-4 mb-2">
						<img src="<?php echo base_url().'/uploads/'.$mhs->gambar  ?>" class="card-img-top" >
					</div>

					<div class="cold-md-8">
						<table class="table">
							<tr>
								<td>NPM Mahasiswa</td>
								<td><strong><div class="btn btn-sm btn-danger"><?php echo $mhs->int_npm ?></div></strong></td>
							</tr>

							<tr>
								<td>Nama Mahasiswa</td>
								<td><strong><div class="btn btn-sm btn-primary"><?php echo $mhs->str_nama ?></div></strong></td>
							</tr>

							<tr>
								<td>Semester</td>
								<td><strong><div class="btn btn-sm btn-success"><?php echo $mhs->int_semester ?></div></strong></td>
							</tr>
						</table>
					</div>
				</div>

			<?php endforeach; ?>
			
			<div align="right">
				<a href="<?php echo base_url('Myadmin/index') ?>" ><div class="btn btn-sm btn-danger mt-3 mb-4">Kembali</div></a>
			</div>

		</div>

	</div>
</div>
</div>
