# 07 — Rubrik Penilaian Praktik

**Bentuk penilaian:** Ujian praktik (unjuk kerja)  
**Skala:** Persepsi 1–4  
**Materi:** Integrasi Bootstrap dengan CodeIgniter 3  
**Project:** Student Management Dashboard

---

## 1. Ketentuan Umum

Rubrik ini digunakan untuk menilai **hasil praktik** mahasiswa, bukan hanya kebenaran teori. Penilai memberi skor berdasarkan bukti nyata:

- source code yang dijalankan;
- tampilan di browser;
- struktur file;
- hasil pengujian navigasi dan responsivitas.

### Skala Persepsi

| Skor | Kategori | Makna Umum |
|---|---|---|
| 1 | Kurang | Indikator belum terpenuhi; banyak kesalahan mendasar |
| 2 | Cukup | Sebagian indikator terpenuhi; masih ada kesalahan yang memengaruhi hasil |
| 3 | Baik | Sebagian besar indikator terpenuhi; hasil berfungsi dengan sedikit kekurangan |
| 4 | Sangat Baik | Seluruh indikator terpenuhi; hasil rapi, konsisten, dan dapat dijelaskan |

> Skor 4 tidak berarti sempurna tanpa cela, tetapi menunjukkan penguasaan yang konsisten dan mandiri.

---

## 2. Aspek, Bobot, dan Indikator

### A. Integrasi Bootstrap ke CodeIgniter — 25%

| Skor | Indikator |
|---|---|
| **1** | Bootstrap tidak termuat atau masih bergantung pada CDN tanpa alasan; path aset salah; halaman tampil tanpa gaya; tidak dapat menjelaskan cara pemanggilan aset. |
| **2** | Bootstrap termuat sebagian; ada aset yang 404; `base_url()` digunakan tetapi masih ada path yang salah; komponen dasar tampil tetapi tidak konsisten. |
| **3** | CSS dan JavaScript Bootstrap termuat melalui `base_url()`; tidak ada 404; komponen utama berfungsi; dapat menjelaskan fungsi `base_url()`. |
| **4** | Seluruh aset lokal termuat dengan benar dan efisien; CSS, JS bundle, dan icons berfungsi; struktur folder aset rapi; dapat menjelaskan alur pemuatan aset dan troubleshooting-nya. |

**Bukti yang diperiksa:**

- `templates/header.php` memanggil `bootstrap.min.css`;
- `templates/scripts.php` memanggil `bootstrap.bundle.min.js`;
- tab Network tidak menunjukkan 404;
- dropdown/offcanvas berfungsi.

---

### B. Implementasi Komponen CSS Bootstrap — 20%

| Skor | Indikator |
|---|---|
| **1** | Hampir tidak menggunakan komponen Bootstrap; tampilan masih HTML polos; komponen yang dipakai tidak sesuai fungsinya. |
| **2** | Menggunakan beberapa komponen (card/table/button) tetapi masih banyak styling manual; tampilan kurang konsisten; ada komponen yang tidak berfungsi. |
| **3** | Menggunakan komponen Bootstrap secara tepat: navbar, sidebar, card, table, badge, button, form, pagination; tampilan konsisten; hanya sedikit CSS custom. |
| **4** | Komponen Bootstrap digunakan secara luas dan tepat (termasuk grid, alert, progress, offcanvas, validation); desain konsisten, profesional, dan responsif; CSS custom minimal dan beralasan. |

**Komponen minimum yang dinilai:**

- Navbar
- Sidebar
- Breadcrumb
- Card statistik
- Table
- Badge
- Button
- Pagination
- Form control
- Alert/validation

---

### C. Pemisahan Template — 25%

| Skor | Indikator |
|---|---|
| **1** | Seluruh HTML berada dalam satu file; navbar/sidebar/footer diduplikasi di setiap halaman; tidak ada partial view. |
| **2** | Sudah ada usaha memisahkan sebagian template, tetapi masih ada duplikasi; urutan pemanggilan view salah; partial tidak dipakai konsisten. |
| **3** | Header, navbar, sidebar, footer, dan scripts terpisah; dipanggil dari controller; tidak ada duplikasi HTML utama; menu aktif berfungsi. |
| **4** | Pemisahan template rapi dan konsisten; seluruh halaman memakai partial yang sama; pembuka/penutup layout seimbang; data (`$title`, `$active_menu`) dikelola dengan benar; dapat menjelaskan alasan pemisahan. |

