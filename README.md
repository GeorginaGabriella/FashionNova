# 🌹 FashionNova — Premium Fashion E-Commerce

FashionNova adalah platform *e-commerce* premium yang dirancang khusus untuk memenuhi kebutuhan belanja pakaian modern dengan cita rasa mewah dan elegan. Dibangun dengan framework **Laravel 11**, sistem ini mengedepankan kesederhanaan arsitektural (MVC), performa cepat, dan antarmuka pengguna (UI/UX) yang anggun.

---

## ✨ Fitur Utama

### 1. Manajemen Akun & Autentikasi (`customer` & `admin`)
*   **Autentikasi Aman:** Sistem pendaftaran, masuk, dan keluar dengan enkripsi password standar industri.
*   **Profil Saya:** Pengubahan detail dasar pengguna (Nama, Nomor HP) serta fitur pembaruan password yang aman.
*   **Buku Alamat:** Pengelolaan multi-alamat pengiriman dengan opsi pengaturan alamat utama (*default address*).

### 2. Sistem Belanja & Interaksi Produk
*   **Manajemen Produk & Kategori:** Penjelajahan koleksi busana terkurasi lengkap dengan galeri foto dan varian produk.
*   **Wishlist Cerdas:** Penambahan atau penghapusan produk favorit secara *real-time* dilengkapi validasi data dan notifikasi visual (*flash messages*).
*   **Sistem Keranjang & Kupon:** Keranjang belanja dinamis dengan dukungan kode promo/kupon diskon.

### 3. Alur Checkout & Pembayaran
*   **Halaman Checkout Premium:** Formulir checkout ringkas dengan integrasi alamat pengiriman default dan pemilihan jasa kurir.
*   **Pembayaran Terintegrasi:** Dukungan simulasi metode pembayaran (Visa, Mastercard, Transfer Bank BCA, Gopay, OVO).

### 4. Pusat Kendali Admin (Admin Panel)
*   **Dashboard Visual Premium:** Statistik penjualan secara *real-time* (Total Penjualan, Total Order, Pelanggan Aktif, Rasio Konversi), grafik tren interaktif berbasis SVG, serta tabel pesanan terbaru dengan status badge yang dinamis.
*   **Modul Manajemen:** Pengelolaan pesanan masuk (*orders*), pemrosesan pengiriman (*shipping*), laporan finansial (*reports*), dan pemulihan data (*trash*).

---

## 🛠️ Stack Teknologi

*   **Core Framework:** [Laravel 11](https://laravel.com/) (PHP >= 8.2)
*   **Database:** SQLite / MySQL
*   **Frontend Engine:** Blade Templating Engine
*   **Styling (CSS):** Vanilla CSS dengan arsitektur variabel custom (mewah, minimalis, dan responsif).
*   **Package Manager:** Composer & npm

---

## 🚀 Panduan Instalasi & Menjalankan Project

Ikuti langkah-langkah di bawah ini untuk memasang project ini di mesin lokal Anda:

### 1. Klon Repositori
```bash
git clone https://github.com/GeorginaGabriella/FashionNova.git
cd FashionNova
```

### 2. Pasang Dependensi
```bash
composer install
```

### 3. Konfigurasi Environment
Salin file konfigurasi lingkungan `.env`:
```bash
cp .env.example .env
```
Lalu buat application key yang unik:
```bash
php artisan key:generate
```

### 4. Siapkan Database (SQLite)
Secara default, project ini menggunakan SQLite demi kemudahan setup lokal. Buat file database kosong:
```bash
touch database/database.sqlite
```

### 5. Jalankan Migrasi & Seed Data
Migrasikan seluruh tabel basis data dan isi data pengujian awal (termasuk user dummy):
```bash
php artisan migrate --seed
```

Data user pengujian yang disediakan setelah seeding:
*   **Customer Akun:**
    *   *Email:* `test@example.com`
    *   *Password:* `password`
*   **Admin Akun:**
    *   *Email:* `admin@example.com`
    *   *Password:* `password`

### 6. Jalankan Server Lokal
Nyalakan server pengembangan bawaan Laravel:
```bash
php artisan serve
```
Buka browser Anda dan akses halaman: `http://127.0.0.1:8000`

---

## 📐 Struktur Direktori Utama

```text
FashionNova/
├── app/
│   ├── Http/
│   │   ├── Controllers/   # Kontroler alur sistem MVC
│   │   └── Middleware/    # Penjaga rute (AdminMiddleware, dll.)
│   └── Models/            # Representasi tabel basis data (User, Product, Wishlist, dll.)
├── bootstrap/             # Pengaturan aplikasi & middleware Laravel 11
├── config/                # Berkas konfigurasi sistem
├── database/
│   ├── migrations/        # Struktur tabel database
│   └── seeders/           # Pengisian data awal
├── resources/
│   └── views/             # File Blade HTML & Styling CSS
│       ├── admin/         # Tampilan panel kendali admin
│       ├── layouts/       # Template utama (app.blade.php)
│       └── profile/       # Tampilan akun profil pengguna
└── routes/
    └── web.php            # Rute navigasi halaman web
```

---

## 📄 Lisensi

Sistem E-Commerce FashionNova dilisensikan di bawah lisensi [MIT](LICENSE).
