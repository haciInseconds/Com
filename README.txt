# Simple Shop (PHP + MySQL)

## Prerequisites
- XAMPP/WAMP/MAMP (PHP 8+, MySQL)
- Enable PDO MySQL extension (default in XAMPP)

## Setup
1) Create database:
   - In phpMyAdmin, run:
     CREATE DATABASE simple_shop CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

2) Import tables & sample data:
   - Select the `simple_shop` DB and import `sql/schema.sql`

3) Place the project:
   - Copy the `public`, `lib`, `sql`, `config.php`, `db.php`, `init.php` to your web root, e.g.
     C:\xampp\htdocs\simple_shop\
   - Access in browser: http://localhost/simple_shop/public/

4) Update config if needed:
   - `config.php` has DB credentials. XAMPP default user is `root` with empty password.

## Features
- Register / Login / Logout (secure password hashing, sessions)
- Product listing (seed data in schema.sql)
- Add/Remove cart items (stored in MySQL per user)
- Checkout creates order + order items
- Orders dashboard

## Notes
- This is a minimal starter to learn. Add validations, pagination, admin panel, etc., as you grow.
- For payments, integrate an API (e.g., JazzCash, Stripe). Store only necessary metadata (never raw card numbers).