**Bukti yang diperiksa:**

```text
application/views/templates/header.php
application/views/templates/navbar.php
application/views/templates/sidebar.php
application/views/templates/footer.php
application/views/templates/scripts.php
```

- View konten tidak memuat ulang navbar/sidebar/footer.
- Controller memanggil view dalam urutan yang benar.

---

### D. Fungsionalitas Navigasi dan Halaman — 15%

| Skor | Indikator |
|---|---|
| **1** | Banyak link tidak berfungsi; halaman error; route tidak ditemukan; form tidak dapat dibuka. |
| **2** | Sebagian halaman dapat dibuka; beberapa link salah; pagination atau form belum berfungsi; masih ada error PHP. |
| **3** | Semua halaman utama dapat dibuka; navigasi berfungsi; pagination berjalan; form tervalidasi; tidak ada error fatal. |
| **4** | Seluruh navigasi dan fitur berfungsi sempurna; URL konsisten; pagination, validasi, flash message, dan halaman profil bekerja; tidak ada error PHP/JavaScript. |

**Halaman yang diuji:**

| Halaman | URL |
|---|---|
| Dashboard | `/index.php/dashboard` |
| Data Mahasiswa | `/index.php/mahasiswa` |
| Halaman 2 | `/index.php/mahasiswa/page/2` |
| Form | `/index.php/mahasiswa/tambah` |
| Profil | `/index.php/profil` |

---

### E. Responsivitas dan Kerapian Kode — 15%

| Skor | Indikator |
|---|---|
| **1** | Tampilan rusak di mobile; sidebar menutupi konten; tabel keluar layar; kode berantakan dan sulit dibaca. |
| **2** | Sebagian tampilan menyesuaikan, tetapi masih ada overflow; sidebar mobile kurang berfungsi; penamaan file tidak konsisten. |
| **3** | Tampilan rapi di desktop, tablet, dan mobile; sidebar offcanvas berfungsi; tabel responsif; kode terstruktur dan diberi komentar penting. |
| **4** | Responsif di berbagai ukuran (320px–1440px); tidak ada overflow; offcanvas, grid, dan form bekerja baik; kode bersih, konsisten, mudah dipahami, dan sesuai konvensi CodeIgniter. |

---

## 3. Bobot Penilaian

| No | Aspek | Bobot |
|---|---|---|
| A | Integrasi Bootstrap ke CodeIgniter | 25% |
| B | Implementasi komponen CSS Bootstrap | 20% |
| C | Pemisahan template | 25% |
| D | Fungsionalitas navigasi dan halaman | 15% |
| E | Responsivitas dan kerapian kode | 15% |
| | **Total** | **100%** |

---

## 4. Rumus Nilai Akhir

Setiap aspek diberi skor 1–4. Bobot dinyatakan dalam bentuk desimal.

### Rumus

```text
Nilai Akhir = ( Σ (Skor Aspek × Bobot Aspek) / 4 ) × 100
```

atau ekuivalen:

```text
Nilai Akhir = Σ ( (Skor Aspek / 4) × Bobot Persen )
```

### Contoh Perhitungan

| Aspek | Skor | Bobot | Skor × Bobot |
|---|---|---|---|
| A. Integrasi Bootstrap | 3 | 0,25 | 0,75 |
| B. Komponen CSS Bootstrap | 3 | 0,20 | 0,60 |
| C. Pemisahan template | 4 | 0,25 | 1,00 |
| D. Fungsionalitas navigasi | 4 | 0,15 | 0,60 |
| E. Responsivitas & kerapian | 3 | 0,15 | 0,45 |
| **Jumlah** | | **1,00** | **3,40** |

```text
Nilai Akhir = (3,40 / 4) × 100 = 85
```

