<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Helper tampilan status mahasiswa.
 *
 * Helper dipakai agar logika warna badge Bootstrap tidak ditulis
 * berulang-ulang di setiap view.
 */

if ( ! function_exists('status_badge'))
{
	/**
	 * Mengembalikan HTML badge Bootstrap sesuai status mahasiswa.
	 *
	 * @param string $status
	 * @return string
	 */
	function status_badge($status)
	{
		$warna = array(
			'Aktif'     => 'success',
			'Cuti'      => 'warning',
			'Lulus'     => 'primary',
			'Non-Aktif' => 'secondary',
		);

		$class = isset($warna[$status]) ? $warna[$status] : 'secondary';

		return '<span class="badge rounded-pill text-bg-'.$class.'">'
			.html_escape($status)
			.'</span>';
	}
}

if ( ! function_exists('avatar_initials'))
{
	/**
	 * Mengambil maksimal dua huruf awal nama untuk avatar.
	 *
	 * Contoh: "Andi Saputra" menjadi "AS".
	 *
	 * @param string $nama
	 * @return string
	 */
	function avatar_initials($nama)
	{
		$kata = preg_split('/\s+/', trim((string) $nama));
		$inisial = '';

		foreach (array_slice($kata, 0, 2) as $k)
		{
			$inisial .= strtoupper(substr($k, 0, 1));
		}

		return $inisial !== '' ? $inisial : 'M';
	}
}
