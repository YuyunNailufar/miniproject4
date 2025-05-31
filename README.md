**Nama : Yuyun Nailufar**  
**NPM : 2308107010066**
# ApoTrack 💊

ApoTrack adalah sistem manajemen apotek berbasis web yang dikembangkan menggunakan Laravel. Aplikasi ini dirancang untuk memudahkan pengelolaan data obat, mulai dari penambahan, pengeditan, hingga penghapusan, dengan antarmuka modern dan responsif.

## ✨ Fitur Utama

- ✅ CRUD Data Obat
- 🔍 Pencarian obat secara dinamis
- 📷 Upload gambar obat
- ⚠️ Validasi form untuk input data
- 🎨 Antarmuka pengguna modern dan responsif

## 📷 Tampilan

Berikut adalah cuplikan dari antarmuka ApoTrack:

![Tampilan UI](public/screenshots/dashboard.png)

## 🚀 Teknologi yang Digunakan

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/) (opsional)
- Blade Template Engine
- Font Google: Inter
- MySQL (via XAMPP)

## ⚙️ Instalasi

Langkah-langkah untuk menjalankan project ini di lokal:

1. Clone repository:
    ```bash
    git clone https://github.com/YuyunNailufar/miniproject4.git
    ```

2. Masuk ke direktori proyek:
    ```bash
    cd miniproject4
    ```

3. Install dependencies:
    ```bash
    composer install
    ```

4. Copy file `.env`:
    ```bash
    cp .env.example .env
    ```

5. Generate application key:
    ```bash
    php artisan key:generate
    ```

6. Buat database baru di XAMPP, lalu sesuaikan konfigurasi `.env`:
    ```dotenv
    DB_DATABASE=apotrack
    DB_USERNAME=root
    DB_PASSWORD=
    ```

7. Jalankan migrasi dan seeder:
    ```bash
    php artisan migrate --seed
    ```

8. Jalankan aplikasi:
    ```bash
    php artisan serve
    ```

## 👤 Akun Login (Seeder)

- **Email:** user@example.com  
- **Password:** password

## 📌 Catatan

- Belum ada fitur autentikasi multi-role.
- Tampilan UI masih akan terus ditingkatkan.

## 📝 Lisensi

Proyek ini dikembangkan sebagai bagian dari tugas kuliah dan bersifat open-source. Silakan gunakan, modifikasi, dan kembangkan sesuai kebutuhan.

---

