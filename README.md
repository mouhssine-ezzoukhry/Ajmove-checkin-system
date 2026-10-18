<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🎯 Forum d'Orientation Ben M'sik — QR Code Check-in System

A robust, production-ready, self-hosted web application engineered for the 3rd edition of the Ben M'sik Student Orientation Forum. Built to streamline participant management, automate PDF convocation ticketing, and provide seamless, offline-capable mobile LAN check-ins for event staff.

---

## 🚀 Key Features

- **Automated Data Import**: Seamlessly ingest pre-registration data from Google Forms and CSV files directly into the database.
- **Dynamic QR Code Generation**: Generates high-performance PNG QR codes leveraging `bacon/bacon-qr-code` with the GD backend for reliable rendering without external image processor dependencies.
- **Instant PDF Convocations**: Generates professional PDF tickets via `barryvdh/laravel-dompdf`, complete with embedded secure QR passes and custom branding.
- **Local Area Network (LAN) Mobile Scanning**: Fully operational over local wireless hotspots (`0.0.0.0`), allowing staff to scan attendee tickets using mobile devices without requiring an active internet connection.
- **Real-Time Admin Dashboard**: Live status tracking counters (total pre-registrations, checked-in participants, and pending attendees) with instant status toggling and keyword search functionality.

---

## 🛠️ Tech Stack

- **Backend**: Laravel 12 (PHP 8.2+)
- **Database**: MySQL / SQLite
- **PDF Engine**: Barryvdh Laravel DomPDF
- **QR Engine**: Bacon QR Code (`bacon/bacon-qr-code`)
- **Frontend**: Bootstrap 5, Blade Templates, Custom Flat Design UI

---

## ⚙️ Installation & Local Setup

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/Mezz-1/Ajmove-checkin-system.git](https://github.com/Mezz-1/Ajmove-checkin-system.git)
   cd Ajmove-checkin-system
Install PHP and JavaScript dependencies:

Bash
composer install
npm install && npm run build
Configure environment variables:

Bash
cp .env.example .env
php artisan key:generate
Update your database credentials and set your local network IP in .env:

Extrait de code
APP_URL=http://YOUR_LOCAL_IP:8000
Run database migrations:

Bash
php artisan migrate:fresh --seed
Start the local network server:

Bash
php artisan serve --host=0.0.0.0 --port=8000
📱 Event Day Workflow
Connect the host laptop and scanning smartphones to the same local Wi-Fi router or mobile hotspot.

Bind the Laravel development server to all network interfaces (--host=0.0.0.0).

Organizers access the application dashboard via mobile browser, open the built-in scanner, and scan participant QR codes to validate entry instantly in real time.

👤 Author
Ezzoukhry Mouhssine

Head of Data & Digitalization Department — AJMOVE.
