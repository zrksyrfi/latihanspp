<?php 
include '../koneksi.php';

$id_kelas = $_POST['id_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keakhlian = $_POST['kompetensi_keakhlian'];

mysqli_query($koneksi,"update kelas set nama_kelas='$nama_kelas', kompetensi_keakhlian='$kompetensi_keakhlian' where id_kelas='$id_kelas'");
header("location:kelas.php?info=update");
?>