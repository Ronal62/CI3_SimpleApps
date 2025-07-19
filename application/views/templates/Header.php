<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?> - Aplikasi UTS</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
		integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<style>
		.navbar-custom {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			z-index: 1000;
			/* Keep navbar above content */
			background-color: #007bff;
			/* Consistent primary color */
		}

		.navbar-brand,
		.nav-link {
			color: #ffffff !important;
			transition: color 0.3s ease;
		}

		.nav-link:hover {
			color: #e0e0e0 !important;
		}

		/* Main content container */
		.content-container {
			padding-top: 70px;
			/* Space for fixed navbar (adjust based on navbar height) */
			padding-bottom: 70px;
			/* Space for fixed footer */
			min-height: calc(100vh + 200px);
			/* Extra height for scrolling */
			overflow-y: auto;
			/* Enable vertical scrolling */
		}

		/* Footer styles */
		footer {
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100%;
			background-color: #343a40;
			color: #ffffff;
			padding: 10px 0;
			z-index: 1;
			/* Keep footer below content */
		}

		/* Ensure text centering and spacing */
		footer p {
			margin: 0;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-custom">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">
				Aplikasi Manajemen Mahasiswa 
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link <?php echo ($title == 'Dashboard') ? 'active' : ''; ?>"
							href="<?php echo base_url(); ?>">Dashboard</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle <?php echo (in_array($title, ['Data Mahasiswa', 'Data Mata Kuliah']) ? 'active' : ''); ?>"
							href="#" id="dataDropdown" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Data
						</a>
						<div class="dropdown-menu" aria-labelledby="dataDropdown">
							<a class="dropdown-item <?php echo ($title == 'Data Mahasiswa') ? 'actJive' : ''; ?>"
								href="<?php echo base_url('main/mahasiswa'); ?>">Mahasiswa</a>
							<a class="dropdown-item <?php echo ($title == 'Data Mata Kuliah') ? 'active' : ''; ?>"
								href="<?php echo base_url('main/matakuliah'); ?>">Mata Kuliah</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo ($title == 'Kontak') ? 'active' : ''; ?>"
							href="<?php echo base_url('main/kontak'); ?>">Kontak</a>
					</li>
				</ul>
				<span class="navbar-text text-white">
					Universitas Nurul Jadid
				</span>
			</div>
		</div>
	</nav>
	<div class="container content-container py-3">
