
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$nama = 'Gabriela Intan Mea';
$inisial = 'GA';
?>

<!-- Navbar atas -->
<nav class="navbar topbar px-2 px-lg-3"
    style="background: linear-gradient(105deg, #8871c4, #aa96dc) !important;"
    aria-label="Navigasi utama">

    <div class="container-fluid px-0">

        <!-- Tombol sidebar mobile -->
        <button class="btn btn-outline-light btn-sm d-lg-none me-2"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#sidebarMenu"
            aria-controls="sidebarMenu"
            aria-label="Buka menu navigasi">
            <i class="bi bi-list fs-5"></i>
        </button>

        <!-- Logo aplikasi -->
        <a class="navbar-brand d-flex align-items-center gap-2 text-white me-0"
            href="<?= site_url('dashboard'); ?>">

            <span class="brand-mark">
                <i class="bi bi-mortarboard-fill"></i>
            </span>

            <span class="d-none d-sm-inline fw-semibold">
                Student Management
            </span>

            <span class="d-inline d-sm-none fw-semibold">SMS</span>
        </a>

        <div class="ms-auto d-flex align-items-center gap-2 gap-lg-3">

            <!-- Informasi semester -->
            <span class="topbar-info d-none d-xl-inline-flex align-items-center gap-2">
                <i class="bi bi-calendar3"></i>
                <span>Semester Genap 2025/2026</span>
            </span>

            <!-- Dropdown notifikasi -->
            <div class="dropdown">
                <button class="btn btn-icon btn-outline-light position-relative"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    aria-label="Notifikasi">

                    <i class="bi bi-bell"></i>

                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
                        3
                    </span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm"
                    style="min-width: 18rem;">

                    <li>
                        <h6 class="dropdown-header">Notifikasi</h6>
                    </li>

                    <li>
                        <a class="dropdown-item" href="<?= site_url('mahasiswa'); ?>">
                            3 mahasiswa baru menunggu verifikasi.
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="<?= site_url('mahasiswa'); ?>">
                            Data mahasiswa semester ini telah diperbarui.
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <li>
                        <a class="dropdown-item text-center small"
                            href="<?= site_url('dashboard'); ?>">
                            Lihat dashboard
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Dropdown profil pengguna -->
            <div class="dropdown">

                <button class="btn btn-user dropdown-toggle d-flex align-items-center gap-2"
                    type="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">

                    <span class="avatar-initials avatar-sm">
                        <?= html_escape($inisial); ?>
                    </span>

                    <span class="d-none d-md-inline text-start lh-sm">

                        <span class="d-block small fw-semibold">
                            <?= html_escape($nama); ?>
                        </span>

                        <span class="d-block text-white-50"
                            style="font-size: .72rem;">
                            Mahasiswa
                        </span>

                    </span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end shadow-sm">

                    <li>
                        <h6 class="dropdown-header">Akun</h6>
                    </li>

                    <li>
                        <a class="dropdown-item" href="<?= site_url('profil'); ?>">
                            <i class="bi bi-person me-2"></i>
                            Profil Saya
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="<?= site_url('mahasiswa'); ?>">
                            <i class="bi bi-people me-2"></i>
                            Data Mahasiswa
                        </a>
                    </li>

                    <li><hr class="dropdown-divider"></li>

                    <!-- Tombol Logout -->
                    <li>
                        <a class="dropdown-item text-danger"
                            href="<?= site_url('auth/logout'); ?>"
                            onclick="return confirm('Apakah kamu yakin ingin logout?');">

                            <i class="bi bi-box-arrow-right me-2"></i>
                            Logout

                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
</nav>
