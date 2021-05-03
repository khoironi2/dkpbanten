    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div style="text-align: center;">
                                        <img height="100" src="<?= base_url('assets/dosen/') ?>images/Logo-Binis-Digital-Akbara.png" alt="POLITEKNIK AKBARA SURAKARTA">
                                        <p class="mb-4" style="font-size: 12px; text-align:center;">Silahkan login dengan NIK dan Password AKBARA Anda</p>
                                        <?= $this->session->flashdata('error_login'); ?>
                                    </div>
                                    <form action="<?= base_url('auth/loginForm') ?>" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>NIK</strong></label>
                                            <input type="text" class="form-control" name="nik" id="nik" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" id="password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            <!-- <a class="btn btn-primary" href="<?= base_url('auth/register') ?>">register</a> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>