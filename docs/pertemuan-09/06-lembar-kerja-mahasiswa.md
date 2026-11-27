# 06 — Lembar Kerja Mahasiswa

## Identitas

| | |
|---|---|
| Nama | ........................................................ |
| NIM | ........................................................ |
| Kelas | ........................................................ |
| Tanggal | ........................................................ |
| Nama Anggota Kelompok | 1. ................................ 2. ................................ |
| | 3. ................................ 4. ................................ |

## Petunjuk Pengisian

1. Kerjakan seluruh kegiatan pada project CodeIgniter 3 milikmu.
2. Tuliskan file yang dibuat/diubah pada kolom yang tersedia.
3. Lampirkan bukti berupa tangkapan layar atau tautan bila diminta.
4. Centang checklist setelah fitur benar-benar diuji.
5. Isi refleksi dengan jujur, bukan sekadar menyalin jawaban teman.

> **Fokus penilaian:** integrasi Bootstrap, pemisahan template, fungsionalitas navigasi, dan responsivitas.

---

## Kegiatan 1 — Integrasi Bootstrap ke CodeIgniter 3

### Tujuan

Memastikan CSS dan JavaScript Bootstrap termuat melalui `base_url()`.

### Langkah

1. Salin aset Bootstrap ke folder `assets/bootstrap/`.
2. Panggil CSS Bootstrap di `templates/header.php`.
3. Panggil JavaScript bundle di `templates/scripts.php`.
4. Buka DevTools → Network dan periksa status file.
5. Uji satu komponen interaktif (dropdown atau offcanvas).

### Isian

| No | Item | Hasil |
|---|---|---|
| 1 | Path CSS Bootstrap yang dipanggil | ........................................................ |
| 2 | Path JavaScript Bootstrap yang dipanggil | ........................................................ |
| 3 | Status HTTP `bootstrap.min.css` | ........................................................ |
| 4 | Status HTTP `bootstrap.bundle.min.js` | ........................................................ |
| 5 | Komponen interaktif yang diuji | ........................................................ |
| 6 | Apakah komponen berfungsi? | Ya / Tidak |

### Bukti

Tempel tangkapan layar tab **Network** di sini:

```text
+------------------------------------------------------+
|                                                      |
|                                                      |
|                                                      |
+------------------------------------------------------+
```

---

## Kegiatan 2 — Membuat Dashboard Sederhana

### Tujuan

Menampilkan halaman dashboard dengan navbar, sidebar, card statistik, tabel, dan footer.

### Isian

| No | Komponen | Ada (✓) | Keterangan |
|---|---|---|---|
| 1 | Navbar | | |
| 2 | Sidebar | | |
| 3 | Judul halaman | | |
| 4 | Breadcrumb | | |
| 5 | Card statistik (minimal 3) | | |
| 6 | Tabel mahasiswa terbaru | | |
| 7 | Footer | | |
| 8 | Responsif di mobile | | |

### Source Code Penting

Tuliskan potongan kode card statistik yang kamu buat:

```php
<!-- tulis di sini -->
```

Tuliskan potongan kode tabel mahasiswa:

```php
<!-- tulis di sini -->
```

---

## Kegiatan 3 — Membuat Navbar dan Sidebar

### Tujuan

Membuat navigasi atas dan samping yang berfungsi serta responsif.

### Isian

| No | Menu | URL | Berfungsi (✓) |
|---|---|---|---|
| 1 | Dashboard | `/index.php/dashboard` | |
| 2 | Data Mahasiswa | `/index.php/mahasiswa` | |
| 3 | Tambah Mahasiswa | `/index.php/mahasiswa/tambah` | |
| 4 | Profil | `/index.php/profil` | |

| No | Uji Sidebar | Hasil |
|---|---|---|
| 1 | Tampil di desktop (≥992px) | Ya / Tidak |
| 2 | Menjadi offcanvas di mobile | Ya / Tidak |
| 3 | Tombol menu membuka sidebar | Ya / Tidak |
| 4 | Menu aktif berwarna berbeda | Ya / Tidak |
| 5 | Sidebar tertutup setelah menu diklik (mobile) | Ya / Tidak |

