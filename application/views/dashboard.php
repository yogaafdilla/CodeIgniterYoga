<div class="container-fluid">
	
	<div class="container-fluid">
		<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_wisata"><i class="fas fa-plus fa-sm"></i> Tambah Data Mahasiswa </button>

		<table class="table table-bordered" >
			<tr>
				<th>No</th>
				<th>NPM Mahasiswa</th>
				<th>Nama Mahasiswa</th>
				<th>Semester</th>
				<th>Gambar</th>
				<th colspan="3">Aksi</th>
			</tr>

			<?php
			$no=1;
			foreach ($mahasiswa as $mhs) :?>

				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $mhs->id ?></td>
					<td><?php echo $mhs->int_npm ?></td>
					<td><?php echo $mhs->str_nama ?></td>
					<td><?php echo $mhs->int_semester ?></td>
					<td><?php echo $mhs->gambar ?></td>
					<td><?php echo anchor('Myadmin/detail/'.$mhs->id,'<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
					<td><?php echo anchor('Myadmin/edit/'.$mhs->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>

					<td>
						<a class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal_hapus<?php echo $mhs->int_npm;?>"> Hapus </a>
					</td>
					<td>
						<?php echo anchor('Myadmin/hapus/'.$mhs->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
					</td>
				</tr>
				<?php 
			endforeach; ?>
		</table>
	</div>

	<div class="modal fade" id="modal_hapus<?php echo $mhs->int_npm;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button> -->
					<h3 class="modal-title" id="myModalLabel">Hapus Barang</h3>
				</div>
				<form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Myadmin/hapus'?>">
					<div class="modal-body">
						<p>Anda yakin mau menghapus <b><?php echo $mhs->str_nama;?></b></p>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="id" value="<?php echo $mhs->int_npm;?>">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
						<button class="btn btn-danger">Hapus</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="tambah_wisata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url().'Myadmin/aksi_tambah_data'; ?>" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<label>NPM Mahasiswa</label>
							<input type="text" name="npm" class="form-control" placeholder="Masukan Nomor NPM Anda" required>
						</div>

						<div class="form-group">
							<label>Nama Mahasiswa</label>
							<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap Anda" required>
						</div>

						<!-- <div class="form-group">
							<label>Semester</label>
							<input type="number" name="semester" class="form-control" placeholder="Masukan Semsester Yang Ditempuh">
						</div> -->

						<div class="form-group">
							<label>Semester</label>
							<select class="form-control" name="semester" required>
								<option value="">Pilih Semester</option>
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
							<input type="file" name="gambar" class="form-control" placeholder="Masukan Foto Anda" required>
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Tambahkan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
