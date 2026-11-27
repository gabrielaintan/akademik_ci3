<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$mulai = $total_data > 0 ? $offset + 1 : 0;
$selesai = min($offset + $per_page, $total_data);
?>
<main class="app-main">
	<div class="container-fluid px-3 px-lg-4 py-4">

		<!-- Judul halaman -->
		<div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
			<div>
				<h1 class="h3 fw-bold mb-1">Data Mahasiswa</h1>
				<p class="text-secondary mb-0">Daftar mahasiswa beserta status akademiknya.</p>
			</div>
			<a href="<?= site_url('mahasiswa/tambah'); ?>" class="btn btn-primary d-inline-flex align-items-center gap-2">
				<i class="bi bi-plus-lg"></i> Tambah Mahasiswa
			</a>
		</div>

		<!-- Breadcrumb -->
		<nav aria-label="breadcrumb" class="mt-3">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
			</ol>
		</nav>

		<!-- Notifikasi setelah form berhasil divalidasi -->
		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success alert-dismissible fade show d-flex align-items-start gap-2 mt-3" role="alert">
				<i class="bi bi-check-circle-fill mt-1"></i>
				<div><?= html_escape($this->session->flashdata('success')); ?></div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
			</div>
		<?php endif; ?>

		<div class="card mt-3">
			<div class="card-header d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2 py-3">
				<div class="d-flex align-items-center gap-2">
					<h2 class="h6 fw-bold mb-0">Daftar Mahasiswa</h2>
					<span class="badge rounded-pill text-bg-primary"><?= (int) $total_data; ?> data</span>
				</div>
				<span class="small text-secondary">
					Menampilkan <?= (int) $mulai; ?>&ndash;<?= (int) $selesai; ?> dari <?= (int) $total_data; ?> mahasiswa
				</span>
			</div>

			<div class="table-responsive">
				<table class="table table-hover align-middle mb-0">
					<thead>
						<tr>
							<th scope="col" style="width: 3rem;">#</th>
							<th scope="col">NIM</th>
							<th scope="col">Nama</th>
							<th scope="col" class="d-none d-md-table-cell">Program Studi</th>
							<th scope="col" class="d-none d-lg-table-cell">Email</th>
							<th scope="col">Status</th>
							<th scope="col" class="text-end">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if (empty($mahasiswa)): ?>
							<tr>
								<td colspan="7" class="text-center py-5">
									<i class="bi bi-inbox display-6 text-secondary d-block mb-2"></i>
									<span class="text-secondary">Belum ada data mahasiswa pada halaman ini.</span>
								</td>
							</tr>
						<?php else: ?>
							<?php foreach ($mahasiswa as $i => $m): ?>
								<tr>
									<td class="text-secondary small"><?= (int) ($offset + $i + 1); ?></td>
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
									<td><?= status_badge($m['status']); ?></td>
									<td class="text-end">
										<a href="mailto:<?= html_escape($m['email']); ?>"
											class="btn btn-sm btn-outline-secondary" title="Kirim email ke <?= html_escape($m['nama']); ?>">
											<i class="bi bi-envelope"></i>
											<span class="d-none d-xl-inline ms-1">Email</span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>

			<?php if ($total_pages > 1): ?>
				<div class="card-footer bg-white d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 py-3">
					<span class="small text-secondary">Halaman <?= (int) $page; ?> dari <?= (int) $total_pages; ?></span>
					<nav aria-label="Navigasi halaman mahasiswa">
						<ul class="pagination pagination-sm mb-0">
							<li class="page-item <?= $page <= 1 ? 'disabled' : ''; ?>">
								<a class="page-link" href="<?= site_url('mahasiswa/page/'.max(1, $page - 1)); ?>"
									<?= $page <= 1 ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
									<i class="bi bi-chevron-left"></i>
									<span class="d-none d-sm-inline ms-1">Sebelumnya</span>
								</a>
							</li>

							<?php for ($i = 1; $i <= $total_pages; $i++): ?>
								<li class="page-item <?= $i === (int) $page ? 'active' : ''; ?>">
									<a class="page-link" href="<?= site_url('mahasiswa/page/'.$i); ?>"
										<?= $i === (int) $page ? 'aria-current="page"' : ''; ?>>
										<?= $i; ?>
									</a>
								</li>
							<?php endfor; ?>

							<li class="page-item <?= $page >= $total_pages ? 'disabled' : ''; ?>">
								<a class="page-link" href="<?= site_url('mahasiswa/page/'.min($total_pages, $page + 1)); ?>"
									<?= $page >= $total_pages ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
									<span class="d-none d-sm-inline me-1">Berikutnya</span>
									<i class="bi bi-chevron-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			<?php endif; ?>
		</div>

	</div>
</main>
