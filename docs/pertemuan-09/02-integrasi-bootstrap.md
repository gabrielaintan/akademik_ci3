# 02 — Integrasi Bootstrap ke dalam CodeIgniter 3

## Tujuan Materi

Setelah membaca materi ini, mahasiswa diharapkan mampu:

1. Mendapatkan file Bootstrap dari sumber resmi.
2. Memasang Bootstrap melalui CDN dan secara lokal.
3. Menyimpan aset Bootstrap pada struktur folder CodeIgniter 3.
4. Mengatur `base_url` dengan benar.
5. Memanggil CSS dan JavaScript Bootstrap dari view.
6. Memecahkan masalah ketika CSS atau JavaScript tidak muncul.

---

## 1. Cara Mendapatkan Bootstrap

Sumber resmi:

- Website: <https://getbootstrap.com/docs/5.3/getting-started/download/>
- CDN: <https://getbootstrap.com/docs/5.3/getting-started/introduction/>

### Opsi 1 — Unduh File Distribution

1. Buka halaman download Bootstrap.
2. Unduh **Compiled CSS and JS**.
3. Ekstrak sehingga diperoleh file:
   ```text
   css/bootstrap.min.css
   css/bootstrap.min.css.map
   js/bootstrap.bundle.min.js
   js/bootstrap.bundle.min.js.map
   ```
4. Salin ke folder `assets/bootstrap/` pada project CodeIgniter.

### Opsi 2 — Menggunakan CDN

CDN memuat file langsung dari server Bootstrap. Tidak perlu menyimpan file, tetapi memerlukan koneksi internet.

### Opsi 3 — Package Manager

Jika project memakai npm/Composer, Bootstrap juga tersedia sebagai paket. Untuk praktikum ini, cara ini tidak digunakan agar struktur tetap sederhana.

---

## 2. Menggunakan Bootstrap melalui CDN

### CSS

```html
<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
  crossorigin="anonymous">
```

### JavaScript Bundle

```html
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>
```

> Gunakan **bundle** (`bootstrap.bundle.min.js`) karena sudah memuat Popper.js. Komponen seperti dropdown dan tooltip membutuhkan Popper.

### Kapan CDN Cocok?

- Prototipe cepat.
- Koneksi internet stabil.
- Tidak ingin menyimpan aset di repository.

### Kekurangan CDN

- Bergantung pada internet.
- Jika CDN lambat/diblokir, tampilan rusak.
- Versi bisa berubah jika URL tidak dikunci.

---

## 3. Menggunakan Bootstrap Secara Lokal

Pendekatan lokal **disarankan untuk praktikum** karena:

- dapat dijalankan tanpa internet;
- versi terkunci (5.3.3);
- lebih mudah diajarkan dan diprediksi.

### Struktur Folder Aset

```text
assets/
├── bootstrap/
│   ├── css/
│   │   ├── bootstrap.min.css
│   │   └── bootstrap.min.css.map
│   └── js/
│       ├── bootstrap.bundle.min.js
│       └── bootstrap.bundle.min.js.map
├── bootstrap-icons/
│   ├── bootstrap-icons.min.css
│   └── fonts/
│       ├── bootstrap-icons.woff
│       └── bootstrap-icons.woff2
├── css/
│   └── custom.css
└── js/
    └── app.js
```

> Folder `assets/` berada **sejajar** dengan `application/` dan `system/`, bukan di dalam `application/`.

### Mengapa di Luar `application/`?

`application/` dilindungi oleh `.htaccess` CodeIgniter agar tidak dapat diakses langsung. File CSS/JS harus dapat diakses browser, sehingga diletakkan di folder publik seperti `assets/`.

---

## 4. Mengatur `base_url`

File: `application/config/config.php`

Project ini menggunakan `base_url` dinamis:

```php
$config['base_url'] = '';
if (isset($_SERVER['HTTP_HOST']))
{
    $scheme = ( ! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
    $config['base_url'] = $scheme.'://'.$_SERVER['HTTP_HOST'].$base_path.'/';
}
else
{
    $config['base_url'] = 'http://localhost/pengantar/';
}
```

Penjelasan:

