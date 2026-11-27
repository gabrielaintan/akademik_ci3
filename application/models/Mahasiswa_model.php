<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Mahasiswa_model
 *
 * Model sederhana yang menyediakan data mahasiswa dummy.
 * Praktikum ini sengaja tidak menggunakan database agar fokus
 * pembelajaran tetap pada integrasi Bootstrap dan pemisahan template.
 */
class Mahasiswa_model extends CI_Model {

	/**
	 * Seluruh data mahasiswa dummy.
	 *
	 * @return array
	 */
	public function get_all()
	{
		return $this->data_mahasiswa();
	}

	/**
	 * Mengambil sejumlah data terbaru (diurutkan dari NIM terbesar).
	 *
	 * @param int $limit
	 * @return array
	 */
	public function get_latest($limit = 5)
	{
		$mahasiswa = $this->data_mahasiswa();

		// Urutkan dari NIM terbesar, lalu ambil sejumlah $limit data.
		usort($mahasiswa, function ($a, $b) {
			return strcmp($b['nim'], $a['nim']);
		});

		return array_slice($mahasiswa, 0, (int) $limit);
	}

	/**
	 * Mengambil data mahasiswa dengan pagination sederhana.
	 *
	 * @param int $limit
	 * @param int $offset
	 * @return array
	 */
	public function get_paginated($limit, $offset)
	{
		return array_slice($this->data_mahasiswa(), (int) $offset, (int) $limit);
	}

	/**
	 * Menghitung seluruh mahasiswa.
	 *
	 * @return int
	 */
	public function count_all()
	{
		return count($this->data_mahasiswa());
	}

	/**
	 * Menghitung mahasiswa berdasarkan status.
	 *
	 * @param string $status
	 * @return int
	 */
	public function count_by_status($status)
	{
		$jumlah = 0;

		foreach ($this->data_mahasiswa() as $row)
		{
			if ($row['status'] === $status)
			{
				$jumlah++;
			}
		}

		return $jumlah;
	}

	/**
	 * Data dummy mahasiswa.
	 *
	 * Pada aplikasi nyata, method ini diganti dengan query database,
	 * misalnya: $this->db->get('mahasiswa')->result_array();
	 *
	 * @return array
	 */
	private function data_mahasiswa()
	{
		return array(
			array(
				'nim'    => '20230001',
				'nama'   => 'Andi Saputra',
				'prodi'  => 'Teknik Informatika',
				'email'  => 'andi.saputra@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230002',
				'nama'   => 'Budi Santoso',
				'prodi'  => 'Sistem Informasi',
				'email'  => 'budi.santoso@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230003',
				'nama'   => 'Citra Lestari',
				'prodi'  => 'Teknik Komputer',
				'email'  => 'citra.lestari@example.com',
				'status' => 'Cuti',
			),
			array(
				'nim'    => '20230004',
				'nama'   => 'Dewi Anggraini',
				'prodi'  => 'Teknik Informatika',
				'email'  => 'dewi.anggraini@example.com',
				'status' => 'Lulus',
			),
			array(
				'nim'    => '20230005',
				'nama'   => 'Eko Prasetyo',
				'prodi'  => 'Sistem Informasi',
				'email'  => 'eko.prasetyo@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230006',
				'nama'   => 'Fitri Handayani',
				'prodi'  => 'Teknologi Informasi',
				'email'  => 'fitri.handayani@example.com',
				'status' => 'Non-Aktif',
			),
			array(
				'nim'    => '20230007',
				'nama'   => 'Gilang Ramadhan',
				'prodi'  => 'Teknik Informatika',
				'email'  => 'gilang.ramadhan@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230008',
				'nama'   => 'Hana Permata',
				'prodi'  => 'Sistem Informasi',
				'email'  => 'hana.permata@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230009',
				'nama'   => 'Irfan Maulana',
				'prodi'  => 'Teknik Komputer',
				'email'  => 'irfan.maulana@example.com',
				'status' => 'Cuti',
			),
			array(
				'nim'    => '20230010',
				'nama'   => 'Jihan Aulia',
				'prodi'  => 'Teknologi Informasi',
				'email'  => 'jihan.aulia@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230011',
				'nama'   => 'Kurniawan Adi',
				'prodi'  => 'Teknik Informatika',
				'email'  => 'kurniawan.adi@example.com',
				'status' => 'Lulus',
			),
			array(
				'nim'    => '20230012',
				'nama'   => 'Lestari Wulandari',
				'prodi'  => 'Sistem Informasi',
				'email'  => 'lestari.wulandari@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230013',
				'nama'   => 'Muhammad Rizky Pratama',
				'prodi'  => 'Teknik Komputer',
				'email'  => 'rizky.pratama@example.com',
				'status' => 'Aktif',
			),
			array(
				'nim'    => '20230014',
				'nama'   => 'Nabila Zahra',
				'prodi'  => 'Teknologi Informasi',
				'email'  => 'nabila.zahra@example.com',
				'status' => 'Non-Aktif',
			),
		);
	}
}
