<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



Berikut adalah contoh `README.md` lengkap untuk proyek **Laravel 12 API dengan JWT Auth**, cocok digunakan untuk dokumentasi internal maupun publik:

---

````md
# 🔐 Laravel 12 API Starter - JWT Auth

Project ini adalah starter template API menggunakan **Laravel 12** dengan fitur autentikasi berbasis **JWT (JSON Web Token)**.

## 🚀 Fitur

- Register & Login API
- JWT Authentication
- Middleware `auth:api`
- Struktur direktori rapi (berbasis service)
- Laravel 12 baru (tanpa Kernel)

---

## ⚙️ Persiapan

### 1. Clone Repo

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
````

### 2. Install Dependency

```bash
composer install
```

### 3. Salin file `.env`

```bash
cp .env.example .env
```

### 4. Generate App Key

```bash
php artisan key:generate
```

---

## 🧩 Instalasi JWT Auth

```bash
composer require tymon/jwt-auth
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan jwt:secret
```

Ini akan menambahkan `JWT_SECRET` otomatis ke file `.env`.

---

## 🛠️ Konfigurasi Auth

Edit file `config/auth.php`:

```php
'guards' => [
    'web' => [
        'driver' => 'session',
        'provider' => 'users',
    ],
    'api' => [
        'driver' => 'jwt',
        'provider' => 'users',
    ],
],
```

---

## 🧪 Jalankan Project

```bash
php artisan serve
```

API akan bisa diakses di:

```
http://127.0.0.1:8000
```

---

## 📡 Endpoint API

### ✅ Register

`POST /api/v1/register`

**Body:**

```json
{
  "name": "Anam Maulana",
  "email": "anam@example.com",
  "password": "rahasia123",
  "password_confirmation": "rahasia123"
}
```

---

### ✅ Login

`POST /api/v1/login`

```json
{
  "email": "anam@example.com",
  "password": "rahasia123"
}
```

**Response:**

```json
{
  "message": "Login successful",
  "token": "jwt_token_here"
}
```

---

### 🔐 Protected Route (JWT)

`GET /api/v1/me`
Gunakan `Authorization: Bearer <token>` di header.

---

### 🔒 Logout

`POST /api/v1/logout`
Juga membutuhkan token.

---

## 📁 Struktur Direktori (Ringkas)

```
app/
├── Http/
│   └── Controllers/
│       └── Api/
│           └── AuthController.php
├── Services/
│   └── AuthService.php
routes/
└── api.php
```

---

## 📋 Tips Tambahan

* Gunakan Postman/Insomnia untuk uji API.
* Simpan token di localStorage/sessionStorage kalau pakai frontend.
* Untuk dokumentasi otomatis, bisa tambah package seperti `darkaonline/l5-swagger`.

---

## 👤 Author

Made with ❤️ by **Anam Maulana**
Email: `anam@example.com`

```

---

Kalau kamu mau ini dijadikan file `.md` atau dimodifikasi untuk fitur tambahan (role-permission, verifikasi email, dsb), tinggal bilang aja!
```

