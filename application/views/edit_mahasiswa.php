<div class="container">
    <h3><i class="fas fa-edit"></i>UBAH DATA MAHASISWA</h3>

    <?php foreach ($mahasiswa as $mhs) : ?>

        <form method="post" action="<?php echo base_url() . 'Admin/update' ?>" enctype="multipart/form-data">

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
                <label>Program Studi</label>
                <select class="form-control" name="prodi" value="">
                    <option value="Teknik Informatika" <?php
                    if ($mhs->str_prodi == "Teknik Informatika") {
                        echo 'selected';
                    }
                    ?>>Teknik Informatika</option>
                    <option value="Teknik Industri" <?php
                    if ($mhs->str_prodi == "Teknik Industri") {
                        echo 'selected';
                    }
                    ?>>Teknik Industri</option>
                    <option value="Desain Komunikasi Visual" <?php
                    if ($mhs->str_prodi == "Desain Komunikasi Visual") {
                        echo 'selected';
                    }
                    ?>>Desain Komunikasi Visual</option>
                </select>
            </div>

            <div class="form-group">
                <label>Kelas Mahasiswa</label>
                <input type="text" name="kelas" class="form-control" value="<?php echo $mhs->str_kelas ?>">
            </div>

            <div class="form-group">
                <label>Semester</label>
                <select class="form-control" name="semester" value="">
                    <option value="1" <?php
                    if ($mhs->int_semester == 1) {
                        echo 'selected';
                    }
                    ?>>1</option>
                    <option value="2" <?php
                    if ($mhs->int_semester == 2) {
                        echo 'selected';
                    }
                    ?>>2</option>
                    <option value="3" <?php
                    if ($mhs->int_semester == 3) {
                        echo 'selected';
                    }
                    ?>>3</option>
                    <option value="4" <?php
                    if ($mhs->int_semester == 4) {
                        echo 'selected';
                    }
                    ?>>4</option>
                    <option value="5" <?php
                    if ($mhs->int_semester == 5) {
                        echo 'selected';
                    }
                    ?>>5</option>
                    <option value="6" <?php
                    if ($mhs->int_semester == 6) {
                        echo 'selected';
                    }
                    ?>>6</option>
                    <option value="7" <?php
                    if ($mhs->int_semester == 7) {
                        echo 'selected';
                    }
                    ?>>7</option>
                    <option value="8" <?php
                    if ($mhs->int_semester == 8) {
                        echo 'selected';
                    }
                    ?>>8</option>
                </select>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control" value="<?php echo $mhs->gambar; ?>">
            </div>

            <div align="left">
                <button type="submit" class=" btn btn-success btn-sm mt-3">Simpan Perubahan</button>
                <a href="<?php echo base_url('Login/admin') ?>" ><div class="btn btn-sm btn-danger mt-3 ">Kembali</div></a>
            </div>

        </form>

    <?php endforeach; ?>

</div>