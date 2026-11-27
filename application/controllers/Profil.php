
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        if ($this->input->method() === 'post')
        {
            $this->session->set_flashdata(
                'success',
                'Perubahan profil berhasil divalidasi. Mode demo: data belum disimpan ke database.'
            );

            redirect('profil');
        }

        $data = array(
            'title'       => 'Profil Mahasiswa',
            'active_menu' => 'profil',
            'profil'      => array(
                'nim'      => '24111100031',
                'nama'     => 'Gabriela Intan Mea',
                'prodi'    => 'Informatika',
                'email'    => 'Belum diisi',
                'telepon'  => 'Belum diisi',
                'angkatan' => 'Belum diisi',
                'semester' => 'Belum diisi',
                'status'   => 'Mahasiswa',
                'alamat'   => 'Flores, Nusa Tenggara Timur',
            ),
        );

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profil/index', $data);
        $this->load->view('templates/footer', $data);
        $this->load->view('templates/scripts', $data);
    }
}
