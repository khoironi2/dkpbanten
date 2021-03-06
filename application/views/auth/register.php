<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Tutorial Codeigniter Membuat Hak Akses Menggunakan Jquery dan Mysql">
  <meta name="author" content="Ilmucoding">
  <title>Register</title>
  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" action="<?= base_url('Auth/registerForm') ?>" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Registration</h1>
    <?php
    $errors = $this->session->flashdata('errors');
    if (!empty($errors)) {
    ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger text-center">
            <?php foreach ($errors as $key => $error) { ?>
              <?php echo "$error<br>"; ?>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php
    }
    if ($msg = $this->session->flashdata('error_login')) { ?>
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-danger text-center">
            <?= $msg ?>
          </div>
        </div>
      </div>
    <?php } ?>
    <input name="nik" type="text" class="form-control" id="nik" placeholder="NIK" required autofocus>
    <div style="margin-top:10px"></div>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
  </form>
</body>

</html>