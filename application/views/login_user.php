
<body class="bg-gradient-white">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">

                                <div class="text-center">
                                    <h1 class="h2 text-gray-900 mb-4">Login Mahasiswa</h1>
                                </div>

                                <form action="<?php echo base_url('login_user/aksi_login'); ?>" method="post" class="user">

                                    <div class="form-group">
                                        <?= $this->session->flashdata('message_user'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="npm" class="form-control input-lg" id="exampleInputEmail"  placeholder="NPM Anda">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control input-lg" id="exampleInputPassword" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-block">Login</button>
                                        <!-- <a href="<?php echo base_url('Myadmin/user'); ?>" ><div class="btn btn-info btn-block">Login</div></a> -->
                                    </div>
                                    <div>
                                        <a href="<?php echo base_url('Home'); ?>" ><div class="btn btn-primary btn-block">Batal</div></a>
                                    </div>
                                    <br>
                                    <div align="center">
                                        <a href="<?php echo base_url('Register'); ?>" >Belum memiliki akun? klik disini untuk daftar</a>
                                    </div>
                                    <hr>
                                    <div align="center">
                                        <a href="<?php echo base_url('Login'); ?>" >Login Admin</a>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