### Bukti

Tempel tangkapan layar sidebar mobile di sini:

```text
+------------------------------------------------------+
|                                                      |
|                                                      |
+------------------------------------------------------+
```

---

## Kegiatan 4 — Memisahkan Template menjadi Komponen Reusable

### Tujuan

Memindahkan header, navbar, sidebar, footer, dan scripts ke partial view.

### Isian

| No | File Partial | Sudah Ada (✓) | Dipakai di Halaman |
|---|---|---|---|
| 1 | `templates/header.php` | | |
| 2 | `templates/navbar.php` | | |
| 3 | `templates/sidebar.php` | | |
| 4 | `templates/footer.php` | | |
| 5 | `templates/scripts.php` | | |

### Pertanyaan

1. Berapa baris kira-kira yang hilang dari `dashboard/index.php` setelah navbar, sidebar, dan footer dipindahkan?
   ```text
   ........................................................
   ```

2. Mengapa `$data` perlu dikirim ke setiap partial view?
   ```text
   ........................................................
   ........................................................
   ```

3. Apa yang terjadi jika `footer.php` dipanggil sebelum konten?
   ```text
   ........................................................
   ........................................................
   ```

### Perbandingan Sebelum dan Sesudah

| Aspek | Sebelum dipecah | Setelah dipecah |
|---|---|---|
| Jumlah salinan navbar | | |
| Perubahan menu | | |
| Panjang file view konten | | |
| Risiko inkonsistensi | | |

---

## Kegiatan 5 — Membuat Halaman Data Mahasiswa

### Tujuan

Menampilkan tabel mahasiswa dengan badge, button, dan pagination.

### Isian

| No | Fitur | Ada (✓) | Keterangan |
|---|---|---|---|
| 1 | Tabel NIM, Nama, Prodi, Email, Status | | |
| 2 | Badge status berwarna | | |
| 3 | Tombol aksi | | |
| 4 | Pagination | | |
| 5 | Jumlah data per halaman | | |
| 6 | Kolom disembunyikan di mobile | | |

### Uji Pagination

| Halaman | Jumlah Baris | Data Pertama | Data Terakhir |
|---|---|---|---|
| 1 | | | |
| 2 | | | |
| 3 | | | |

### Source Code Badge

Tuliskan fungsi/helper atau kode badge yang kamu gunakan:

```php
<!-- tulis di sini -->
```

---

## Kegiatan 6 — Membuat Halaman Form Mahasiswa

### Tujuan

Membuat form dengan Bootstrap Form Controls dan validasi.

### Isian

| No | Field | Tipe Input | Validasi |
|---|---|---|---|
| 1 | NIM | | |
| 2 | Nama | | |
| 3 | Program Studi | | |
| 4 | Email | | |

| No | Uji Validasi | Hasil |
|---|---|---|
| 1 | Submit kosong → field merah | Ya / Tidak |
| 2 | NIM < 8 digit → error | Ya / Tidak |
| 3 | Email tidak valid → error | Ya / Tidak |
| 4 | Data valid → alert sukses | Ya / Tidak |
| 5 | Tombol Batal kembali ke tabel | Ya / Tidak |

### Bukti

Tempel tangkapan layar validasi form di sini:

```text
+------------------------------------------------------+
|                                                      |
|                                                      |
+------------------------------------------------------+
```

### Pertanyaan

Mengapa validasi tetap harus dilakukan di server meskipun browser sudah memvalidasi?

```text
................................................................
................................................................
................................................................
```

---

## Kegiatan 7 — Menguji Responsivitas

### Tujuan

Memastikan antarmuka dapat digunakan pada desktop, tablet, dan mobile.

### Isian

| No | Ukuran | Yang Diuji | Hasil | Catatan |
|---|---|---|---|---|
| 1 | 1440px | Sidebar, card, tabel | | |
| 2 | 1024px | Sidebar, grid | | |
| 3 | 768px | Card 2 kolom, sidebar offcanvas | | |
| 4 | 390px | Navbar, tabel, form | | |
| 5 | 320px | Overflow, tombol | | |

