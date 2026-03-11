# FixFinder Setup Guide

FixFinder is a **Laravel 12** application using SQLite by default, Tailwind CSS v4, Alpine.js, and Vite 7.

---

## Prerequisites

| Requirement | Minimum Version | Check |
|---|---|---|
| PHP | 8.2+ | `php -v` |
| Composer | 2.x | `composer -V` |
| Node.js | 18+ | `node -v` |
| npm | 9+ | `npm -v` |

---

## Option A — One-Command Setup (recommended)

```bash
git clone <repository-url> fixfinder
cd fixfinder
composer setup
```

`composer setup` automates all of the following steps: installs PHP dependencies, copies `.env.example` → `.env`, generates the app key, runs database migrations, installs Node packages, and builds the frontend assets.

---

## Option B — Manual Setup

```bash
# 1. Clone and enter the project
git clone <repository-url> fixfinder
cd fixfinder

# 2. Install PHP dependencies
composer install

# 3. Create environment file
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Create the SQLite database file
touch database/database.sqlite  # Linux/macOS
# Windows:
New-Item database/database.sqlite

# 6. Run database migrations
php artisan migrate

# 7. (Optional) Seed the database with a test user
php artisan db:seed

# 8. Install Node packages and build assets
npm install
npm run build
```

---

## Environment Configuration

The defaults in `.env` work out of the box for local development (SQLite, no external services required). Common overrides:

**Switch to MySQL/PostgreSQL:**
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fixfinder
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

**Application URL:**
```env
APP_URL=http://localhost:8000
```

---

## Running the Development Server

**All-in-one (recommended)** — starts PHP server, queue worker, log viewer, and Vite hot-reload together:
```bash
composer dev
```

**Individual services:**
```bash
php artisan serve       # PHP dev server → http://localhost:8000
npm run dev             # Vite hot-reload for CSS/JS
php artisan queue:work  # Background job queue
php artisan pail        # Real-time log viewer
```

---

## Running Tests

```bash
composer test
# or
php artisan test
```

---

## Docker (Laravel Sail)

If you prefer Docker over a local PHP install:
```bash
composer install --ignore-platform-reqs
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
./vendor/bin/sail npm run build
```

---

## Seeded Test Account

After running `php artisan db:seed`, a test user is available:

| Field | Value |
|---|---|
| Email | `test@example.com` |
| Password | `password` |
