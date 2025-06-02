# Laravel CRUD App

A simple, clean, and efficient Laravel-based CRUD application that supports full **authentication**, **authorization**, **form validation**, and leverages Laravel's powerful **Eloquent ORM**, **Blade components**, and more.

---

## Built With

![Laravel](https://img.shields.io/badge/Laravel-framework-red?logo=laravel&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-template-blueviolet?logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-dbms-orange?logo=mysql&logoColor=white)
![AJAX](https://img.shields.io/badge/AJAX-dynamic-green)

---

## Features

### Backend (Laravel)
- **Authentication** – Login & Registration using Laravel Breeze or Jetstream.
- **Authorization** – Fine-grained access control using Laravel **Gate**.
- **CRUD Functionality** – Full Create, Read, Update, Delete support.
- **Eloquent ORM** – Clean and expressive database interaction.
- **Form Validation** – Request classes with custom error messages.
- **Seeders & Factories** – Easily populate your database for testing/demo.
- **Clean Code Structure** – Follows MVC and PSR standards.

### Frontend (Blade)
- **Blade Components** – Reusable UI components for cleaner templates.
- **Master Layout** – Centralized layout file for consistency.
- **Form Components** – Well-structured and validated form elements.
- **Responsive Design** – Mobile-friendly and usable UI.

---

## How to Use & Start

Follow these steps to get your Laravel CRUD app up and running:

### 1. Clone the Repository

```bash
git clone https://github.com/KianHmz/CRUD-Laravel.git
cd CRUD-Laravel
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Frontend Dependencies

```bash
npm install
npm run dev
```

### 4. Setup Environment

Copy the `.env.example` file and set your environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Setup the Database

Edit `.env` and set your DB credentials, then run migrations and seeders:

```bash
php artisan migrate 
php artisan db:seed
```

### 6. Serve the App

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

### 7. Login or Register

Use the authentication system to create a user. Try:

- Email: `admin@gmail.com`
- Password: `admin`

Or register a new user and test the full authentication + authorization flow.