### Masalah yang Ditemukan

| No | Masalah | Halaman | Perbaikan |
|---|---|---|---|
| 1 | | | |
| 2 | | | |
| 3 | | | |

---

## Checklist Hasil Pekerjaan

Centang setelah diuji.

### A. Integrasi Bootstrap

- [ ] Bootstrap CSS dimuat dari folder lokal.
- [ ] Bootstrap JS bundle dimuat.
- [ ] Bootstrap Icons tampil.
- [ ] Tidak ada 404 pada aset.
- [ ] Komponen interaktif berfungsi.

### B. Struktur CodeIgniter

- [ ] Controller dashboard, mahasiswa, dan profil tersedia.
- [ ] Model mahasiswa menyediakan data dummy.
- [ ] Route setiap halaman dapat diakses.
- [ ] `base_url` benar.
- [ ] Tidak ada error PHP.

### C. Template

- [ ] `header.php` memuat CSS.
- [ ] `navbar.php` tampil di semua halaman.
- [ ] `sidebar.php` memiliki menu aktif.
- [ ] `footer.php` berada di bawah konten.
- [ ] `scripts.php` memuat JavaScript.
- [ ] View konten tidak menduplikasi navbar/sidebar/footer.

### D. Halaman

- [ ] Dashboard menampilkan card statistik.
- [ ] Dashboard menampilkan tabel terbaru.
- [ ] Data mahasiswa menampilkan tabel lengkap.
- [ ] Pagination berfungsi.
- [ ] Form tampil dan tervalidasi.
- [ ] Profil menampilkan card dan form.
- [ ] Semua navigasi berfungsi.

### E. Responsivitas dan Kualitas

- [ ] Tampilan rapi di desktop.
- [ ] Tampilan rapi di tablet.
- [ ] Tampilan rapi di mobile.
- [ ] Sidebar offcanvas berfungsi.
- [ ] Tidak ada horizontal scroll yang mengganggu.
- [ ] Penamaan file konsisten.
- [ ] Komentar kode pada bagian penting.

---

## Pertanyaan Analisis

Jawab dengan singkat dan jelas.

1. Jelaskan alur request dari browser sampai view ditampilkan pada CodeIgniter 3.
   ```text
   ................................................................
   ................................................................
   ................................................................
   ```

2. Mengapa aset Bootstrap tidak diletakkan di dalam folder `application/`?
   ```text
   ................................................................
   ................................................................
   ```

3. Apa perbedaan `base_url()` dan `site_url()`?
   ```text
   ................................................................
   ................................................................
   ```

4. Sebutkan tiga keuntungan memecah template menjadi partial view.
   ```text
   1. ..............................................................
   2. ..............................................................
   3. ..............................................................
   ```

5. Komponen Bootstrap apa saja yang kamu gunakan pada project ini? Sebutkan minimal lima.
   ```text
   ................................................................
   ................................................................
   ```

---

## Refleksi

### 1. Konsep yang paling saya pahami

```text
................................................................
................................................................
................................................................
```

### 2. Konsep yang masih sulit

```text
................................................................
................................................................
................................................................
```

### 3. Kesalahan yang saya temui dan cara memperbaikinya

```text
................................................................
................................................................
................................................................
```

### 4. Kontribusi saya dalam kelompok

```text
................................................................
................................................................
................................................................
```

### 5. Rencana perbaikan untuk pertemuan berikutnya

```text
................................................................
................................................................
................................................................
```

---

## Penilaian Diri (Skala 1–4)

| Aspek | 1 | 2 | 3 | 4 |
|---|---|---|---|---|
| Integrasi Bootstrap | | | | |
| Pemahaman MVC | | | | |
| Pemisahan template | | | | |
| Fungsionalitas halaman | | | | |
| Responsivitas | | | | |
| Kerapian kode | | | | |

**Total skor diri:** ........ / 24

**Catatan dosen/asisten:**

```text
................................................................
................................................................
................................................................
```
