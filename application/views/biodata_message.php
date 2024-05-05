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
	<!-- Biodata -->
	<div class="container min-vh-100 align-items-center d-flex justify-content-center">
	<!-- class container untuk men'center' form memakai 'min-vh-100 align-items-center' untuk vertical & 'd-flex justify-content-center' untuk horizontal-->
		<div class="card text-center">
			<div class="card-header">
				Biodata Mahasiswa
			</div>
			<div class="card-body">
				<h5 class="card-title"><?= is_null($nama) ? 'null' : $nama; ?></h5>
				<p class="card-text">
					Kelas: <?= is_null($kelas) ? 'null' : $kelas; ?>
					Nim: <?= is_null($nim) ? 'null' : $nim; ?>
				</p>
				<img src="<?= base_url('assets/img/Default_pfp.png') ?>" class="w-25 h-25 img-thumbnail">
				<p class="card-text">
					Mahasiswa Universitas Bina Sarana Informatika</br>
					Menjalankan Perkuliahan Smester-6</br>
					Pada Kampus UBSI Slipi
				</p>
			</div>
			<div class="card-footer text-body-secondary">
				Mata Kuliah Web Programing II
			</div>
		</div>
	</div>
</body>
</html>
