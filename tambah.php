<?php 
include 'koneksi.php';
require_once('vendor/autoload.php');
use Faker\Factory;
$faker = Factory::create('id_ID');
for($i=1;$i<=50;$i++){
	$nama = $faker->name;
	$alamat = $faker->address;
	$umur= $faker->numberBetween(25,40);
	mysqli_query($koneksi,"INSERT INTO pegawai (pegawai_id,pegawai_nama,pegawai_umur,pegawai_alamat) VALUES(NULL,'$nama','$umur','$alamat')");
}
header("location:index.php");
?>