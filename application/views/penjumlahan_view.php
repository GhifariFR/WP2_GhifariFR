<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Penjumlahan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href= <?= base_url('assets/css/bootstrap.css') ?> >
</head>
<body>
	<p>penjumlahan</p>
	<p>Nilai 1 = <?= $nilai1; ?></p>
	<p>Nilai 1 = <?= $nilai2; ?></p>
	<p>hasil penjumlahan = <?= $nilai1 . "+" . $nilai2 . "=" . $hasil;?></p>
</body>
</html>
