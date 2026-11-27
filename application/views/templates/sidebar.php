
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active = isset($active_menu) ? $active_menu : 'dashboard';
?>

<style>
    /* Warna dasar sidebar */
    #sidebarMenu {
        background: linear-gradient(180deg, #eee8fb 0%, #e5dcf7 100%) !important;
        color: #000000 !important;
    }

    /* Semua tulisan dan ikon sidebar */
    #sidebarMenu,
    #sidebarMenu * {
        color: #000000 !important;
    }

    /* Judul sidebar */
    #sidebarMenu .offcanvas-title {
        color: #000000 !important;
        font-weight: 700;
    }

    /* Menu sidebar */
    #sidebarMenu .nav-link {
        color: #000000 !important;
        font-weight: 500;
        border-radius: 10px;
        margin-bottom: 5px;
    }

    /* Menu aktif */
    #sidebarMenu .nav-link.active {
        background: linear-gradient(105deg, #b9a8e8, #d0c3f0) !important;
        color: #000000 !important;
        font-weight: 700;
    }

    /* Hover menu */
    #sidebarMenu .nav-link:hover {
        background: #d8cef0 !important;
        color: #000000 !important;
    }

    /* Footer sidebar */
    #sidebarMenu .sidebar-footer {
        color: #000000 !important;
        border-top: 1px solid #c8b9e5;
    }

    #sidebarMenu .btn-close {
        filter: none !important;
    }
</style>

<aside
    class="sidebar offcanvas-lg offcanvas-start"
    tabindex="-1"
    id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel"
    style="background: linear-gradient(180deg, #eee8fb 0%, #e5dcf7 100%) !important; color: #000000 !important;"
>

    <div class="offcanvas-header d-lg-none">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">
            Student Management
        </h5>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            data-bs-target="#sidebarMenu"
            aria-label="Close">
        </button>
    </div>

    <div class="sidebar-content">

        <div class="sidebar-brand p-3">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-mortarboard-fill fs-3"></i>
                <div>
                    <div class="fw-bold">Student Management</div>
                    <small>Dashboard Akademik</small>
                </div>
            </div>
        </div>

        <hr>

        <div class="px-3">
            <small class="fw-bold text-uppercase">Menu Utama</small>
        </div>

        <ul class="nav flex-column px-2 mt-2">

            <li class="nav-item">
                <a href="<?= site_url('dashboard'); ?>"
                   class="nav-link <?= $active == 'dashboard' ? 'active' : ''; ?>">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= site_url('mahasiswa'); ?>"
                   class="nav-link <?= $active == 'mahasiswa' ? 'active' : ''; ?>">
                    <i class="bi bi-people-fill me-2"></i>
                    Data Mahasiswa
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= site_url('mahasiswa/tambah'); ?>"
                   class="nav-link <?= $active == 'tambah' ? 'active' : ''; ?>">
                    <i class="bi bi-person-plus-fill me-2"></i>
                    Tambah Mahasiswa
                </a>
            </li>

            <li class="nav-item">
                <a href="<?= site_url('profil'); ?>"
                   class="nav-link <?= $active == 'profil' ? 'active' : ''; ?>">
                    <i class="bi bi-person-circle me-2"></i>
                    Profil
                </a>
            </li>

        </ul>

        <hr>

        <div class="px-3">
            <small class="fw-bold text-uppercase">Referensi</small>
        </div>

        <ul class="nav flex-column px-2 mt-2">

            <li class="nav-item">
                <a href="https://getbootstrap.com/"
                   target="_blank"
                   class="nav-link">
                    <i class="bi bi-bootstrap-fill me-2"></i>
                    Bootstrap
                </a>
            </li>

            <li class="nav-item">
                <a href="https://codeigniter.com/"
                   target="_blank"
                   class="nav-link">
                    <i class="bi bi-code-slash me-2"></i>
                    CodeIgniter
                </a>
            </li>

        </ul>

    </div>

    <div class="sidebar-footer p-3 mt-auto">
        <small>
            <i class="bi bi-info-circle me-1"></i>
            Pertemuan 9
        </small>
    </div>

</aside>
