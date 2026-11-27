
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    // Halaman utama login
    public function index()
    {
        $this->load->view('auth/login');
    }

    // Proses login mahasiswa
    public function login()
    {
        $nim = $this->input->post('nim', TRUE);
        $password = $this->input->post('password', TRUE);

        // Login demo
        if ($nim == '20230001' && $password == '123456') {

            $session_data = array(
                'nim'       => '20230001',
                'nama'      => 'Andi Saputra',
                'prodi'     => 'Teknik Informatika',
                'status'    => 'Aktif',
                'logged_in' => TRUE
            );

            // Simpan data ke session
            $this->session->set_userdata($session_data);

            // Masuk ke dashboard
            redirect('dashboard');

        } else {

            // Pesan jika login gagal
            $this->session->set_flashdata(
                'error',
                'NIM atau password salah!'
            );

            redirect('auth');
        }
    }

    // Proses logout
    public function logout()
    {
        // Hapus seluruh session
        $this->session->sess_destroy();

        // Kembali ke halaman login
        redirect('auth');
    }
}
