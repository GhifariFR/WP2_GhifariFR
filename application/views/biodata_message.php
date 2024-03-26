<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Biodata Mahasiswa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href= <?= base_url('assets/css/bootstrap.css') ?> >
</head>
<body>
	<div class="card text-center">
  		<div class="card-header">
    		Biodata Mahasiswa
  		</div>
  		<div class="card-body">
    		<h5 class="card-title">Ghifari Fatihah Rabbani</h5>
			<img src="<?= base_url('assets/img/Default_pfp.png') ?>" class="w-25 h-25 img-thumbnail" >
    		<p class="card-text">Mahasiswa Universitas Bina Sarana Informatika</p>
			<p class="card-text">Menjalankan Perkuliahan Smester-6</p>
			<p class="card-text">Pada Kampus UBSI Slipi</p>
  		</div>
		<div class="card-footer text-body-secondary">
			Mata Kuliah Web Programing II
		</div>
	</div>
</body>
</html>
