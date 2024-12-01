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
```

## 🔒 Default Credentials

**Admin:**
- Email: admin@example.com
- Password: password

**User:**
- Email: user@example.com
- Password: password

## 🛠 Configuration

1. Configure your environment variables in `.env`:
```env
APP_NAME="Your App Name"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

2. Configure mail settings for password reset and verification:
```env
MAIL_MAILER=smtp
MAIL_HOST=your_mail_host
MAIL_PORT=587
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

## 📚 Documentation

Detailed documentation is available in the [Wiki](link-to-wiki).

## 🔄 Updates

This project follows [Semantic Versioning](https://semver.org/). To update:

```bash
composer update
npm update
php artisan migrate
```

## 🚧 Roadmap

- [ ] Real-time Notifications
- [ ] Advanced User Management
- [ ] API Authentication
- [ ] Two-Factor Authentication
- [ ] Audit Logging
- [ ] File Management
- [ ] Theme Customization
- [ ] Export/Import Features

## 🤝 Contributing

Contributions are welcome! Please check out our [Contributing Guide](CONTRIBUTING.md).

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- [Laravel](https://laravel.com)
- [Tabler](https://tabler.io)
- [All Contributors](../../contributors)

## 📧 Support

If you discover any issues or have questions, please [create an issue](https://github.com/fxio/laravel-tabler-starter/issues).
