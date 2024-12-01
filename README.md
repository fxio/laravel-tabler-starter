# Laravel Tabler Starter

<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

A professional Laravel starter template with separate admin and user dashboards using the Tabler UI kit. Perfect for quickly bootstrapping Laravel applications with a beautiful admin interface.

## 🚀 Features

- **Multi-Authentication System**
  - Separate admin and user areas
  - Role-based access control
  - Secure authentication flows

- **Admin Dashboard**
  - User Management
  - Role & Permission Management
  - Admin Profile Management
  - Activity Logging
  - Real-time Notifications

- **User Dashboard**
  - User Profile
  - Account Settings
  - Email Verification
  - Password Management

- **Modern Tech Stack**
  - Laravel 10
  - Tabler UI Kit
  - Vite
  - MySQL

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL

## ⚡ Installation

```bash
# Clone the repository
git clone https://github.com/fxio/laravel-tabler-starter.git

# Navigate to the directory
cd laravel-tabler-starter

# Install PHP dependencies
composer install

# Install NPM dependencies
npm install

# Create environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure your database in .env and run migrations with seeders
php artisan migrate --seed

# Build assets
npm run build

# Start the local development server
php artisan serve


🔒 Default Credentials
Admin:

Email: admin@example.com
Password: password

User:

Email: user@example.com
Password: password

🛠 Configuration

Configure your environment variables in .env:

APP_NAME="Your App Name"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
