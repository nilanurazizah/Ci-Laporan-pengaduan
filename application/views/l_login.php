<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <title>Login</title>

    <style>
        .gambar{
            position: absolute;
            width: 400px;
            height: 400px;
            left: 400px;
            top: 300px;
        }
    </style>
    
</head>
<body  style="background-color: #AADA94">

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background: #7BADE8;" >
  <img src="<?php echo base_url().'assets/img/unnamed.png' ?>" alt="" style="width: 100px;"><a class="navbar-brand" href="#" style="font-size: 30px; font-family: candara;">Pengaduan Masyarakat Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('Homepage/beranda'); ?>" style="margin-left: 100px; font-size: 30px; font-family: candara;">Beranda</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Homepage/loginn'); ?>" style="margin-left: 100px; font-size: 30px; font-family: candara;">Login <span class="sr-only">(current)</span></a>
          </li>
    </ul>
  </div>
</nav>

<img src="<?php echo base_url().'assets/img/login.png' ?>" class="gambar">
<div><h2 style="padding: 300px; margin-left: 700px; font-size: 40px; font-family: candara;">SILAHKAN LOGIN</h2></div>
<form action="<?php echo site_url('Homepage/aksi_login')?>" method="post">
    <div class="form-group">
      <input type="text" class="form-control" name="username" placeholder="Username...." style="position: absolute; width: 500px; height: 50px; left: 900px; top: 400px;">
    </div>

    <div class="form-group">
      <input type="password" class="form-control" name="password" placeholder="Password...." style="position: absolute; width: 500px; height: 50px; left: 900px; top: 500px;">
    </div>
    
    <div class="form-group">
      <button type="submit" value="masuk" class="btn btn-success" style=" width: 500px; margin-left: 900px; margin-top: -100px; font-family: candara; font-size: 30px;">Masuk</button>
    </div>

    <div class="form-group">
      <p style="font-family: candara; font-size: 20px; text-align: center;">Belum Memiliki Akun? <a href="<?php echo site_url('Homepage/regis'); ?>">Daftar Sekarang</a></p>
    </div>
</form>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>