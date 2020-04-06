# TafsirQ Versi 2

## Requirements
- PHP 7.4
- php-bcmath
- php-bz2
- php-common
- php-dom
- php-gd
- php-intl
- php-json
- php-mbstring
- php-mysql
- php-zip

## Instalasi
- Clone repository
- `php composer.phar install`
- Copy `.env.example` to `.env`
- Folders that must writeable:
    - storage
    - bootstrap/cache
- `npm install`

## Menjalankan Aplikasi
- Setup web server Anda masing-masing
- Sesuaikan APP_URL di file `.env`, misalnya `http://localhost` atau `http://tafsirq.test`
- Jalankan `npm run watch`, web tafsirq bisa diakses di `http://localhost:3000`
