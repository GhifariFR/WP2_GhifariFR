<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Biodata Mahasiswa</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href= <?= base_url('assets/css/bootstrap.css') ?> >
</head>
<body>
	<!-- Form input biodata -->
	<div class="container min-vh-100 align-items-center d-flex justify-content-center">
	<!-- class container untuk men'center' form memakai 'min-vh-100 align-items-center' untuk vertical & 'd-flex justify-content-center' untuk horizontal-->
		<div class="card text-center">
			<div class="card-header">
				Form Biodata Mahasiswa
			</div>
			<div class="card-body">
				<form method="POST" action="<?= base_url('biodata/form') ?>">
					<p>Masukan biodata mahasiswa</p>
					<div class="row mb-3">
						<label for="nama" class="col-3 col-form-label">Nama</label>
						<div class="col-9">
							<input value="<?= set_value('nama') ?>" name="nama" type="text" class="form-control" requierd>
							<?php echo form_error('nama'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<label for="kelas" class="col-3 col-form-label">Kelas</label>
						<div class="col-9">
							<input value="<?= set_value('kelas') ?>" name="kelas" type="text" class="form-control" placeholder="17.6A.26" requierd>
							<?php echo form_error('kelas'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<label for="nim" class="col-3 col-form-label">Nim</label>
						<div class="col-9">
							<input value="<?= set_value('nim') ?>" name="nim" type="text" class="form-control" placeholder="17210721" requierd>
							<?php echo form_error('nim'); ?>
						</div>
					</div>
					<div class="row mb-3">
						<button type="submit" class="btn btn-primary">Kirim</button>
					</div>
				</form>
			</div>
			<div class="card-footer text-body-secondary">
				Mata Kuliah Web Programing II
			</div>
		</div>
	</div>
</body>
</html>
