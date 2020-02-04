
<body class="bg-gradient-white">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">

                                <div class="text-center">
                                    <h1 class="h2 text-gray-900 mb-4">Login Admin</h1>
                                </div>

                                <form action="<?php echo base_url('login/aksi_login'); ?>" method="post" class="user">
                                    
                                    <div class="form-group">
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control input-lg" id="exampleInputEmail" placeholder="Username">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control input-lg" id="exampleInputPassword" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-info btn-block" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div>
                                        <a href="<?php echo base_url('Home'); ?>" ><div class="btn btn-primary btn-block">Batal</div></a>
                                    </div>
                                    <hr>
                                    <div align="center">
                                        <a href="<?php echo base_url('login_user'); ?>" >Login User</a>
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