| Bagian | Fungsi |
|---|---|
| `$_SERVER['HTTP_HOST']` | Mendapatkan host, mis. `localhost` atau `localhost:8080` |
| `$_SERVER['SCRIPT_NAME']` | Mendapatkan path `index.php` |
| `dirname(...)` | Mendapatkan folder aplikasi, mis. `/pengantar` |
| `rtrim(..., '/')` | Menghapus slash di akhir |
| `$scheme` | Menentukan `http` atau `https` |

Hasil:

```text
XAMPP  : http://localhost/pengantar/
PHP CLI: http://localhost:8080/
```

### Alternatif: `base_url` Statis

Untuk lingkungan yang tetap, tulis langsung:

```php
$config['base_url'] = 'http://localhost/pengantar/';
```

Kelemahan: harus diubah ketika folder atau port berubah.

### `index_page`

```php
$config['index_page'] = 'index.php';
```

Dengan pengaturan ini, URL yang dihasilkan `site_url()` berbentuk:

```text
http://localhost/pengantar/index.php/mahasiswa
```

Jika `.htaccess` rewrite diaktifkan dan `index_page` diubah menjadi kosong:

```php
$config['index_page'] = '';
```

URL menjadi:

```text
http://localhost/pengantar/mahasiswa
```

> Pada praktikum ini `index_page` **tetap `index.php`** agar aplikasi langsung berjalan di XAMPP tanpa bergantung pada `mod_rewrite`.

---

## 5. Memanggil CSS Bootstrap

File: `application/views/templates/header.php`

```php
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= html_escape(isset($title) ? $title : 'Dashboard'); ?> &middot; Student Management</title>

    <!-- Bootstrap 5.3 (lokal) -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- Bootstrap Icons (lokal) -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-icons/bootstrap-icons.min.css'); ?>">
    <!-- CSS custom: hanya untuk layout dashboard -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
</head>
```

### Penjelasan Urutan

1. **Bootstrap CSS** dimuat pertama.
2. **Bootstrap Icons** dimuat setelahnya.
3. **custom.css** dimuat terakhir agar dapat menimpa aturan Bootstrap bila perlu.

### Mengapa `base_url()`?

`base_url('assets/css/custom.css')` menghasilkan URL absolut:

```text
http://localhost/pengantar/assets/css/custom.css
```

Jika hanya menulis `assets/css/custom.css`, browser akan mencarinya relatif terhadap URL halaman. Pada URL `index.php/mahasiswa/tambah`, path relatif tersebut bisa salah.

---

## 6. Memanggil JavaScript Bootstrap

File: `application/views/templates/scripts.php`

```php
<!-- Bootstrap JavaScript Bundle (termasuk Popper) -->
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- JavaScript aplikasi: validasi form dan perilaku sidebar -->
<script src="<?= base_url('assets/js/app.js'); ?>"></script>
</body>
</html>
```

### Mengapa Diletakkan di Akhir `<body>`?

- HTML sudah dirender sebelum JavaScript dijalankan.
- Halaman terasa lebih cepat.
- Elemen yang akan dimanipulasi JavaScript sudah tersedia.

### Bundle vs Separate

| File | Isi | Kebutuhan |
|---|---|---|
| `bootstrap.bundle.min.js` | Bootstrap + Popper | **Disarankan** |
| `bootstrap.min.js` | Bootstrap saja | Perlu Popper terpisah |

Komponen yang membutuhkan JavaScript antara lain:

- dropdown,
- offcanvas,
- modal,
- tooltip,
- validasi form Bootstrap (dibantu `app.js`).

---

## 7. Contoh Implementasi Lengkap pada CodeIgniter 3

### 7.1 Konfigurasi

```php
// application/config/config.php
$config['base_url'] = 'http://localhost/pengantar/';
$config['index_page'] = 'index.php';
```

```php
// application/config/autoload.php
$autoload['helper'] = array('url', 'status');
```

### 7.2 Asset

```text
assets/bootstrap/css/bootstrap.min.css
assets/bootstrap/js/bootstrap.bundle.min.js
assets/css/custom.css
assets/js/app.js
```

### 7.3 Header

```php
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
```

### 7.4 Scripts

```php
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/app.js'); ?>"></script>
```

### 7.5 Verifikasi di Browser

Buka Developer Tools → tab **Network**, lalu muat ulang halaman. Pastikan:

```text
bootstrap.min.css       200
bootstrap.bundle.min.js 200
custom.css              200
app.js                  200
```

Jika status bukan 200 (mis. 404), Bootstrap tidak akan bekerja.

