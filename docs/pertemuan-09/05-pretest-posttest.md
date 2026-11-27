# 05 — Pretest dan Posttest

**Materi:** Integrasi Bootstrap dengan CodeIgniter 3  
**Bentuk:** Pilihan ganda (10 soal pretest + 10 soal posttest)  
**Saran waktu:** Pretest 10 menit, posttest 15 menit

> Kerjakan secara mandiri. Satu jawaban benar bernilai 1 poin. Nilai = (jumlah benar / 10) × 100.

---

# BAGIAN A — PRETEST

Pilih satu jawaban yang paling tepat.

### 1. Bootstrap adalah …

A. Framework PHP untuk mengakses database  
B. Framework CSS untuk membangun antarmuka web  
C. Bahasa pemrograman server-side  
D. Sistem operasi untuk web server  
E. Library JavaScript untuk koneksi API

### 2. Pola arsitektur yang digunakan CodeIgniter 3 adalah …

A. MVVM  
B. MVP  
C. MVC  
D. Singleton  
E. Microservices

### 3. File controller pada CodeIgniter 3 disimpan di folder …

A. `application/views/`  
B. `application/models/`  
C. `application/controllers/`  
D. `application/config/`  
E. `assets/`

### 4. Fungsi `$this->load->view('dashboard/index', $data)` adalah …

A. Menyimpan data ke database  
B. Memuat file view dan mengirim data ke view  
C. Menjalankan query SQL  
D. Mengubah konfigurasi Bootstrap  
E. Mengompres file CSS

### 5. Helper `base_url()` pada CodeIgniter 3 digunakan untuk …

A. Menghasilkan URL dasar project  
B. Menghitung jumlah data  
C. Mengenkripsi password  
D. Menjalankan session  
E. Mengubah tipe data

### 6. Tag HTML yang tepat untuk memuat file CSS Bootstrap adalah …

A. `<script src="...">`  
B. `<link rel="stylesheet" href="...">`  
C. `<style src="...">`  
D. `<css href="...">`  
E. `<meta rel="css">`

### 7. File JavaScript Bootstrap yang sudah mencakup Popper adalah …

A. `bootstrap.min.css`  
B. `bootstrap.bundle.min.js`  
C. `bootstrap-icons.min.css`  
D. `jquery.min.js`  
E. `custom.css`

### 8. Tujuan utama memecah template menjadi partial view adalah …

A. Agar file project lebih besar  
B. Agar HTML dapat digunakan ulang dan tidak duplikatif  
C. Agar database lebih cepat  
D. Agar PHP tidak perlu dijalankan  
E. Agar Bootstrap tidak diperlukan

### 9. Bagian template yang biasanya berisi navbar, sidebar, dan footer sebaiknya …

A. Ditulis ulang di setiap halaman  
B. Disimpan di folder `system/`  
C. Dipisahkan menjadi partial view  
D. Dihilangkan seluruhnya  
E. Dimasukkan ke dalam file CSS

### 10. Folder yang sebaiknya menyimpan aset CSS/JS agar dapat diakses browser adalah …

A. `system/`  
B. `application/controllers/`  
C. `application/models/`  
D. `assets/`  
E. `application/cache/`

---

## Kunci Jawaban Pretest

| No | Jawaban | No | Jawaban |
|---|---|---|---|
| 1 | B | 6 | B |
| 2 | C | 7 | B |
| 3 | C | 8 | B |
| 4 | B | 9 | C |
| 5 | A | 10 | D |

## Pembahasan Pretest

1. **B — Framework CSS.** Bootstrap menyediakan class CSS dan komponen JavaScript untuk tampilan, bukan bahasa server atau database.
2. **C — MVC.** CodeIgniter 3 memisahkan Model, View, dan Controller.
3. **C — `application/controllers/`.** Model di `models/`, view di `views/`.
4. **B.** `load->view()` merender file view; parameter kedua mengirim data ke view.
5. **A.** `base_url()` menghasilkan URL dasar, mis. `http://localhost/pengantar/`.
6. **B.** CSS dimuat dengan `<link rel="stylesheet">` di bagian `<head>`.
7. **B.** `bootstrap.bundle.min.js` sudah termasuk Popper; `bootstrap.min.js` belum.
8. **B.** Partial view mencegah duplikasi navbar/sidebar/footer.
9. **C.** Navbar, sidebar, dan footer adalah kandidat utama partial view.
10. **D.** Folder `assets/` berada di luar `application/` yang dilindungi `.htaccess`.

