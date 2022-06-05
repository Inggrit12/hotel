<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.83.1">
  <title>Hotel Santuy</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">



  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url() . '/assets/dist/css/bootstrap.min.css' ?>" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="navbar-top-fixed.css" rel="stylesheet">
</head>

<body>



  <main class="container">
    <div class="bg-light p-5 rounded">
      <h1>Navbar example</h1>
      <?php echo form_open('login/daftar'); ?>

      <p>NIM:</p>
      <p><input type="text" name="nim" value="<?php echo set_value('nim'); ?>" class="form-control" /></p>
      <p> <?php echo form_error('nim'); ?> </p>

      <p>Nama:</p>
      <p><input type="text" name="nama" value="<?php echo set_value('nama'); ?>" class="form-control" /></p>
      <p> <?php echo form_error('nama'); ?> </p>

      <p>Username:</p>
      <p><input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" /></p>
      <p> <?php echo form_error('username'); ?> </p>

      <p>Password:</p>
      <p><input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" /></p>
      <p> <?php echo form_error('password'); ?> </p>

      <p><input type="submit" name="btnSubmit" value="Daftar" class="btn btn-primary form-control" /></p>
      <a href="<?php echo base_url() . 'index.php/user' ?>" class="btn btn-danger form-control">Kembali ke Beranda</a>

      <?php echo form_close(); ?>
    </div>
  </main>


  <script src="<?php echo base_url() . '/assets/dist/js/bootstrap.bundle.min.js' ?>"></script>


</body>

</html>