<?php
    include "functions.php";
    $id = @$_GET['id'];
    
    $sql_hapus = mysqli_query($con, "DELETE FROM kelas WHERE id_kelas ='$id'");
    if($sql_hapus) {
	echo '<script>alert("Berhasil Di Hapus."); document.location="kelas.php";</script>';
	} else {
	echo '<div class="alert alert-warning">Gagal Di Hapus!!.</div>';
	}