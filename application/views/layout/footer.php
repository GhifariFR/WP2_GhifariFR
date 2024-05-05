<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href= <?= base_url('assets/css/bootstrap.css') ?> >
</head>
<body>
	<div class="container-fluid bg-body-tertiary">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 mt-4 border-top">
			<p class="col-md-4 mb-0 text-body-secondary">© 2024 Web Programing II</p>

			<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
				<svg class="bi me-2" width="40" height="32"><use xlink:href="#"></use></svg>
			</a>

			<ul class="nav col-md-4 justify-content-end">
				<li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
				<li class="nav-item"><a href="<?= base_url('biodata/index') ?>" class="nav-link px-2 text-body-secondary">Form</a></li>
				<li class="nav-item"><a href="<?= base_url('biodata/form') ?>" class="nav-link px-2 text-body-secondary">Biodata</a></li>
			</ul>
		</footer>
	</div>
</body>
</html>
