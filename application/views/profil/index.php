<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="app-main">
	<div class="container-fluid px-3 px-lg-4 py-4">

		<!-- Judul halaman -->
		<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
			<div>
				<h1 class="h3 fw-bold mb-1">Profil Mahasiswa</h1>
				<p class="text-secondary mb-0">Informasi akun dan data pribadi mahasiswa.</p>
			</div>
			<a href="<?= site_url('dashboard'); ?>" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2">
				<i class="bi bi-arrow-left"></i> Kembali ke Dashboard
			</a>
		</div>

		<!-- Breadcrumb -->
		<nav aria-label="breadcrumb" class="mt-3">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Profil</li>
			</ol>
		</nav>

		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success alert-dismissible fade show d-flex align-items-start gap-2 mt-3" role="alert">
				<i class="bi bi-check-circle-fill mt-1"></i>
				<div><?= html_escape($this->session->flashdata('success')); ?></div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
			</div>
		<?php endif; ?>

		<div class="row g-3 mt-1">

			<!-- Kartu ringkasan profil -->
			<div class="col-lg-4">
				<div class="card text-center mb-3">
					<div class="card-body p-4">
						<span class="avatar-initials avatar-lg mx-auto mb-3"><?= avatar_initials($profil['nama']); ?></span>
						<h2 class="h5 fw-bold mb-1"><?= html_escape($profil['nama']); ?></h2>
						<p class="text-secondary small mb-2"><?= html_escape($profil['prodi']); ?></p>
						<?= status_badge($profil['status']); ?>
						<hr class="my-4">
						<div class="d-grid gap-2 text-start small">
							<div class="d-flex align-items-center gap-2">
								<i class="bi bi-hash text-primary"></i>
								<span class="text-secondary">NIM:</span>
								<span class="fw-semibold"><?= html_escape($profil['nim']); ?></span>
							</div>
							<div class="d-flex align-items-center gap-2">
								<i class="bi bi-envelope text-primary"></i>
								<span class="text-secondary">Email:</span>
								<a href="mailto:<?= html_escape($profil['email']); ?>" class="text-decoration-none text-truncate">
									<?= html_escape($profil['email']); ?>
								</a>
							</div>
							<div class="d-flex align-items-center gap-2">
								<i class="bi bi-telephone text-primary"></i>
								<span class="text-secondary">Telepon:</span>
								<span class="fw-semibold"><?= html_escape($profil['telepon']); ?></span>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header py-3">
						<h2 class="h6 fw-bold mb-0">Informasi Akademik</h2>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item d-flex justify-content-between">
							<span class="text-secondary">Angkatan</span>
							<span class="fw-semibold"><?= html_escape($profil['angkatan']); ?></span>
						</li>
						<li class="list-group-item d-flex justify-content-between">
							<span class="text-secondary">Semester</span>
							<span class="fw-semibold"><?= html_escape($profil['semester']); ?></span>
						</li>
						<li class="list-group-item d-flex justify-content-between">
							<span class="text-secondary">Status</span>
							<?= status_badge($profil['status']); ?>
						</li>
					</ul>
				</div>
			</div>

			<!-- Kartu form profil -->
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center py-3">
						<h2 class="h6 fw-bold mb-0">Edit Data Profil</h2>
						<span class="badge text-bg-light border">Mode Demo</span>
					</div>
					<div class="card-body p-3 p-lg-4">
						<form action="<?= site_url('profil'); ?>" method="post" class="needs-validation" novalidate>
							<div class="row g-3">
								<div class="col-md-6">
									<label for="profil-nama" class="form-label">Nama Lengkap</label>
									<input type="text" class="form-control" id="profil-nama" name="nama" autocomplete="name"
										value="<?= html_escape($profil['nama']); ?>" required>
									<div class="invalid-feedback">Nama wajib diisi.</div>
								</div>

								<div class="col-md-6">
									<label for="profil-nim" class="form-label">NIM</label>
									<input type="text" class="form-control" id="profil-nim" name="nim" autocomplete="off"
										value="<?= html_escape($profil['nim']); ?>" readonly>
									<div class="form-text">NIM tidak dapat diubah melalui halaman ini.</div>
								</div>

								<div class="col-md-6">
									<label for="profil-prodi" class="form-label">Program Studi</label>
									<select class="form-select" id="profil-prodi" name="prodi" required>
										<option value="Teknik Informatika" <?= $profil['prodi'] === 'Teknik Informatika' ? 'selected' : ''; ?>>Teknik Informatika</option>
										<option value="Sistem Informasi" <?= $profil['prodi'] === 'Sistem Informasi' ? 'selected' : ''; ?>>Sistem Informasi</option>
										<option value="Teknik Komputer" <?= $profil['prodi'] === 'Teknik Komputer' ? 'selected' : ''; ?>>Teknik Komputer</option>
										<option value="Teknologi Informasi" <?= $profil['prodi'] === 'Teknologi Informasi' ? 'selected' : ''; ?>>Teknologi Informasi</option>
									</select>
									<div class="invalid-feedback">Pilih program studi.</div>
								</div>

								<div class="col-md-6">
									<label for="profil-email" class="form-label">Email</label>
									<input type="email" class="form-control" id="profil-email" name="email" autocomplete="email"
										value="<?= html_escape($profil['email']); ?>" required>
									<div class="invalid-feedback">Masukkan email yang valid.</div>
								</div>

								<div class="col-md-6">
									<label for="profil-telepon" class="form-label">Nomor Telepon</label>
									<input type="tel" class="form-control" id="profil-telepon" name="telepon" autocomplete="tel"
										value="<?= html_escape($profil['telepon']); ?>" pattern="[0-9+\-\s]{8,20}" required>
									<div class="invalid-feedback">Masukkan nomor telepon yang valid.</div>
								</div>

								<div class="col-md-6">
									<label for="profil-status" class="form-label">Status Akademik</label>
									<input type="text" class="form-control" id="profil-status" name="status"
										value="<?= html_escape($profil['status']); ?>" readonly>
								</div>

								<div class="col-12">
									<label for="profil-alamat" class="form-label">Alamat</label>
									<textarea class="form-control" id="profil-alamat" name="alamat" autocomplete="street-address" rows="3" required><?= html_escape($profil['alamat']); ?></textarea>
									<div class="invalid-feedback">Alamat wajib diisi.</div>
								</div>
							</div>

							<div class="alert alert-info d-flex align-items-start gap-2 mt-4 mb-0 small" role="alert">
								<i class="bi bi-info-circle-fill mt-1"></i>
								<div>
									Form ini hanya mendemonstrasikan komponen Bootstrap. Data tidak disimpan
									ke database sehingga perubahan akan kembali ke nilai awal setelah halaman dimuat ulang.
								</div>
							</div>

							<hr class="my-4">

							<div class="d-flex flex-column flex-sm-row gap-2 justify-content-end">
								<button type="reset" class="btn btn-outline-secondary">
									<i class="bi bi-arrow-counterclockwise me-1"></i> Reset
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="bi bi-save me-1"></i> Simpan Perubahan
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>