---

# BAGIAN B — POSTTEST

Pilih satu jawaban yang paling tepat. Soal posttest mengukur pemahaman yang lebih analitis.

### 1. Sebuah halaman menampilkan teks biasa tanpa gaya Bootstrap. Tab Network menunjukkan `bootstrap.min.css` berstatus 404. Penyebab paling mungkin adalah …

A. JavaScript dimatikan  
B. Path file CSS salah atau file tidak ada di lokasi yang dipanggil  
C. PHP tidak terpasang  
D. Database tidak terhubung  
E. Session belum dimulai

### 2. Perhatikan kode berikut:

```php
<link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
```

Apa dampak urutan tersebut?

A. Bootstrap tidak akan dimuat  
B. `base_url()` tidak berfungsi  
C. Halaman menjadi lebih cepat  
D. Custom CSS dimuat lebih dulu, sehingga aturan Bootstrap dapat menimpanya  
E. Tidak ada dampak sama sekali

### 3. Pada controller, urutan pemanggilan view adalah:

```php
$this->load->view('templates/header');
$this->load->view('templates/navbar');
$this->load->view('templates/sidebar');
$this->load->view('dashboard/index');
$this->load->view('templates/footer');
$this->load->view('templates/scripts');
```

Jika `footer` dipanggil **sebelum** `dashboard/index`, apa yang paling mungkin terjadi?

A. Layout dan penutup `<div>` berada sebelum konten, sehingga HTML tidak valid  
B. Data statistik hilang  
C. Bootstrap otomatis diperbaiki  
D. Controller tidak dapat dijalankan  
E. Session terhapus

### 4. Sidebar memiliki menu Dashboard, Data Mahasiswa, Tambah Mahasiswa, dan Profil. Cara paling tepat menandai menu aktif adalah …

A. Menulis class `active` permanen pada Dashboard  
B. Menggunakan `rand()` di view  
C. Mengirim variabel `$active_menu` dari controller dan membandingkannya di sidebar  
D. Menghapus semua link  
E. Menambahkan `active` pada semua link

### 5. Mengapa file `custom.css` sebaiknya dimuat setelah `bootstrap.min.css`?

A. Agar Bootstrap tidak berjalan  
B. Agar file lebih besar  
C. Agar JavaScript berjalan  
D. Agar aturan custom dapat menimpa aturan Bootstrap bila diperlukan  
E. Agar `base_url()` tidak error

### 6. Aset Bootstrap tidak diletakkan di dalam `application/` karena …

A. Folder `application/` tidak boleh berisi file CSS  
B. `application/` dilindungi `.htaccess` dan tidak dapat diakses langsung dari browser  
C. Bootstrap hanya bisa berjalan di `assets/`  
D. Folder `application/` akan terhapus otomatis  
E. CSS tidak membutuhkan HTTP

### 7. Controller mengirim `$data` ke `templates/sidebar`, tetapi **tidak** mengirimnya ke `templates/header`. Di header terdapat kode `<?= $title; ?>`. Apa yang terjadi?

A. Judul otomatis diambil dari nama file  
B. Bootstrap gagal dimuat  
C. Controller berhenti total  
D. Session dibuat ulang  
E. Muncul error `Undefined variable $title` (atau judul kosong)

### 8. Class `offcanvas-lg` pada elemen sidebar menyebabkan …

A. Sidebar menjadi offcanvas di bawah breakpoint `lg` dan tampil normal pada `lg` ke atas  
B. Sidebar selalu tersembunyi di semua ukuran layar  
C. Sidebar hanya tampil di mobile  
D. Sidebar tidak dapat ditutup  
E. Sidebar menjadi modal di desktop

