<?php 
include '../koneksi.php';

$nama_kelas = $_POST['nama_kelas'];
$kompetensi_keakhlian = $_POST['kompetensi_keakhlian'];

mysqli_query($koneksi,"insert into kelas values('','$nama_kelas','$kompetensi_keakhlian')");
header("location:kelas.php?info=simpan");
?>