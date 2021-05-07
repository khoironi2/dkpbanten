<!-- main-header navbar navbar-expand navbar-default navbar-dark navbar-cyan -->
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-default navbar-dark navbar-cyan">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <!--  <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <div class="user-panel">
                    <!-- <div class="image"> -->
                    <img src="<?= base_url('assets/') ?>images/profile/<?= $users['gambar_pegawai']; ?>" class="img-circle" alt="User Image">
                    <?php echo $this->session->userdata['nama']; ?>
                </div>
                <!-- </div> -->

            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login/logout') ?>" role="button">
                <i class="fas fa-sign-out-alt" title="Sign Out"></i>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->