### Konversi Nilai (contoh)

> Sesuaikan dengan ketentuan institusi masing-masing.

| Rentang Nilai | Huruf | Keterangan |
|---|---|---|
| 86–100 | A | Sangat Baik |
| 76–85 | B | Baik |
| 66–75 | C | Cukup |
| 56–65 | D | Kurang |
| < 56 | E | Sangat Kurang |

---

## 5. Format Tabel Penilaian Mahasiswa

### Identitas

| | |
|---|---|
| Nama | ........................................................ |
| NIM | ........................................................ |
| Kelas | ........................................................ |
| Tanggal penilaian | ........................................................ |
| Penilai | ........................................................ |

### Lembar Skor

| No | Aspek | Skor (1–4) | Bobot | Skor × Bobot | Catatan |
|---|---|---|---|---|---|
| A | Integrasi Bootstrap ke CodeIgniter | | 25% | | |
| B | Implementasi komponen CSS Bootstrap | | 20% | | |
| C | Pemisahan template | | 25% | | |
| D | Fungsionalitas navigasi dan halaman | | 15% | | |
| E | Responsivitas dan kerapian kode | | 15% | | |
| | **Jumlah** | | **100%** | | |

```text
Nilai Akhir = (Jumlah Skor × Bobot / 4) × 100
Nilai Akhir = ( ........ / 4 ) × 100 = ........
```

### Catatan Kualitatif

| Kekuatan | Perbaikan yang Disarankan |
|---|---|
| ........................................................ | ........................................................ |
| ........................................................ | ........................................................ |
| ........................................................ | ........................................................ |

### Rekomendasi Tindak Lanjut

- [ ] Mahasiswa dapat melanjutkan ke materi berikutnya.
- [ ] Mahasiswa perlu memperbaiki aspek: ........................................................
- [ ] Mahasiswa perlu pendampingan tambahan pada: ........................................................

---

## 6. Panduan Objektivitas Penilai

1. **Nilai bukti, bukan pengakuan.** Jika mahasiswa mengatakan Bootstrap berfungsi, periksa tab Network dan tampilan.
2. **Gunakan deskriptor.** Cocokkan kondisi nyata dengan indikator skor, bukan kesan pribadi.
3. **Jangan mengurangi skor karena selera desain** selama komponen Bootstrap digunakan dengan tepat dan responsif.
4. **Bedakan error fatal dan kekurangan kecil.** Satu typo yang mudah diperbaiki tidak otomatis menurunkan skor ke 1.
5. **Skor 4 diberikan jika konsisten**, bukan karena satu halaman terlihat bagus.
6. **Catat aspek yang perlu diperbaiki** agar umpan balik dapat ditindaklanjuti.

---

## 7. Hubungan Rubrik dengan Sub-Capaian

| Sub-Capaian | Aspek Rubrik |
|---|---|
| a. Mengimplementasikan template Bootstrap ke CodeIgniter | A, B |
| b. Mengimplementasikan CSS Bootstrap pada CodeIgniter | B |
| c. Memecah template Bootstrap | C |
| Kemampuan praktik secara keseluruhan | D, E |

---

## 8. Komponen Penilaian Lain (Opsional)

Sesuai RPS, nilai praktik dapat dikombinasikan dengan:

| Komponen | Saran Bobot |
|---|---|
| Pretest | 10% |
| Posttest | 20% |
| Ujian praktik (rubrik ini) | 70% |
| **Total** | **100%** |

> Bobot di atas adalah contoh. Ikuti ketentuan RPS/dosen pengampu.

---

## 9. Rekap Penilaian Kelas

| No | Nama | NIM | A | B | C | D | E | Nilai | Huruf |
|---|---|---|---|---|---|---|---|---|---|
| 1 | | | | | | | | | |
| 2 | | | | | | | | | |
| 3 | | | | | | | | | |
| 4 | | | | | | | | | |
| 5 | | | | | | | | | |
| 6 | | | | | | | | | |
| 7 | | | | | | | | | |
| 8 | | | | | | | | | |
| 9 | | | | | | | | | |
| 10 | | | | | | | | | |
