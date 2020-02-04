
<body>


    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-3 pt-2 ">
            <div class="card-body p-2">
                <div align="center">
                    <div class="btn btn-success">Tambah Data Mahasiswa</div>
                </div>

                <div class="container">
                    <div class="modal-body mr-5">
                        <form action="<?php echo base_url() . 'Admin/aksi_tambah_data'; ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <?= $this->session->flashdata('message'); ?>
                            </div>

                            <div class="form-group">
                                <input type="text" name="npm" maxlength="8" class="form-control" placeholder="Masukan 6 Digit NPM Mahasiswa" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="nama" maxlength="25" class="form-control" placeholder="Masukan Nama Lengkap Mahasiswa" required>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="prodi" required>
                                    <option value="">Pilih Program Studi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" name="kelas" maxlength="30" class="form-control" placeholder="Masukan Nama Kelas" required>
                            </div>

                            <div class="form-group">
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
                                <input type="file" name="gambar" class="form-control" placeholder="Masukan Foto Anda" required>
                            </div>

                            <div align="right">
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-3 p-4">
            <div class="card-body p-0">

                <div align="center">
                    <div class="btn btn-success">Data Mahasiswa</div>
                </div>

                <div class="form-group">
                    <?= $this->session->flashdata('message'); ?>
                </div>

                <div class="col m8">
                    <?php echo $this->session->flashdata('message_hapus'); ?>
                </div>            
                
                <table style="margin:20px auto;" class="table" >
                    <tr>
                        <th>No</th>
                        <th>NPM Mahasiswa</th>
                        <th>Nama Mahasiswa</th>
                        <th>Program Studi</th>
                        <th>Kelas</th>
                        <th>Semester</th>
                        <th colspan="4">Aksi</th>
                    </tr>

                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $mhs) :
                        ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $mhs->int_npm ?></td>
                            <td><?php echo $mhs->str_nama ?></td>
                            <td><?php echo $mhs->str_prodi ?></td>
                            <td><?php echo $mhs->str_kelas ?></td>
                            <td><?php echo $mhs->int_semester ?></td>
                            <td><?php echo anchor('Admin/detail/' . $mhs->id, '<div class="btn btn-warning btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
                            <td><?php echo anchor('Admin/edit/' . $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                            <td>
                                <a href="<?= site_url("Admin/hapus/".$mhs->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

<!-- btn btn-danger btn-sm 
<i class="fa fa-trash"></i>
-->


<script>
    $('.delete').click(function () {
        var ambil_id = $(this).attr('id');
        var data = 'id=' + ambil_id;
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
            }
        })
    })
</script>

<!--            <hr><div align="center"><h1>DATA TABEL</h1></div><hr>

            <script>
                $(document).ready(function () {
                    $('.table_Data').DataTable();
                });
            </script> 

            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-hover" data>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i < 50; $i++) {
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>Yoga</td>
                                    <td>5</td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </body>

            <script type="text/javascript">
                $(document).ready(function () {
                    $('.data').DataTable();
                });
            </script>
        -->

    </body>
