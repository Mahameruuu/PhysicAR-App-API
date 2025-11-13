🧩 README – Backend API (Laravel)
# 🧠 Backend API - Laravel

## 📘 Deskripsi
Proyek ini merupakan **Backend API** yang dibangun menggunakan **Laravel**.  
API ini menyediakan layanan untuk aplikasi mobile Flutter, meliputi manajemen data (CRUD), autentikasi, serta integrasi database.

---

## ⚙️ Fitur Utama
- CRUD untuk entitas utama
- Autentikasi (Sanctum / JWT)
- Integrasi dengan database MySQL
- Endpoint REST API untuk aplikasi mobile
- Logging dan error handling

---

## 🧰 Setup Lingkungan

### 1️⃣ Clone Repository
- git clone
- cd

2️⃣ Install Dependencies
```bash
composer install
```

3️⃣ Konfigurasi .env

Salin file contoh dan sesuaikan:


```bash
cp .env.example .env
```

Ubah pengaturan database dan APP_URL sesuai server kamu.

4️⃣ Generate Key Aplikasi
```bash
php artisan key:generate
```

5️⃣ Migrasi & Seeder Database
```bash
php artisan migrate --seed
```

6️⃣ Jalankan Server
```bash
php artisan serve
```

Akses API di http://localhost:8000

🧪 Pengujian API

Gunakan Postman / Insomnia untuk menguji endpoint:

- GET /api/users
- POST /api/login
- GET /api/data
- dan lain-lain

Jika error, periksa log Laravel di storage/logs/laravel.log.

🚀 Deployment

Upload project ke server

Jalankan:
```bash
php artisan config:cache
php artisan route:cache
php artisan migrate --force
```

Pastikan permission folder storage dan bootstrap/cache sudah benar.

📁 Struktur Folder Penting

``` text
app/
 ├── Http/
 │    ├── Controllers/
 │    └── Middleware/
database/
 ├── migrations/
routes/
 ├── api.php
.env
```

👨‍💻 Kontributor

Backend Developer: [M. Mahameru. A]

Framework: Laravel
