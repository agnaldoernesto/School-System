# 🏫 School-System

A lightweight, web-based School Management System designed to streamline academic administration. This project provides a foundational interface for managing students, courses, and institutional information using a classic web stack.

## 🌟 Overview

**School-System** is a functional prototype built to demonstrate how a school's internal portal operates. It focuses on core CRUD (Create, Read, Update, Delete) operations for student registration and course management, prioritizing a clean user interface and straightforward logic.

## ✨ Key Features

* **Student Registration:** Dedicated module (`cadastro.php`) for enrolling new students.
* **Course Management:** A centralized view (`cursos.php`) to list and manage academic programs.
* **Interactive Interface:** A custom UI built with modern CSS and JavaScript.
* **Backend Integration:** Powered by PHP to handle server-side logic and data processing.
* **Modular Structure:** Organized directory system separating logic, styling, and assets.

## 🛠️ Technical Stack

* **PHP:** Core server-side scripting.
* **Hack:** Used for type-safe server-side logic.
* **MySQLI:** Database management system.
* **phpMyAdmin:** Web interface for database administration.
* **CSS3 & JavaScript:** Frontend styling and interactivity.

## 🗄️ Database Configuration (phpMyAdmin)

To get this system running, you **must** configure the database using phpMyAdmin:



1.  **Open phpMyAdmin:** Access it via `http://localhost/phpmyadmin`.
2.  **Create Database:** Create a new database named `school_system` (or the name specified in your `backend/` connection files).
3.  **Import Schema:** * Look for a `.sql` file in the project folder (usually in `backend/` or a `db/` folder).
    * In phpMyAdmin, select your new database, click the **Import** tab, choose the file, and click **Go**.
4.  **Verify Connection:** Ensure the credentials in your PHP connection script (e.g., `db_connect.php`) match your local environment:
    * **Host:** `localhost`
    * **User:** `root`
    * **Password:** ` ` (empty by default on XAMPP).

## 🚀 Installation & Usage

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/agnaldoernesto/School-System.git
    ```
2.  **Local Server:** Move the folder to your `htdocs` (XAMPP) or `www` (WAMP) directory.
3.  **Start Services:** Open your Control Panel (XAMPP/WAMP) and start **Apache** and **MySQL**.
4.  **Launch:** Navigate to `http://localhost/School-System/index.php`.
