<?php
include 'koneksi.php';
$nama_guru = $_GET['nama_pelanggan'];
$query = mysqli_query($koneksi, "select nama_pelanggab from admin where nama_pelanggan='$nama_pelanggan'");
$mapel = mysqli_fetch_array($query);
$data = array(
    'nama_pelanggan' => $mapel['nama_pelanggan']);
echo json_encode($data);
