# 🌐 Web Development Projects

This repository contains various **web development projects** created using a mix of front-end and back-end technologies including **HTML5**, **CSS3/CSS5**, **JavaScript**, **Bootstrap**, and **PHP**. It also integrates with **MySQL databases** via **phpMyAdmin** and runs on local environments like **XAMPP** and **WAMP Server**.

---

## 📁 Technologies Used

| Category         | Stack/Tool                      |
|------------------|----------------------------------|
| Front-End        | HTML5, CSS3/CSS5, JavaScript     |
| Styling & Layout | Bootstrap 4/5                    |
| Back-End         | PHP 7.x / 8.x                    |
| Database         | MySQL via phpMyAdmin             |
| Local Servers    | XAMPP / WAMP Server              |

---

## 📂 Project Structure

## ⚙️ Requirements

- A modern browser (Chrome, Firefox, Edge)
- [XAMPP](https://www.apachefriends.org/index.html) or [WAMP Server](https://www.wampserver.com/en/)
- phpMyAdmin (comes with XAMPP/WAMP)
- PHP 7.4+ or 8.0+
- MySQL Server

---

## 🚀 How to Run Locally

### 🛠 Option 1: Using XAMPP

1. Install and open XAMPP.
2. Start **Apache** and **MySQL** modules.
3. Place your project folder inside:  
   `C:\xampp\htdocs\your-project-folder`
4. Open your browser and go to:  
   `http://localhost/your-project-folder`

### 🛠 Option 2: Using WAMP

1. Install and launch WAMP.
2. Ensure the server icon is **green** (running).
3. Place your project in:  
   `C:\wamp64\www\your-project-folder`
4. Navigate to:  
   `http://localhost/your-project-folder`

---

## 📊 Database Setup (phpMyAdmin)

1. Open phpMyAdmin:  
   `http://localhost/phpmyadmin`
2. Create a new database (e.g., `project_db`)
3. Import your `.sql` file if provided (found under `/db/`)
4. Update your `config.php` or connection file with:

```php
$host = "localhost";
$user = "root";
$password = "";
$db = "project_db";

$conn = mysqli_connect($host, $user, $password, $db);