### 9. Data mahasiswa berjumlah 14, `$per_page = 5`. Berapa jumlah halaman dan isi halaman terakhir?

A. 2 halaman; halaman terakhir 5 data  
B. 3 halaman; halaman terakhir 5 data  
C. 3 halaman; halaman terakhir 4 data  
D. 4 halaman; halaman terakhir 2 data  
E. 14 halaman; masing-masing 1 data

### 10. Form menggunakan `needs-validation`, `novalidate`, dan aturan `form_validation` di controller. Mengapa validasi tetap dilakukan di server meskipun browser sudah memvalidasi?

A. Agar tampilan lebih berwarna  
B. Agar Bootstrap dapat dimuat  
C. Karena CodeIgniter tidak mendukung HTML5  
D. Karena validasi browser dapat dilewati, sehingga server harus tetap memeriksa data  
E. Agar session tidak dibuat

---

## Kunci Jawaban Posttest

| No | Jawaban | No | Jawaban |
|---|---|---|---|
| 1 | B | 6 | B |
| 2 | D | 7 | E |
| 3 | A | 8 | A |
| 4 | C | 9 | C |
| 5 | D | 10 | D |

## Pembahasan Posttest

1. **B.** Status 404 berarti resource tidak ditemukan. Periksa path, nama folder, huruf besar/kecil, dan `base_url`.
2. **D.** CSS yang dimuat terakhir memiliki prioritas lebih tinggi pada specificity yang sama. Jika `custom.css` dimuat sebelum Bootstrap, aturan Bootstrap dapat menimpa custom. Urutan yang benar: Bootstrap → custom.
3. **A.** Partial `footer.php` menutup `.app-shell`. Jika dipanggil sebelum konten, struktur HTML menjadi tidak valid dan tampilan rusak.
4. **C.** `$active_menu` dikirim controller (mis. `'dashboard'`, `'mahasiswa'`, `'profil'`), lalu sidebar menambahkan class `active` sesuai nilainya. Ini menjaga konsistensi di semua halaman.
5. **D.** Urutan cascade CSS menentukan prioritas. Custom setelah Bootstrap memungkinkan penyesuaian tanpa `!important` berlebihan.
6. **B.** CodeIgniter menaruh `.htaccess` di `application/` untuk mencegah akses langsung. Aset publik harus berada di folder yang dapat diakses, seperti `assets/`.
7. **E.** Setiap view membutuhkan data yang dikirim. Jika `$title` tidak dikirim ke header, muncul notice/undefined variable atau judul kosong. Solusinya kirim `$data` ke semua partial yang membutuhkannya.
8. **A.** `offcanvas-lg` adalah komponen responsif Bootstrap: perilaku offcanvas aktif di bawah breakpoint `lg` (992px), dan menjadi elemen statis pada layar `lg` ke atas.
9. **C.** `ceil(14 / 5) = 3` halaman. Halaman 1: 5 data, halaman 2: 5 data, halaman 3: 4 data (offset 10, sisa 4).
10. **D.** Validasi HTML5/JavaScript hanya di sisi klien dan dapat dimatikan atau dilewati. Validasi server tetap wajib untuk keamanan dan integritas data.

---

## Rekap Nilai

| Bagian | Jumlah Soal | Skor Maksimal | Nilai |
|---|---|---|---|
| Pretest | 10 | 10 | (benar / 10) × 100 |
| Posttest | 10 | 10 | (benar / 10) × 100 |

Contoh:

```text
Pretest  : 7 benar → 70
Posttest : 9 benar → 90
Peningkatan: 20 poin
```

## Tindak Lanjut

- Jika nilai posttest < 70, pelajari kembali materi `02-integrasi-bootstrap.md` dan `03-memecah-template-bootstrap.md`.
- Jika kesalahan banyak pada soal template, ulangi Praktikum 6.
- Jika kesalahan banyak pada soal aset, ulangi Praktikum 3 dan periksa tab Network.
