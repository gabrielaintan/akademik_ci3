<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Dashboard
 *
 * Menampilkan halaman utama berisi kartu statistik dan tabel
 * mahasiswa terbaru.
 */
class Dashboard extends CI_Controller {

	public function __construct()
{
    parent::__construct();

    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $this->load->model('mahasiswa_model');
}

	public function index()
	{
		$data = array(
			'title'             => 'Dashboard',
			'active_menu'       => 'dashboard',
			'total_mahasiswa'   => $this->mahasiswa_model->count_all(),
			'total_aktif'       => $this->mahasiswa_model->count_by_status('Aktif'),
			'total_cuti'        => $this->mahasiswa_model->count_by_status('Cuti'),
			'total_lulus'       => $this->mahasiswa_model->count_by_status('Lulus'),
			'mahasiswa_terbaru' => $this->mahasiswa_model->get_latest(5),
		);

		/*
		 * Template dipecah menjadi beberapa partial view.
		 * Urutan pemanggilan inilah yang membentuk satu halaman utuh.
		 */
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/scripts', $data);
	}
}
