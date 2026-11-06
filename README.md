# SIPENTA — Sistem Informasi Penagihan Telkom Akses

SIPENTA adalah aplikasi monitoring proyek dan penagihan berbasis web yang dirancang untuk membantu Unit Konstruksi PT Telkom Akses mengelola data proyek secara terpusat, terstruktur, dan mudah dipantau.

Aplikasi ini menyediakan dashboard monitoring, pengelolaan data proyek, pemantauan tahapan penagihan, manajemen pengguna berbasis role, notifikasi, audit aktivitas, import/export Excel, serta fitur prioritas proyek.

> Repository ini merupakan bagian dari implementasi dan dokumentasi kegiatan Praktik Kerja Lapangan (PKL) mahasiswa Program Studi D-III Teknik Informatika, Jurusan Teknik Elektro, Politeknik Negeri Pontianak.

## Daftar Isi

- [Latar Belakang](#latar-belakang)
- [Tentang PT Telkom Akses](#tentang-pt-telkom-akses)
- [Tentang Aplikasi](#tentang-aplikasi)
- [Analisis Kebutuhan](#analisis-kebutuhan)
- [Fitur Utama](#fitur-utama)
- [Hak Akses Pengguna](#hak-akses-pengguna)
- [Teknologi yang Digunakan](#teknologi-yang-digunakan)
- [Struktur Project](#struktur-project)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi dan Menjalankan Aplikasi](#instalasi-dan-menjalankan-aplikasi)
- [Konfigurasi Environment](#konfigurasi-environment)
- [Keamanan](#keamanan)
- [Status Project](#status-project)

## Latar Belakang

Perguruan Tinggi Negeri (PTN) merupakan lembaga pendidikan yang menyelenggarakan pendidikan dengan cakupan yang kompleks. Salah satu bentuk pendidikan yang berorientasi pada kesiapan kerja adalah pendidikan vokasi. Pendidikan vokasi mempersiapkan mahasiswa melalui pengetahuan dasar, kemampuan teknis, dan pengalaman praktis yang sesuai dengan kebutuhan industri, perusahaan, maupun instansi pemerintah.

Politeknik Negeri Pontianak (POLNEP) merupakan institusi pendidikan vokasi yang menerapkan kurikulum berbasis praktik. Salah satu penerapannya adalah Praktik Kerja Lapangan (PKL), yaitu program wajib bagi mahasiswa untuk memperoleh pengalaman kerja secara langsung sesuai bidang keahlian. Pada Program Studi D-III Teknik Informatika, PKL membantu mahasiswa menghubungkan teori yang diperoleh selama perkuliahan dengan kebutuhan dan permasalahan nyata di dunia kerja.

Dalam pelaksanaan PKL, penulis ditempatkan pada Unit Konstruksi PT Telkom Akses. Unit ini berperan dalam pengelolaan administrasi proyek dan monitoring proses proyek yang dilaksanakan oleh perusahaan bersama pihak mitra. Berdasarkan observasi dan wawancara dengan staf unit terkait, proses penagihan proyek melibatkan beberapa tahapan, mulai dari pekerjaan lapangan oleh mitra hingga proses administrasi penagihan.

Sebelum SIPENTA dikembangkan, monitoring proyek masih memanfaatkan Google Spreadsheet. Data tersebar dalam banyak kolom dan beberapa sheet, sedangkan sinkronisasi masih dilakukan secara manual menggunakan rumus-rumus tertentu. Kondisi tersebut menyulitkan pengguna dalam memperoleh informasi status dan progres proyek secara cepat, konsisten, dan akurat.

Oleh karena itu, SIPENTA dirancang sebagai sistem informasi penagihan berbasis web yang mampu menyajikan data proyek secara terpusat, membantu proses monitoring, mengurangi ketergantungan pada pengolahan spreadsheet manual, serta mendukung pengambilan keputusan di Unit Konstruksi.

## Tentang PT Telkom Akses

PT Telkom Akses (PTTA) didirikan pada 12 Desember 2012 sebagai anak perusahaan PT Telkom Indonesia (Persero) Tbk. Pendirian PTTA merupakan langkah strategis TelkomGroup untuk mengoptimalkan pengelolaan infrastruktur jaringan akses telekomunikasi di Indonesia.

PT Telkom Akses bergerak dalam penyediaan layanan konstruksi dan pemeliharaan jaringan. Perusahaan ini memiliki peran penting dalam menjaga kualitas konektivitas internet dan layanan digital melalui pengelolaan infrastruktur last-mile access, termasuk jaringan fiber optic, copper, dan wireless.

Sejak 2014, PT Telkom Akses juga memperluas layanan ke pasar eksternal di luar ekosistem TelkomGroup. Perkembangan tersebut mendukung transformasi perusahaan menjadi penyedia managed service yang kompetitif dan terpercaya di tingkat nasional.

Dalam konteks aplikasi ini, PT Telkom Akses Regional Kalimantan Barat merupakan unit kerja yang bertanggung jawab terhadap pengelolaan jaringan akses di wilayah Kalimantan Barat sebagai bagian dari Regional 6 Telkom Indonesia.

## Tentang Aplikasi

SIPENTA atau **Sistem Informasi Penagihan Telkom Akses** adalah aplikasi berbasis web untuk membantu Unit Konstruksi Internal PT Telkom Akses melakukan monitoring proyek dan proses penagihan.

SIPENTA menyajikan informasi proyek secara terpusat sesuai hak akses pengguna. Informasi yang dikelola mencakup identitas proyek, mitra, PID, nomor PO, fase pekerjaan, status CT dan UT, rekonsiliasi nilai, rekonsiliasi material, pelurusan material, procurement, status penagihan, tanggal invoice, tanggal jatuh tempo, catatan, serta prioritas proyek.

Tujuan utama SIPENTA adalah:

- memusatkan data proyek dan penagihan dalam satu aplikasi;
- memudahkan pemantauan progres setiap proyek;
- membantu pengguna mengidentifikasi proyek yang perlu diprioritaskan;
- mengurangi proses manual pada spreadsheet;
- meningkatkan keterlacakan melalui log aktivitas;
- memberikan informasi yang lebih cepat untuk mendukung keputusan operasional.

## Analisis Kebutuhan

Analisis kebutuhan SIPENTA dilakukan melalui observasi proses kerja Unit Konstruksi, wawancara, dan diskusi dengan pemberi proyek, pembimbing lapangan, serta staf unit terkait. Analisis ini digunakan untuk memahami alur kerja penagihan, kebutuhan informasi, pembagian hak akses, dan kebutuhan antarmuka aplikasi.

### Kebutuhan Fungsional

Sistem perlu menyediakan kemampuan untuk:

- melakukan login dan logout pengguna;
- mengelola profil dan password pengguna;
- menampilkan dashboard ringkasan proyek dan penagihan;
- menambah, melihat, mengubah, dan menghapus data proyek;
- mencari, memfilter, dan mengurutkan data proyek;
- mengelola status tahapan proyek dan penagihan;
- mengatur prioritas proyek secara manual maupun otomatis;
- mengimpor dan mengekspor data menggunakan Excel;
- menyediakan template import proyek;
- menampilkan notifikasi terkait proyek dan jatuh tempo;
- mencatat aktivitas sistem dan log navigasi pengguna;
- membersihkan data log berdasarkan kebutuhan administrator;
- mengelola pengguna berdasarkan role dan status aktif.

### Kebutuhan Non-Fungsional

Sistem diharapkan:

- dapat diakses melalui browser modern;
- memiliki antarmuka yang responsif dan mudah dipahami;
- menerapkan autentikasi dan pembatasan hak akses;
- menggunakan API terstruktur antara frontend dan backend;
- menjaga credential dan konfigurasi sensitif di luar source code;
- memiliki struktur data yang dapat dikembangkan dan dipelihara;
- menyediakan pencatatan aktivitas untuk mendukung audit operasional.

## Fitur Utama

### Dashboard Monitoring

Menampilkan ringkasan data proyek, status penagihan, statistik, prioritas, dan informasi penting lainnya dalam bentuk yang mudah dipahami.

### Manajemen Proyek

Pengguna dengan hak akses yang sesuai dapat membuat, mengubah, melihat detail, menghapus, mencari, dan memfilter data proyek.

### Tahapan Penagihan

Data proyek dapat dipantau berdasarkan tahapan CT, UT, rekonsiliasi, material, procurement, status pembayaran, invoice, dan jatuh tempo.

### Prioritas Proyek

Proyek dapat diberi prioritas secara manual atau dihitung menggunakan mekanisme prioritas berdasarkan kondisi proyek dan tenggat waktu.

### Import dan Export Excel

Administrator dapat mengunduh template, mengimpor data proyek melalui Excel, melihat hasil validasi, dan mengekspor data untuk kebutuhan pelaporan.

### Notifikasi

Sistem menyediakan notifikasi untuk membantu pengguna memantau kondisi proyek dan tenggat penagihan.

### Audit Aktivitas

Aktivitas sistem dan log navigasi dicatat agar perubahan dan penggunaan aplikasi dapat ditelusuri.

### Data Cleanup

Super Admin dapat melihat dan membersihkan data aktivitas, log, dan notifikasi berdasarkan tahun atau kebutuhan operasional.

## Hak Akses Pengguna

| Role | Kemampuan utama |
| --- | --- |
| `super_admin` | Akses penuh, manajemen user, audit aktivitas, cleanup data, prioritas otomatis, dan pengaturan sistem |
| `admin` | Mengelola data proyek, import/export, notifikasi, dan monitoring operasional |
| `viewer` | Melihat dashboard, daftar proyek, detail proyek, dan informasi monitoring sesuai izin |

Semua endpoint yang membutuhkan autentikasi dilindungi menggunakan Laravel Sanctum dan middleware role.

## Teknologi yang Digunakan

### Frontend

- React 18
- TypeScript
- Vite
- React Router
- TanStack React Query
- Axios
- Tailwind CSS
- Radix UI dan komponen UI pendukung

### Backend

- PHP 8.2+
- Laravel 12
- Laravel Sanctum
- MySQL
- Laravel Excel untuk import/export Excel
- Composer

## Struktur Project

```text
SIPENTA/
├── SIPENTA-BACK-END/       # REST API dan aplikasi Laravel
│   ├── app/                # Controller, model, service, middleware
│   ├── database/           # Migration, factory, dan seeder
│   ├── routes/             # API routes
│   ├── config/             # Konfigurasi Laravel
│   └── public/             # Entry point backend
├── SIPENTA-FRONT-END/      # Aplikasi React/Vite
│   ├── src/components/     # Komponen UI
│   ├── src/pages/          # Halaman aplikasi
│   ├── src/services/       # Komunikasi API
│   └── public/             # Asset publik
└── README.md
```

## Persyaratan Sistem

Pastikan perangkat sudah memiliki:

- PHP 8.2 atau lebih baru;
- Composer;
- Node.js 20 atau lebih baru;
- npm;
- MySQL atau MariaDB;
- Git;
- Laragon, XAMPP, atau web server lokal lain yang sesuai.

## Instalasi dan Menjalankan Aplikasi

### 1. Clone repository

```bash
git clone https://github.com/sann018/SIPENTA-TelkomAkses.git
cd SIPENTA-TelkomAkses
```

### 2. Siapkan database

Buat database MySQL dengan nama:

```text
monitoring_penagihan
```

Sesuaikan nama database, username, dan password pada file `.env` backend.

### 3. Siapkan backend

```bash
cd SIPENTA-BACK-END
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
```

Untuk Windows PowerShell, gunakan perintah berikut untuk menyalin environment file:

```powershell
Copy-Item .env.example .env
```

Jika ingin membuat data demo, isi variable `SEED_*_PASSWORD` pada `.env`, lalu jalankan:

```bash
php artisan db:seed
```

Jalankan API Laravel:

```bash
php artisan serve
```

Backend tersedia di `http://localhost:8000`.

### 4. Siapkan frontend

Buka terminal baru:

```bash
cd SIPENTA-FRONT-END
npm install
copy .env.example .env
npm run dev
```

Untuk Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

Frontend tersedia di `http://localhost:5173`.

### 5. Build production frontend

```bash
cd SIPENTA-FRONT-END
npm run build
npm run preview
```

## Konfigurasi Environment

Backend menggunakan file `SIPENTA-BACK-END/.env`. Frontend menggunakan file `SIPENTA-FRONT-END/.env`.

Contoh konfigurasi frontend:

```env
VITE_API_BASE_URL=http://localhost:8000/api
```

Contoh konfigurasi database backend:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=monitoring_penagihan
DB_USERNAME=root
DB_PASSWORD=
```

Jangan mengunggah file `.env` ke repository publik. Gunakan `.env.example` sebagai template konfigurasi.

## Keamanan

- Credential disimpan melalui environment variable, bukan di source code.
- File `.env`, credential hosting, dependency, dan hasil build diabaikan oleh Git.
- Password seeder harus ditentukan sendiri melalui variable `SEED_*_PASSWORD`.
- Gunakan password yang kuat dan berbeda untuk setiap environment.
- Ganti credential database, SMTP, dan API apabila pernah terekspos.
- Jangan menjalankan `php artisan migrate:fresh` pada database yang berisi data penting karena perintah tersebut dapat menghapus seluruh tabel.

## Status Project

Project saat ini memiliki frontend dan backend yang dapat dijalankan secara lokal. Frontend telah diuji melalui production build, sedangkan backend telah diuji melalui Laravel server dan koneksi database lokal.

## Kontribusi

Perubahan dan pengembangan dapat dilakukan melalui branch baru dan pull request. Sebelum membuat pull request, pastikan:

```bash
npm run build
composer validate --no-check-publish
php artisan route:list
```

## Lisensi

Project ini dikembangkan untuk kebutuhan akademik, PKL, dokumentasi, dan pengembangan sistem monitoring internal. Penggunaan lebih lanjut perlu menyesuaikan kebijakan dan izin dari pihak terkait.
