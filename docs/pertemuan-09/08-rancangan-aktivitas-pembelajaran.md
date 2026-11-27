# 08 — Rancangan Aktivitas Pembelajaran

**Pertemuan:** 9  
**Topik:** Mengintegrasikan Framework CSS Bootstrap ke dalam Framework CodeIgniter  
**Metode:** Cooperative Learning, diskusi, demonstrasi, dan praktik langsung

---

## 1. Alokasi Waktu Sesuai RPS

| Komponen RPS | Perhitungan | Total |
|---|---|---|
| Perkuliahan / TM | 2 × (1 × 40 menit) | **80 menit** |
| Diskusi dan praktik | 2 × (3 × 40 menit) | **240 menit** |
| **Total** | | **320 menit** |

> Alokasi ini **tidak diubah**. Pembagian dilakukan menjadi tiga sesi: satu sesi perkuliahan (80 menit) dan dua sesi praktik (masing-masing 120 menit).

| Sesi | Jenis | Durasi |
|---|---|---|
| Sesi 1 | Perkuliahan | 80 menit |
| Sesi 2 | Diskusi dan praktik 1 | 120 menit |
| Sesi 3 | Diskusi dan praktik 2 | 120 menit |

---

## 2. Capaian dan Sub-Capaian

**Capaian Pembelajaran:**  
Mahasiswa mampu menggunakan template Bootstrap ke dalam framework CodeIgniter.

| Kode | Sub-Capaian |
|---|---|
| **a** | Mengimplementasikan template Bootstrap ke dalam framework CodeIgniter |
| **b** | Mengimplementasikan CSS Bootstrap pada framework CodeIgniter |
| **c** | Memecah template Bootstrap untuk diimplementasikan pada framework CodeIgniter |

---

## 3. Tujuan Aktivitas

Setelah mengikuti seluruh aktivitas, mahasiswa mampu:

1. Menjelaskan konsep integrasi Bootstrap dan CodeIgniter 3.
2. Mendemonstrasikan pemasangan CSS/JS Bootstrap secara lokal.
3. Membangun dashboard sederhana dengan komponen Bootstrap.
4. Memecah template menjadi partial view yang reusable.
5. Bekerja kooperatif dalam kelompok untuk menyelesaikan aplikasi.
6. Menguji serta mempresentasikan hasil praktik.
7. Merefleksikan proses belajar dan kendala yang dihadapi.

---

## 4. Sesi 1 — Perkuliahan (80 Menit)

### Tabel Distribusi Waktu

| No | Aktivitas | Durasi | Metode | Sub-Capaian | Indikator Ketercapaian |
|---|---|---|---|---|---|
| 1 | Pembukaan dan apersepsi | 5 menit | Tanya jawab | a | Mahasiswa menghubungkan pengalaman HTML/CSS dengan Bootstrap |
| 2 | Pretest | 10 menit | Tes individu | a, b, c | Mahasiswa menjawab 10 soal pilihan ganda |
| 3 | Penjelasan konsep Bootstrap dan CodeIgniter | 20 menit | Ceramah interaktif + diskusi | a, b | Mahasiswa menjelaskan MVC, `base_url()`, dan peran view |
| 4 | Demonstrasi integrasi Bootstrap | 20 menit | Demonstrasi | a, b | Mahasiswa melihat CSS/JS Bootstrap termuat di CodeIgniter |
| 5 | Demonstrasi pemisahan template | 15 menit | Demonstrasi | c | Mahasiswa melihat perbedaan view utuh vs partial view |
| 6 | Sintesis dan penutup sesi | 10 menit | Diskusi | a, b, c | Mahasiswa menyimpulkan alur integrasi |
| | **Total** | **80 menit** | | | |

### Uraian Aktivitas

#### 1) Pembukaan dan Apersepsi (5 menit)

Dosen membuka dengan pertanyaan pemantik:

- “Apa perbedaan menulis CSS sendiri dengan menggunakan Bootstrap?”
- “Mengapa tampilan website perlu responsif?”
- “Jika HTML navbar sama di semua halaman, apakah harus ditulis berulang?”

Dosen menyampaikan tujuan pertemuan dan kaitan dengan pertemuan sebelumnya (dasar HTML, CSS, PHP, MVC).

#### 2) Pretest (10 menit)

- Mahasiswa mengerjakan 10 soal pretest pada `05-pretest-posttest.md`.
- Dosen mengumpulkan hasil untuk mengukur pengetahuan awal.
- Jawaban tidak dibahas satu per satu pada tahap ini; dibahas setelah demonstrasi.

#### 3) Penjelasan Konsep (20 menit)

Materi:

