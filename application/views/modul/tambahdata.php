<section>
<form action="<?php echo base_url('Myadmin/aksi_tambah_data')?>" method="POST" accept-charset="utf-8">

<input type="number" name="npm" maxlength="12" placeholder="Masukan NPM Anda">
<input type="text" name="nama" placeholder="Masukan Nama Anda">
<select name="semester" >
	<option value="1">Pilih Semester</option>
	<option value="2">Semester 1</option>
	<option value="3">Semester 2</option>
	<option value="4">Semester 3</option>
	<option value="5">Semester 4</option>
	<option value="6">Semester 5</option>
	<option value="7">Semester 6</option>
	<option value="8">Semester 7</option>
	<option value="9">Semester 8</option>
</select>
</section>

<br><input type="submit" name="submit" value="Simpan "><br>
<br><a href="<?php echo base_url('Myadmin/')?>" title="">Kembali</a><br>
</form>

<table border = 1>
	<caption><h1>DATA MAHASISWA</h1></caption>
	<thead>
		<tr>
			<th width="5%">No</th>
			<th width="10%">NPM</th>
			<th width="30%">Nama</th>
			<th width="10%">Semester</th>
			<th width="15%">Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$no=1;
		foreach ($tampil as $tpl){
			echo "<tr><td>".$no."</td>";
			echo "<td>".$tpl->int_npm."</td>";
			echo "<td>".$tpl->str_nama."</td>";
			echo "<td>".$tpl->int_semester."</td></tr>";
		$no++;
		}?>
	</tbody>
</table>