<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="app-main">
	<div class="container-fluid px-3 px-lg-4 py-4">

		<!-- Judul halaman -->
		<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
			<div>
				<h1 class="h3 fw-bold mb-1">Tambah Mahasiswa</h1>
				<p class="text-secondary mb-0">Lengkapi form berikut untuk menambahkan data mahasiswa baru.</p>
			</div>
			<a href="<?= site_url('mahasiswa'); ?>" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
				<i class="bi bi-arrow-left"></i> Kembali ke Data Mahasiswa
			</a>
		</div>

		<!-- Breadcrumb -->
		<nav aria-label="breadcrumb" class="mt-3">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="<?= site_url('mahasiswa'); ?>">Data Mahasiswa</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tambah Mahasiswa</li>
			</ol>
		</nav>

		<?php if (validation_errors()): ?>
			<div class="alert alert-danger d-flex align-items-start gap-2 mt-3" role="alert">
				<i class="bi bi-exclamation-triangle-fill mt-1"></i>
				<div>
					<strong>Periksa kembali data yang diisi.</strong>
					<?= validation_errors('<div class="small">', '</div>'); ?>
				</div>
			</div>
		<?php endif; ?>

		<div class="row g-3 mt-1">

			<!-- Kolom form -->
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header py-3">
						<h2 class="h6 fw-bold mb-0">Form Data Mahasiswa</h2>
					</div>
					<div class="card-body p-3 p-lg-4">

						<!--
							needs-validation + novalidate = validasi HTML5 memakai gaya Bootstrap.
							JavaScript di assets/js/app.js akan menambahkan class was-validated.
						-->
						<form action="<?= site_url('mahasiswa/tambah'); ?>" method="post" class="needs-validation" novalidate>

							<div class="row g-3">
								<div class="col-md-6">
									<label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
									<div class="input-group has-validation">
										<span class="input-group-text bg-white"><i class="bi bi-hash"></i></span>
										<input type="text" class="form-control <?= form_error('nim') ? 'is-invalid' : ''; ?>"
											id="nim" name="nim" value="<?= set_value('nim'); ?>" autocomplete="off"
											placeholder="Contoh: 20230015" inputmode="numeric" pattern="[0-9]{8,12}"
											minlength="8" maxlength="12" required>
										<div class="invalid-feedback">NIM wajib diisi, berupa 8&ndash;12 digit angka.</div>
									</div>
									<?php if (form_error('nim')): ?>
										<div class="text-danger small mt-1"><?= form_error('nim'); ?></div>
									<?php endif; ?>
								</div>

								<div class="col-md-6">
									<label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
									<div class="input-group has-validation">
										<span class="input-group-text bg-white"><i class="bi bi-person"></i></span>
										<input type="text" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>"
											id="nama" name="nama" value="<?= set_value('nama'); ?>" autocomplete="name"
											placeholder="Contoh: Rina Marlina" minlength="3" maxlength="100" required>
										<div class="invalid-feedback">Nama wajib diisi minimal 3 karakter.</div>
									</div>
									<?php if (form_error('nama')): ?>
										<div class="text-danger small mt-1"><?= form_error('nama'); ?></div>
									<?php endif; ?>
								</div>

								<div class="col-md-6">
									<label for="prodi" class="form-label">Program Studi <span class="text-danger">*</span></label>
									<select class="form-select <?= form_error('prodi') ? 'is-invalid' : ''; ?>"
										id="prodi" name="prodi" required>
										<option value="" <?= set_value('prodi') === '' ? 'selected' : ''; ?> disabled>-- Pilih Program Studi --</option>
										<?php foreach ($prodi_options as $prodi): ?>
											<option value="<?= html_escape($prodi); ?>" <?= set_select('prodi', $prodi); ?>>
												<?= html_escape($prodi); ?>
											</option>
										<?php endforeach; ?>
									</select>
									<div class="invalid-feedback">Silakan pilih program studi.</div>
									<?php if (form_error('prodi')): ?>
										<div class="text-danger small mt-1"><?= form_error('prodi'); ?></div>
									<?php endif; ?>
								</div>

								<div class="col-md-6">
									<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
									<div class="input-group has-validation">
										<span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
										<input type="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>"
											id="email" name="email" value="<?= set_value('email'); ?>" autocomplete="email"
											placeholder="nama@example.com" required>
										<div class="invalid-feedback">Masukkan alamat email yang valid.</div>
									</div>
									<?php if (form_error('email')): ?>
										<div class="text-danger small mt-1"><?= form_error('email'); ?></div>
									<?php endif; ?>
								</div>
							</div>

							<hr class="my-4">

							<div class="d-flex flex-column flex-sm-row gap-2 justify-content-end">
								<a href="<?= site_url('mahasiswa'); ?>" class="btn btn-outline-secondary">
									<i class="bi bi-x-lg me-1"></i> Batal
								</a>
								<button type="submit" class="btn btn-primary">
									<i class="bi bi-save me-1"></i> Simpan Data
								</button>
							</div>
						</form>

					</div>
				</div>
			</div>

			<!-- Kolom panduan -->
			<div class="col-lg-4">
				<div class="card mb-3">
					<div class="card-header py-3">
						<h2 class="h6 fw-bold mb-0"><i class="bi bi-info-circle me-1"></i> Panduan Pengisian</h2>
					</div>
					<div class="card-body">
						<ul class="list-unstyled small mb-0 d-grid gap-3">
							<li class="d-flex gap-2">
								<i class="bi bi-1-circle text-primary"></i>
								<span><strong>NIM</strong> terdiri dari 8&ndash;12 digit angka dan harus unik.</span>
							</li>
							<li class="d-flex gap-2">
								<i class="bi bi-2-circle text-primary"></i>
								<span><strong>Nama lengkap</strong> diisi sesuai dokumen akademik.</span>
							</li>
							<li class="d-flex gap-2">
								<i class="bi bi-3-circle text-primary"></i>
								<span><strong>Program studi</strong> dipilih dari daftar yang tersedia.</span>
							</li>
							<li class="d-flex gap-2">
								<i class="bi bi-4-circle text-primary"></i>
								<span><strong>Email</strong> menggunakan format alamat email yang valid.</span>
							</li>
						</ul>
					</div>
				</div>

				<div class="card">
					<div class="card-header py-3">
						<h2 class="h6 fw-bold mb-0"><i class="bi bi-braces me-1"></i> Komponen Bootstrap</h2>
					</div>
					<div class="card-body d-flex flex-wrap gap-2">
						<span class="badge text-bg-light border">Form Control</span>
						<span class="badge text-bg-light border">Input Group</span>
						<span class="badge text-bg-light border">Form Select</span>
						<span class="badge text-bg-light border">Validation</span>
						<span class="badge text-bg-light border">Button</span>
						<span class="badge text-bg-light border">Alert</span>
					</div>
					<div class="card-footer bg-white small text-secondary">
						Data pada praktikum ini tidak disimpan ke database. Fokus praktikum adalah integrasi
						Bootstrap, validasi form, dan pemanggilan view melalui controller.
					</div>
				</div>
			</div>

		</div>
	</div>
</main>