- Bootstrap sebagai framework CSS.
- CodeIgniter 3 dan pola MVC.
- Hubungan controller–view.
- Fungsi `base_url()` dan `site_url()`.
- Struktur folder `assets/` vs `application/`.

Dosen menampilkan diagram alur request:

```text
Browser → Router → Controller → View (Bootstrap) → HTML
```

Diselingi tanya jawab singkat.

#### 4) Demonstrasi Integrasi Bootstrap (20 menit)

Dosen mendemonstrasikan langsung:

1. Menyalin aset Bootstrap ke `assets/bootstrap/`.
2. Menambahkan `<link>` di `templates/header.php`.
3. Menambahkan `<script>` bundle di `templates/scripts.php`.
4. Membuka DevTools → Network dan menunjukkan status 200.
5. Menguji dropdown/offcanvas.
6. Sengaja merusak path CSS untuk menunjukkan gejala 404, lalu memperbaikinya.

#### 5) Demonstrasi Pemisahan Template (15 menit)

Dosen menampilkan:

- satu view utuh yang berisi navbar, sidebar, konten, footer;
- view yang sudah dipecah menjadi `header`, `navbar`, `sidebar`, `footer`, `scripts`;
- perbedaan panjang file dan risiko duplikasi.

Dosen menekankan urutan `$this->load->view()` dan pasangan pembuka–penutup layout.

#### 6) Sintesis dan Penutup Sesi (10 menit)

- Dosen merangkum 3 poin kunci: aset, MVC, partial view.
- Mahasiswa mencatat pertanyaan yang akan diuji pada sesi praktik.
- Dosen menginformasikan pembagian kelompok dan target sesi berikutnya.

---

## 5. Sesi 2 — Diskusi dan Praktik 1 (120 Menit)

**Fokus:** integrasi Bootstrap, dashboard, navbar/sidebar, dan pemisahan template.

### Tabel Distribusi Waktu

| No | Aktivitas | Durasi | Metode | Sub-Capaian | Indikator Ketercapaian |
|---|---|---|---|---|---|
| 7 | Pembukaan dan pengarahan praktik | 5 menit | Diskusi | a | Mahasiswa memahami target praktik |
| 8 | Cooperative Learning: pembentukan kelompok dan pembagian peran | 10 menit | Cooperative Learning | a, b, c | Setiap kelompok memiliki ketua, programmer, tester, dokumentator |
| 9 | Praktik 1: integrasi Bootstrap + dashboard | 35 menit | Praktik langsung | a, b | Bootstrap termuat; dashboard tampil |
| 10 | Praktik 2: navbar, sidebar, dan responsivitas dasar | 25 menit | Praktik langsung | a, b | Navigasi berfungsi; sidebar offcanvas berjalan |
| 11 | Praktik 3: memecah template menjadi partial view | 35 menit | Praktik langsung + diskusi kelompok | c | Lima partial view digunakan ulang |
| 12 | Presentasi progres dan konsultasi | 10 menit | Presentasi singkat | a, b, c | Kelompok menunjukkan hasil sementara |
| | **Total** | **120 menit** | | | |

### Cooperative Learning — Struktur Kelompok

- Kelompok berisi **3–4 mahasiswa**.
- Peran:

| Peran | Tugas |
|---|---|
| Ketua | Mengatur waktu dan pembagian tugas |
| Programmer | Menulis controller, model, view |
| Tester | Menguji navigasi, validasi, dan responsivitas |
| Dokumentator | Mencatat file yang diubah dan kendala |

- Setiap anggota wajib memahami seluruh bagian, bukan hanya perannya.
- Dosen berkeliling dan memberi umpan balik.

### Target Sesi 2

- [ ] Project CodeIgniter 3 berjalan.
- [ ] Bootstrap CSS/JS termuat.
- [ ] Dashboard memiliki card statistik.
- [ ] Navbar dan sidebar tampil.
- [ ] Template sudah dipecah minimal `header`, `navbar`, `sidebar`, `footer`.
- [ ] Sidebar mobile berfungsi.

---

## 6. Sesi 3 — Diskusi dan Praktik 2 (120 Menit)

**Fokus:** halaman data mahasiswa, form, pengujian responsif, presentasi, posttest, dan refleksi.

### Tabel Distribusi Waktu

