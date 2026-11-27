<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Mahasiswa
 *
 * Menangani halaman daftar mahasiswa (dengan pagination) dan
 * halaman form tambah mahasiswa.
 */
class Mahasiswa extends CI_Controller {

	public function __construct()
{
    parent::__construct();

    if (!$this->session->userdata('logged_in')) {
        redirect('auth');
    }

    $this->load->model('mahasiswa_model');
    $this->load->helper('form');
}

	/**
	 * Halaman daftar mahasiswa.
	 *
	 * @param int $page Halaman aktif (default 1).
	 */
	public function index($page = 1)
	{
		$per_page    = 5;
		$total_data  = $this->mahasiswa_model->count_all();
		$total_pages = (int) ceil($total_data / $per_page);

		// Pastikan nomor halaman selalu berada pada rentang yang valid.
		$page = (int) $page;
		if ($page < 1)
		{
			$page = 1;
		}
		elseif ($total_pages > 0 && $page > $total_pages)
		{
			$page = $total_pages;
		}

		$offset = ($page - 1) * $per_page;

		$data = array(
			'title'        => 'Data Mahasiswa',
			'active_menu'  => 'mahasiswa',
			'mahasiswa'    => $this->mahasiswa_model->get_paginated($per_page, $offset),
			'page'         => $page,
			'per_page'     => $per_page,
			'total_data'   => $total_data,
			'total_pages'  => $total_pages,
			'offset'       => $offset,
		);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer', $data);
		$this->load->view('templates/scripts', $data);
	}

	/**
	 * Halaman form tambah mahasiswa.
	 *
	 * Form hanya melakukan validasi. Data tidak disimpan ke database
	 * karena praktikum ini berfokus pada integrasi Bootstrap.
	 */
	public function tambah()
	{
		$this->load->library('form_validation');

		// Aturan validasi sisi server sebagai lapisan pengaman kedua.
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim|numeric|min_length[8]|max_length[12]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim|min_length[3]|max_length[100]');
		$this->form_validation->set_rules('prodi', 'Program Studi', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

		if ($this->form_validation->run() === FALSE)
		{
			$data = array(
				'title'          => 'Tambah Mahasiswa',
				'active_menu'    => 'mahasiswa-form',
				'prodi_options'  => array(
					'Teknik Informatika',
					'Sistem Informasi',
					'Teknik Komputer',
					'Teknologi Informasi',
				),
			);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('mahasiswa/form', $data);
			$this->load->view('templates/footer', $data);
			$this->load->view('templates/scripts', $data);
			return;
		}

		// Mode demo: data tidak disimpan, hanya menampilkan notifikasi.
		$this->session->set_flashdata(
			'success',
			'Data mahasiswa "'.html_escape($this->input->post('nama', TRUE)).'" berhasil divalidasi. '
			.'Mode demo: data belum disimpan ke database.'
		);

		redirect('mahasiswa');
	}
}
