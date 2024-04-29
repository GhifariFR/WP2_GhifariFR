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

	<!-- Navbar bootsrap -->
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container">
			<a class="navbar-brand" href="#">Ghifari</a>
			<div>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('biodata/index') ?>">Form</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?= base_url('biodata/form') ?>">Biodata</a>
						</li>
					</ul>
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>

	<!-- Biodata -->
	<div class="container min-vh-100 align-items-center d-flex justify-content-center">
	<!-- class container untuk men'center' form memakai 'min-vh-100 align-items-center' untuk vertical & 'd-flex justify-content-center' untuk horizontal-->
		<div class="card text-center">
			<div class="card-header">
				Biodata Mahasiswa
			</div>
			<div class="card-body">
				<h5 class="card-title"><?= $nama; ?></h5>
				<p class="card-text">
					Kelas: <?= $kelas; ?>
					Nim: <?= $nim; ?>
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
