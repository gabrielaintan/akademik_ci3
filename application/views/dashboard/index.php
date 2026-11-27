<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$persen_aktif = $total_mahasiswa > 0 ? round(($total_aktif / $total_mahasiswa) * 100) : 0;
$persen_cuti  = $total_mahasiswa > 0 ? round(($total_cuti / $total_mahasiswa) * 100) : 0;
$persen_lulus = $total_mahasiswa > 0 ? round(($total_lulus / $total_mahasiswa) * 100) : 0;
?>
<main class="app-main">
	<div class="container-fluid px-3 px-lg-4 py-4">

		<!-- Judul halaman -->
		<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
			<div>
				<h1 class="h3 fw-bold mb-1">Dashboard</h1>
				<p class="text-secondary mb-0">Ringkasan data mahasiswa Program Studi Teknologi Informasi.</p>
			</div>
			<a href="<?= site_url('mahasiswa/tambah'); ?>" class="btn btn-primary d-inline-flex align-items-center gap-2">
				<i class="bi bi-plus-lg"></i> Tambah Mahasiswa
			</a>
		</div>

		<!-- Breadcrumb Bootstrap -->
		<nav aria-label="breadcrumb" class="mt-3">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
			</ol>
		</nav>

		<!-- Kartu statistik -->
		<div class="row g-3 mt-2">
			<div class="col-sm-6 col-xl-3">
				<div class="card stat-card h-100">
					<div class="card-body d-flex align-items-start justify-content-between gap-3">
						<div>
							<p class="text-secondary small text-uppercase fw-semibold mb-2">Total Mahasiswa</p>
							<h2 class="display-6 fw-bold mb-1"><?= (int) $total_mahasiswa; ?></h2>
							<span class="small text-secondary">Seluruh data mahasiswa</span>
						</div>
						<span class="stat-icon bg-primary bg-opacity-10 text-primary">
							<i class="bi bi-people"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-3">
				<div class="card stat-card h-100">
					<div class="card-body d-flex align-items-start justify-content-between gap-3">
						<div>
							<p class="text-secondary small text-uppercase fw-semibold mb-2">Mahasiswa Aktif</p>
							<h2 class="display-6 fw-bold mb-1"><?= (int) $total_aktif; ?></h2>
							<span class="small text-success"><i class="bi bi-arrow-up-right"></i> <?= $persen_aktif; ?>% dari total</span>
						</div>
						<span class="stat-icon bg-success bg-opacity-10 text-success">
							<i class="bi bi-person-check"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-3">
				<div class="card stat-card h-100">
					<div class="card-body d-flex align-items-start justify-content-between gap-3">
						<div>
							<p class="text-secondary small text-uppercase fw-semibold mb-2">Cuti</p>
							<h2 class="display-6 fw-bold mb-1"><?= (int) $total_cuti; ?></h2>
							<span class="small text-warning-emphasis"><i class="bi bi-pause-circle"></i> Sedang cuti akademik</span>
						</div>
						<span class="stat-icon bg-warning bg-opacity-10 text-warning-emphasis">
							<i class="bi bi-hourglass-split"></i>
						</span>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xl-3">
				<div class="card stat-card h-100">
					<div class="card-body d-flex align-items-start justify-content-between gap-3">
						<div>
							<p class="text-secondary small text-uppercase fw-semibold mb-2">Lulus</p>
							<h2 class="display-6 fw-bold mb-1"><?= (int) $total_lulus; ?></h2>
							<span class="small text-primary"><i class="bi bi-award"></i> Telah menyelesaikan studi</span>
						</div>
						<span class="stat-icon bg-info bg-opacity-10 text-info-emphasis">
							<i class="bi bi-mortarboard"></i>
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row g-3 mt-1">

			<!-- Tabel mahasiswa terbaru -->
			<div class="col-xl-8">
				<div class="card h-100">
					<div class="card-header d-flex justify-content-between align-items-center py-3">
						<div>
							<h2 class="h6 fw-bold mb-0">Mahasiswa Terbaru</h2>
							<small class="text-secondary">5 data terakhir berdasarkan NIM</small>
						</div>
						<a href="<?= site_url('mahasiswa'); ?>" class="btn btn-sm btn-outline-primary">
							Lihat Semua <i class="bi bi-arrow-right ms-1"></i>
						</a>
					</div>
					<div class="table-responsive">
						<table class="table table-hover align-middle mb-0">
							<thead>
								<tr>
									<th scope="col">NIM</th>
									<th scope="col">Nama</th>
									<th scope="col" class="d-none d-md-table-cell">Program Studi</th>
									<th scope="col" class="d-none d-lg-table-cell">Email</th>
									<th scope="col" class="text-end">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php if (empty($mahasiswa_terbaru)): ?>
									<tr>
										<td colspan="5" class="text-center text-secondary py-4">Belum ada data mahasiswa.</td>
									</tr>
								<?php else: ?>
									<?php foreach ($mahasiswa_terbaru as $m): ?>
										<tr>
											<td class="font-monospace small"><?= html_escape($m['nim']); ?></td>
											<td>
												<div class="d-flex align-items-center gap-2">
													<span class="avatar-initials avatar-sm"><?= avatar_initials($m['nama']); ?></span>
													<span class="fw-semibold"><?= html_escape($m['nama']); ?></span>
												</div>
											</td>
											<td class="d-none d-md-table-cell text-secondary"><?= html_escape($m['prodi']); ?></td>
											<td class="d-none d-lg-table-cell">
												<a href="mailto:<?= html_escape($m['email']); ?>" class="text-decoration-none small">
													<?= html_escape($m['email']); ?>
												</a>
											</td>
											<td class="text-end"><?= status_badge($m['status']); ?></td>
										</tr>
									<?php endforeach; ?>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<!-- Panel kanan -->
			<div class="col-xl-4">
				<div class="d-flex flex-column gap-3 h-100">

					<div class="card bg-primary text-white overflow-hidden">
						<div class="card-body position-relative">
							<span class="position-absolute top-0 end-0 p-3 opacity-25">
								<i class="bi bi-mortarboard-fill" style="font-size: 4rem;"></i>
							</span>
							<h2 class="h5 fw-bold">Selamat datang, Gabriela!</h2>
							<p class="mb-3 small text-white-50">
								Kelola data mahasiswa dan pantau ringkasan akademik melalui satu dashboard.
							</p>
							<a href="<?= site_url('profil'); ?>" class="btn btn-light btn-sm fw-semibold">
								<i class="bi bi-person me-1"></i> Lihat Profil
							</a>
						</div>
					</div>

					<div class="card">
						<div class="card-header py-3">
							<h2 class="h6 fw-bold mb-0">Aksi Cepat</h2>
						</div>
						<div class="card-body d-grid gap-2">
							<a href="<?= site_url('mahasiswa/tambah'); ?>" class="btn btn-outline-primary text-start d-flex align-items-center gap-2">
								<i class="bi bi-person-plus"></i> Tambah data mahasiswa
							</a>
							<a href="<?= site_url('mahasiswa'); ?>" class="btn btn-outline-primary text-start d-flex align-items-center gap-2">
								<i class="bi bi-table"></i> Kelola data mahasiswa
							</a>
							<a href="<?= site_url('profil'); ?>" class="btn btn-outline-primary text-start d-flex align-items-center gap-2">
								<i class="bi bi-person-circle"></i> Perbarui profil
							</a>
						</div>
					</div>

					<div class="card flex-grow-1">
						<div class="card-header py-3">
							<h2 class="h6 fw-bold mb-0">Ringkasan Status</h2>
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between small mb-1">
								<span class="text-secondary">Aktif</span>
								<span class="fw-semibold"><?= $persen_aktif; ?>%</span>
							</div>
							<div class="progress mb-3" role="progressbar" aria-label="Persentase mahasiswa aktif"
								aria-valuenow="<?= $persen_aktif; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 8px;">
								<div class="progress-bar bg-success" style="width: <?= $persen_aktif; ?>%"></div>
							</div>

							<div class="d-flex justify-content-between small mb-1">
								<span class="text-secondary">Cuti</span>
								<span class="fw-semibold"><?= $persen_cuti; ?>%</span>
							</div>
							<div class="progress mb-3" role="progressbar" aria-label="Persentase mahasiswa cuti"
								aria-valuenow="<?= $persen_cuti; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 8px;">
								<div class="progress-bar bg-warning" style="width: <?= $persen_cuti; ?>%"></div>
							</div>

							<div class="d-flex justify-content-between small mb-1">
								<span class="text-secondary">Lulus</span>
								<span class="fw-semibold"><?= $persen_lulus; ?>%</span>
							</div>
							<div class="progress" role="progressbar" aria-label="Persentase mahasiswa lulus"
								aria-valuenow="<?= $persen_lulus; ?>" aria-valuemin="0" aria-valuemax="100" style="height: 8px;">
								<div class="progress-bar bg-primary" style="width: <?= $persen_lulus; ?>%"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</main>
