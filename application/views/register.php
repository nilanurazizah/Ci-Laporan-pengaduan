<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <title></title>

    <style>
        .tulisan{
            text-align: center;
            padding: 5%;
            font-weight: bold;
            font-size: 50px;
            font-family: candara;
        }
    </style>

</head>
<body style="background-color: #AADA94">
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
            <a class="nav-link" href="<?php echo site_url('Homepage/login'); ?>" style="margin-left: 100px; font-size: 30px; font-family: candara;">Login <span class="sr-only">(current)</span></a>
          </li>
        <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>

<br><br><br>
    <div class="container">
        <div><h2 class="tulisan">Register</h2>
            <center> <img src="<?php echo base_url().'assets/img/login.png' ?>" style="width: 200px; margin-top: -50px"> </center></div>
        <form action="<?php echo site_url('Homepage/simpan_data') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Nama</label>
            <input type="text" class="form-control" name="namaa" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">NIK</label>
            <input type="number" class="form-control" name="nikk" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Username</label>
            <input type="text" class="form-control" name="userr" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Password</label>
            <input type="password" class="form-control" name="pass" style="width: 500px; margin-left: 330px;">
        </div>

        <div class="form-group">
            <label style="margin-left: 330px; font-family: candara; font-size: 20px;">Telepon</label>
            <input type="text" class="form-control" name="telp" style="width: 500px; margin-left: 330px;">
        </div>
    <br>
        <div class="form-group">
            <button type="submit" class="btn btn-success" style="margin-left: 330px; width: 500px; font-family: candara; font-size: 25px;">
            <a href="<?php echo site_url('Homepage/loginn') ?>"></a> Register</button>
            <p><a style="font-family: candara; font-size: 20px; text-align: center; margin-left: 400px;" href="<?php echo site_url('Homepage/login')?>">Already have an account? Sign in here!</a></p>
        </div>
        </form>
    </div>

    <div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>NIK</td>
                        <td>Nama</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>No. Telepon</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <?php  
                    if ($c_masyarakat > 0)
                    {
                        foreach ($masyarakat as $datas)
                    {
                ?>
                    <tr>
                        <td><?php echo $datas->nik;?></td>
                        <td><?php echo $datas->nama;?></td>
                        <td><?php echo $datas->username;?></td>
                        <td><?php echo $datas->password;?></td>
                        <td><?php echo $datas->telepon ?></td>
                        <td>
                            <div class="col-12">
                                <button class="btn btn-success btn-sm edit_data" style="width: 100%;">EDIT</button>
                            </div>
                            <div class="col-12 mt-2">
                                <button id="" class="btn btn-danger btn-sm hapus_data" style="width: 100%;">HAPUS</button>
                            </div>
                        </td>
                    </tr>
                        <?php }
                        }
                        else {
                        ?>
                    <!-- <tr>
                        <td colspan="8"><center>Data user kosong!</center></td>
                        </tr> -->
                    
                        <?php
                    }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>