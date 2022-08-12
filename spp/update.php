<?php
      include "functions.php";
            $id_spp       = $_POST['id_spp'];
            $tahun         = $_POST['tahun'];
            $nominal          = $_POST['nominal'];
      


      
      // $id = @$_GET['id'];
      $sql_update = mysqli_query($con, "UPDATE spp SET id_spp= '$id_spp', tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'");

      if($sql_update) {
      echo '<script>alert("Berhasil Merubah Data."); document.location="spp.php";</script>';
      } else {
      echo '<div class="alert alert-warning">Gagal melakukan update data.</div>';
      }
?>