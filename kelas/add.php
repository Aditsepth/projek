<?php

include "functions.php";
?>

<!DOCTYPE html>
<html style="margin: -32px;height: 263px;width: -273px;padding: -300px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Suhu</title>
    <link rel="stylesheet" href="<?=base_url('assetss/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency-1.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/Fixed-navbar-starting-with-transparency.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?=base_url('assetss/assets/css/tabela-mloureiro1973.css'); ?>">
</head>

<body style="margin: 173px;padding: -25px;height: 675px;width: 670px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navbar-transparency" style="background-color: #f3fbff;height: 13px;">
        <a class="navbar-brand" href="#"><img src="smk5.jpg" height="50px" width="50px"></a>
         <div class="container">
            <div class="text-justify text-sm-left"><a class="navbar-brand" href="#">Selamat datang Di SMK Negeri 5 Kota Bekasi<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                   
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Siswa </a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="<?=base_url('warga/warga.php') ?>">Kelas</a>
                          <a class="dropdown-item" role="presentation" href="<?=base_url('penduduk/warga.php') ?>">Nama Siswa</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Pembayaran</a>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" role="presentation" href="<?=base_url('warga/warga.php') ?>">Pembayaran SPP</a>
                          <a class="dropdown-item" role="presentation" href="<?=base_url('penduduk/warga.php') ?>">Total SPP</a>
                          
                        </div>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div>
                <h1 style="height: 54px;margin: 36px;width: 1005px;padding: -60px;">Tambah Data kelas</h1>
            </div>
<div class="box-header">
<div class="pull-right">
                    <a href="siswa.php" class="btn btn-warning btn-flat">
                        <i class="fa fa-undo"></i> Back
                    </a>
                    </div>
                    </div>
<div class="row">
  <div class="col-md-12" style="height: 504px;margin: 100px;padding: -10px;">
        <form action="" method="post">
        <div class="form-group">
                <label for="id_kelas">Id Kelas</label>
                <input type="text" name="id_kelas" id="id_kelas" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required>
            </div>
             <div class="form-group">
                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" class="form-control" required>
            </div>
             
        
                <br>
           
            <div class="form-group pull-right">
                <input type="submit" name="submit" value="Submit" class="btn btn-success">
            </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $id_kelas        = $_POST['id_kelas'];
            $nama_kelas          = $_POST['nama_kelas'];
            $kompetensi_keahlian       = $_POST['kompetensi_keahlian'];
            

            $cek = mysqli_query($con, "SELECT * FROM kelas WHERE id_kelas='$id_kelas'") or die(mysqli_error($con));
            
            if(mysqli_num_rows($cek) == 0){
                $sql = mysqli_query($con, "INSERT INTO kelas(id_kelas, nama_kelas, kompetensi_keahlian) VALUES('$id_kelas', '$nama_kelas', '$kompetensi_keahlian')") or die(mysqli_error($con));
                
                if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="kelas.php";</script>';
                }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                }
            }else{
                echo '<div class="alert alert-warning">Gagal, No KK sudah terdaftar.</div>';
            }
        }



?>
        </div>
    </div>
    <script src="<?=base_url('assetss/assets/js/jquery.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?=base_url('assetss/assets/js/Fixed-navbar-starting-with-transparency.js'); ?>"></script>
</body>

</html>