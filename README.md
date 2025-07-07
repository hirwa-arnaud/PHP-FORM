# PHP Contact Form

![PHP Logo](https://www.php.net/images/logos/php-logo.svg "PHP")

This project is a simple **Contact Form** built with PHP that collects user inputs — name, email, and message — and saves them into a MySQL database.

---

## Features

- Collects user name, email address, and message
- Validates inputs (basic server-side validation)
- Saves form submissions securely into a MySQL database
- Easy to customize and extend

---

## Requirements

- PHP 7.x or higher
- MySQL or MariaDB database
- Web server like Apache or Nginx with PHP support

---

## Installation and Setup

1. **Clone or download** this repository to your web server directory (e.g., `htdocs` for XAMPP).

2. **Create a MySQL database** and table to store contact messages. Use the following SQL schema as an example:

```sql
CREATE DATABASE contact_form_db;

USE contact_form_db;

CREATE TABLE messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
