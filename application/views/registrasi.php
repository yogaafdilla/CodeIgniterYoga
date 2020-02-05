
<body class="bg-gradient-white">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">

                                <form action="<?= base_url('Register/daftar'); ?>" method="post">
                                    <h2 class="text-center">Register</h2>

                                    <div class="form-group">
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label>NPM</label>
                                        <input  type="text" name="npm" class="form-control" placeholder="Masukan NPM" maxlength="8" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password1" class="form-control" placeholder="Masukan Password Baru" required="required" id="txtPassword">
                                    </div>
                                    <div class="form-group">
                                        <label>Retype Password</label>
                                        <input type="password" name="password2" class="form-control" placeholder="Masukan Kembali Password" required="required" id="txtConfirmPassword">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info btn-block" id="btnSubmit">Register</button>
                                    </div>

                                    <div>
                                        <a href="<?php echo base_url('Login_user'); ?>" ><div class="btn btn-primary btn-block">Kembali</div></a>
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
