<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# JJJ Gallery

JJJ Gallery adalah website untuk melihat dan mengunduh foto-foto event sekolah SMK Kristen Immanuel Pontianak. Platform ini memudahkan siswa, guru, dan alumni untuk menemukan, mencari, dan mengunduh dokumentasi event yang biasanya sulit dicari.

---

## Daftar Isi

-   [Fitur Utama](#fitur-utama)
-   [Instalasi](#instalasi)
-   [Penggunaan](#penggunaan)
-   [Arsitektur & Tech Stack](#arsitektur--tech-stack)
-   [Kontributor](#kontributor)
-   [Lisensi](#lisensi)

---

## Fitur Utama

-   Melihat galeri foto event sekolah
-   Mengunduh foto event
-   Pencarian foto berdasarkan nama event
-   Filter foto berdasarkan kategori event
-   Autentikasi pengguna (login)

---

## Instalasi

### Prasyarat

-   PHP >= 8.1
-   Composer
-   Node.js & npm
-   MySQL

### Langkah Instalasi

1. **Clone repository**
    ```bash
    git clone <repository-url>
    cd gallerytest
    ```
2. **Install dependensi PHP**
    ```bash
    composer install
    ```
3. **Install dependensi frontend**
    ```bash
    npm install
    ```
4. **Salin file environment**
    ```bash
    cp .env.example .env
    ```
5. **Konfigurasi database**
    - Edit file `.env` dan sesuaikan pengaturan database Anda.
6. **Generate application key**
    ```bash
    php artisan key:generate
    ```
7. **Jalankan migrasi dan seeder**
    ```bash
    php artisan migrate --seed
    ```
8. **Build asset frontend**
    ```bash
    npm run build
    ```
9. **Jalankan server lokal**
    ```bash
    php artisan serve
    ```

---

## Penggunaan

1. **Login**
    - Pengguna melakukan login terlebih dahulu.
2. **Lihat Galeri**
    - Setelah login, pengguna dapat melihat daftar foto event sekolah.
3. **Cari & Filter**
    - Gunakan fitur pencarian berdasarkan nama event atau filter berdasarkan kategori.
4. **Lihat/Unduh Foto**
    - Klik pada card foto untuk melihat detail dan mengunduh foto.

---

## Arsitektur & Tech Stack

-   **Backend:** Laravel
-   **Frontend:** Alpine.js, Tailwind CSS
-   **Database:** MySQL
-   **Build Tool:** Vite

### Struktur Folder Utama

-   `app/` : Logika aplikasi (Controllers, Models)
-   `resources/views/` : File Blade view
-   `routes/` : Routing aplikasi
-   `public/` : File statis dan entry point aplikasi
-   `database/` : Migrasi, seeder, dan factory

---

## Kontributor

-   **Justine Taniardi**: Pengembang utama (coding)
-   **Jose Keitaro**: Desain high-fidelity
-   **Jeff Filbert**: Desain low-fidelity

---

## Lisensi

Proyek ini dilisensikan di bawah MIT License. Lihat file [LICENSE](LICENSE) untuk detail lebih lanjut.
