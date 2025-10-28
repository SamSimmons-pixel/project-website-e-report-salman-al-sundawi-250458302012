-----

# 📢 Portal Pengaduan Masyarakat

Aplikasi web yang dirancang untuk memudahkan masyarakat 👥 dalam menyampaikan pengaduan terkait berbagai isu. Platform ini memungkinkan warga untuk membuat, mengirim 📨, dan memantau status laporan mereka 📊. Di sisi lain, administrator dapat mengelola laporan yang masuk, mengubah statusnya (pending, proses, selesai), dan mengelola data pengguna.

-----

## 🛠️ Teknologi yang Digunakan

  - **Framework**: [Laravel](https://laravel.com/)
  - **UI/Frontend**: [Livewire](https://livewire.laravel.com/) ⚡, [Tailwind CSS](https://tailwindcss.com/) 💨, [Vite](https://vitejs.dev/) ⚡
  - **Backend**: PHP 🐘
  - **Database**: SQLite 🗄️ (default), dapat dikonfigurasi untuk MySQL, PostgreSQL, dll.

-----

## 🚀 Cara Menjalankan Proyek

Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek ini di lingkungan pengembangan lokal Anda.

### ✅ Prasyarat

  - PHP (versi yang sesuai dengan `composer.json`)
  - [Composer](https://getcomposer.org/)
  - [Node.js](https://nodejs.org/) & NPM
  - Web Server (misalnya Apache, Nginx)

### ⚙️ Instalasi

1.  **Clone repositori ini:** 📂

    ```bash
    git clone https://github.com/SamSimmons-pixel/project-website-e-report-salman-al-sundawi-250458302012.git
    cd project-website-e-report-salman-al-sundawi-250458302012
    ```

2.  **Install dependensi PHP:** 📦

    ```bash
    composer install
    ```

3.  **Install dependensi JavaScript:** 📦

    ```bash
    npm install
    ```

4.  **Siapkan file environment:** 🔑
    Salin file `.env.example` menjadi `.env` dan generate kunci aplikasi.

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Konfigurasi database:** 🗄️
    Proyek ini menggunakan SQLite secara default. Buat file database:

    ```bash
    touch database/database.sqlite
    ```

    Jalankan migrasi untuk membuat tabel yang diperlukan:

    ```bash
    php artisan migrate
    ```

6.  **Seed database (opsional, tapi direkomendasikan untuk testing):** 🌱
    Perintah ini akan membuat satu user admin dan satu user warga.

    ```bash
    php artisan db:seed
    ```

    Akun default:

      - **Admin** 👨‍💻: `admin@gmail.com` | password: `admin`
      - **Warga** 🙍‍♂️: `masyarakat@gmail.com` | password: `masyarakat`

7.  **Jalankan server pengembangan:** 🔥
    Gunakan skrip dari `composer.json` untuk menjalankan semua layanan yang dibutuhkan secara bersamaan (server PHP, Vite, dan queue).

    ```bash
    composer run dev
    ```

    Aplikasi Anda akan tersedia di `http://localhost:8000` (atau port lain yang ditampilkan). Selamat mencoba\! 😄