| No | Aktivitas | Durasi | Metode | Sub-Capaian | Indikator Ketercapaian |
|---|---|---|---|---|---|
| 13 | Pembukaan dan review kendala | 5 menit | Diskusi | a, b, c | Kendala sesi sebelumnya teridentifikasi |
| 14 | Praktik 4: halaman data mahasiswa + pagination | 30 menit | Praktik langsung | a, b, c | Tabel, badge, pagination berfungsi |
| 15 | Praktik 5: form mahasiswa + validasi | 30 menit | Praktik langsung | a, b | Form tampil dan tervalidasi |
| 16 | Praktik 6: pengujian responsif dan debugging | 20 menit | Praktik langsung | b | Tampilan rapi di desktop, tablet, mobile |
| 17 | Presentasi hasil kelompok | 20 menit | Presentasi + diskusi | a, b, c | Kelompok mempresentasikan aplikasi dan menjelaskan kode |
| 18 | Posttest | 10 menit | Tes individu | a, b, c | Mahasiswa menjawab 10 soal posttest |
| 19 | Refleksi dan penutup | 5 menit | Refleksi | a, b, c | Mahasiswa menuliskan pembelajaran dan kendala |
| | **Total** | **120 menit** | | | |

### Uraian Presentasi

Setiap kelompok (3–5 menit) menunjukkan:

1. Halaman dashboard.
2. Struktur folder `views/templates/`.
3. Salah satu partial view dan cara pemanggilannya.
4. Halaman data mahasiswa dan pagination.
5. Form dengan validasi.
6. Tampilan mobile (sidebar offcanvas).

Dosen dan kelompok lain memberi pertanyaan singkat.

### Refleksi

Pertanyaan refleksi:

1. Apa konsep yang paling mudah dipahami?
2. Apa kendala terbesar dan bagaimana mengatasinya?
3. Mengapa pemisahan template penting untuk proyek yang lebih besar?
4. Apa yang akan diperbaiki jika waktu praktik ditambah?

---

## 7. Matriks Hubungan Aktivitas dengan Sub-Capaian

| Sub-Capaian | Aktivitas Pendukung | Bukti |
|---|---|---|
| **a. Mengimplementasikan template Bootstrap** | 3, 4, 7, 9, 10, 12, 13–17 | Dashboard, navbar, sidebar, halaman profil |
| **b. Mengimplementasikan CSS Bootstrap** | 2, 3, 4, 9, 10, 14, 15, 16 | Card, table, badge, button, form, alert, pagination |
| **c. Memecah template Bootstrap** | 5, 11, 12, 14, 17 | Folder `templates/`, pemanggilan `$this->load->view()` |

---

## 8. Rekapitulasi Waktu Seluruh Aktivitas

| Sesi | Aktivitas | Durasi |
|---|---|---|
| Sesi 1 | Pembukaan, pretest, konsep, 2 demonstrasi, sintesis | 80 menit |
| Sesi 2 | Pembukaan, cooperative learning, 3 praktik, presentasi progres | 120 menit |
| Sesi 3 | Review, 3 praktik, presentasi, posttest, refleksi | 120 menit |
| **Total** | | **320 menit** |

Kesesuaian dengan RPS:

```text
Perkuliahan/TM      : 2 × (1 × 40) = 80 menit   ✓
Diskusi dan praktik : 2 × (3 × 40) = 240 menit  ✓
Total               : 320 menit                 ✓
```

---

## 9. Media dan Sumber Belajar

| Media | Keterangan |
|---|---|
| Modul Pertemuan 9 | Folder `docs/pertemuan-09/` |
| Source code | Project `pengantar` |
| Browser | Chrome/Edge/Firefox + DevTools |
| Code editor | VS Code/Sublime/Notepad++ |
| Local web server | XAMPP/Laragon/PHP built-in |
| Proyektor | Untuk demonstrasi |

Referensi:

- Bootstrap 5.3: <https://getbootstrap.com/docs/5.3/>
- CodeIgniter 3: <https://codeigniter.com/userguide3/>

---

## 10. Asesmen

| Bentuk | Waktu | Instrumen |
|---|---|---|
| Pretest | Sesi 1 | `05-pretest-posttest.md` |
| Observasi kelompok | Sesi 2–3 | Lembar kerja + rubrik |
| Ujian praktik | Sesi 3 | `07-rubrik-penilaian.md` |
| Posttest | Sesi 3 | `05-pretest-posttest.md` |
| Refleksi | Sesi 3 | `06-lembar-kerja-mahasiswa.md` |

---

## 11. Rencana Antisipasi Kendala

| Kemungkinan Kendala | Solusi |
|---|---|
| Bootstrap tidak tampil | Periksa Network, path, `base_url`, cache |
| Sidebar tidak muncul di mobile | Pastikan `bootstrap.bundle.min.js` termuat |
| `Undefined variable` | Pastikan `$data` dikirim ke setiap partial |
| Session error `mkdir()` | Set `sess_save_path` ke folder yang dapat ditulis |
| Waktu praktik habis | Prioritaskan dashboard, partial, dan data mahasiswa; form dapat diselesaikan sebagai tugas |
| Anggota kelompok pasif | Gunakan pembagian peran dan tanyakan pemahaman individual saat presentasi |
