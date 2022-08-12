<?php
      include "functions.php";
            $id_pembayaran        = $_POST['id_pembayaran'];
            $id_petugas          = $_POST['id_petugas'];
            $nisn          = $_POST['nisn'];
            $tgl_pembayaran  = $_POST['tgl_pembayaran'];
            $bulan_dibayar    = $_POST['bulan_dibayar'];
            $tahun_dibayar = $_POST['tahun_dibayar'];
            $id_spp       = $_POST['id_spp'];
            $jumlah_bayar      = $_POST['jumlah_bayar'];


      
      // $id = @$_GET['id'];
      $sql_update = mysqli_query($con, "UPDATE pembayaran SET id_pembayaran= '$id_pembayaran', id_petugas='$id_petugas', nisn='$nisn', tgl_pembayaran='$tgl_pembayaran', bulan_dibayar='$bulan_dibayar', tahun_dibayar='$tahun_dibayar', id_spp='$id_spp' , jumlah_bayar= '$jumlah_bayar' WHERE id_pembayaran='$id_pembayaran'");

      if($sql_update) {
      echo '<script>alert("Berhasil Merubah Data."); document.location="bayar.php";</script>';
      } else {
      echo '<div class="alert alert-warning">Gagal melakukan update data.</div>';
      }
?>