---

## 8. Troubleshooting: CSS atau JavaScript Tidak Muncul

### Gejala 1 — Halaman tampil polos tanpa gaya Bootstrap

**Periksa:**

1. Buka DevTools → Network.
2. Cari `bootstrap.min.css`.
3. Jika **404**, periksa:
   - nama folder dan huruf besar/kecil;
   - lokasi file;
   - URL yang dihasilkan `base_url()`.

**Contoh kesalahan:**

```php
<!-- Salah: file tidak ada -->
<link rel="stylesheet" href="<?= base_url('assets/bs/css/bootstrap.min.css'); ?>">
```

**Perbaikan:**

```php
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
```

### Gejala 2 — CSS terbaca, tetapi dropdown/offcanvas tidak berfungsi

Penyebab umum:

- `bootstrap.bundle.min.js` tidak dimuat;
- file JS dimuat sebelum elemen HTML;
- ada error JavaScript lain.

**Periksa:** DevTools → Console.

### Gejala 3 — Ikon tampil sebagai kotak

Penyebab:

- `bootstrap-icons.min.css` tidak dimuat;
- folder `fonts/` tidak ikut tersalin;
- path font relatif salah.

Struktur yang benar:

```text
assets/bootstrap-icons/bootstrap-icons.min.css
assets/bootstrap-icons/fonts/bootstrap-icons.woff2
```

CSS Bootstrap Icons mencari font relatif terhadap file CSS:

```css
url("./fonts/bootstrap-icons.woff2?...")
```

Jadi folder `fonts/` **harus** berada di samping file CSS.

### Gejala 4 — Bekerja di `http://localhost/pengantar/`, gagal di URL lain

Penyebab: `base_url` statis tidak sesuai.

**Solusi:**

- gunakan `base_url` dinamis seperti pada project ini; atau
- sesuaikan `base_url` dengan URL aktual.

### Gejala 5 — CSS lama masih muncul setelah diedit

**Solusi:**

- tekan `Ctrl + F5` (hard reload);
- atau buka DevTools → Network → centang **Disable cache**;
- pastikan file yang diedit memang file yang dimuat.

### Gejala 6 — Muncul `No direct script access allowed`

Penyebab: file PHP diakses langsung melalui browser.

**Solusi:** akses melalui URL controller, misalnya:

```text
http://localhost/pengantar/index.php/dashboard
```

bukan:

```text
http://localhost/pengantar/application/views/templates/header.php
```

### Gejala 7 — Error `mkdir(): Invalid path` pada session

Ini bukan error Bootstrap, tetapi konfigurasi session PHP. Pada project ini diatasi dengan:

```php
$config['sess_save_path'] = APPPATH.'cache/sessions';
```

Folder `application/cache/sessions/` harus ada dan dapat ditulis.

---

## 9. Checklist Integrasi

- [ ] File `bootstrap.min.css` ada di `assets/bootstrap/css/`.
- [ ] File `bootstrap.bundle.min.js` ada di `assets/bootstrap/js/`.
- [ ] `base_url` mengarah ke folder project.
- [ ] `autoload['helper']` memuat `url`.
- [ ] Header memanggil Bootstrap CSS sebelum `custom.css`.
- [ ] Scripts memanggil bundle sebelum `app.js`.
- [ ] Tidak ada 404 pada tab Network.
- [ ] Navbar, card, dan button tampil bergaya Bootstrap.
- [ ] Dropdown/offcanvas berfungsi di mobile.

---

## 10. Rangkuman

| Langkah | Kunci |
|---|---|
| Mendapatkan Bootstrap | Unduh resmi atau CDN |
| Menyimpan aset | Di luar `application/`, yaitu `assets/` |
| Mengatur URL | `base_url` dinamis/statis |
| CSS | `<link>` di `header.php` |
| JS | `<script>` di `scripts.php` |
| Troubleshooting | Network, Console, path, cache |

## Latihan Kecil

1. Ganti pemanggilan Bootstrap lokal dengan CDN, lalu amati perbedaannya.
2. Ubah `base_url` menjadi statis dan uji di dua URL berbeda.
3. Rusak path CSS dengan sengaja, lalu temukan gejalanya di DevTools.
4. Jelaskan mengapa `bootstrap.bundle.min.js` lebih praktis daripada `bootstrap.min.js`.
