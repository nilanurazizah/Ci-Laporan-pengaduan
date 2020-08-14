<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <title><?php echo $title;?></title>
</head>
<body style="background-color: #FF8C00">
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-info">
  <img src="<?php echo base_url().'assets/img/unnamed.png' ?>" alt="" style="width: 100px;"><a class="navbar-brand" style="font-size: 30px; font-family: candara;">Pengaduan Masyarakat Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" 
    aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="#" style="margin-left: 100px; font-size: 30px; font-family: candara; color: white;">Beranda</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('Homepage/form_lapor'); ?>" style="margin-left: 100px; font-size: 30px; font-family: candara; color: white;">
        Input Pengaduan<span class="sr-only">(current)</span></a>
    </li>
    </ul>
  </div>
</nav>

<!-- <div class="container-fluid bg-light" style="margin-top: -10px;"> -->

<!-- </div> -->

<center>
    <h1 class="display-4" style="margin-top: 100px;">Form Pengaduan</h1>
    <p class="lead" style="font-size: 30px;">Masukkan Data Laporan</p>
</center>

<hr>

    <div class="card-body" style="margin-top: -10px; background-color: #F0F8FF;">
      <!-- <div class="card card-2"> -->
      <form action="">
        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Nama</label>
            <input type="text" class="form-control" id="nama" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Tgl_pengaduan</label>
            <input type="date" class="form-control" id="nik" style="width: 500px; margin-left: 330px;">
        </div>
        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Isi Pengaduan</label>
            <br>
            <textarea name="isi_lapor" id="" cols="80" rows="10" style="margin-left: 330px;"></textarea>
            <!-- <input type="text" class="form-control" id="nama" style="width: 500px; margin-left: 330px;"> -->
        </div>
    </form>
        <a href="#" type="submit" class="btn btn-primary" style="margin-left: 1500px; width: 20%; font-size: 30px;">Kirim Laporan</a>
      </div>
    </div>

</body>
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>