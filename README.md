# 🚚 Shipex – Shipping & Logistics Management System

**Shipex** is a lightweight, feature-rich shipping and logistics management system built for speed, reliability, and ease of use. With real-time shipment tracking, powerful admin tools, and automated notifications, managing logistics has never been simpler.

---

## ✨ Features

### 📦 Shipment Management
- ✅ Create, edit, and track shipments
- 📡 Real-time status updates
- 🔁 Multi-carrier integration

### 📊 Admin Dashboard
- 📈 Detailed analytics & reporting
- 👥 User and shipment management
- ⚙️ System-wide configuration controls

### 🔔 Notifications & Tracking
- 📩 Automated email notifications
- 🌍 Public tracking interface for customers
- 📱 Responsive design for all devices

---

## 🛠️ Tech Stack

| Category   | Technologies                        |
|------------|-------------------------------------|
| Backend    | Laravel 12.x, PHP 8.2+               |
| Frontend   | Bootstrap 5, jQuery                 |
| Database   | SQLite (default), MySQL supported   |
| Cache      | Redis                               |
| Email      | PHPMailer + SMTP                    |

---

## 🚀 Local Installation

### ✅ Prerequisites
- PHP 8.2+
- Composer 2.0+
- Node.js 16+
- SQLite or MySQL

### 🧪 Setup Steps

```bash
# 1. Clone the repository
git clone https://github.com/<your-username>/flypathexpress.git
cd flypathexpress

# 2. Install backend and frontend dependencies
composer install
npm install
npm run build

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Set up the database
touch database/database.sqlite     # Or configure MySQL in .env
php artisan migrate --seed

# 5. Start the development server
php artisan serve
Visit the app at: http://localhost:8000
```

### 📁 Project Structure Highlights

/resources/views – Blade templates for frontend and admin dashboard

/app/Models – Eloquent models for Shipments, Users, etc.

/routes/web.php – Web routes and controller bindings

/public – Entry point and static assets


### ⚙️ Configuration Notes

Configure Redis and SMTP credentials in .env

Email notifications use PHPMailer via SMTP

Set up your preferred mail driver and host settings


### 🤝 Contributing
We welcome all contributions! 🚀

```bash
# Fork the repository
# Create your feature branch
git checkout -b feature/your-feature

# Commit your changes
git commit -m "Add your feature"

# Push to GitHub
git push origin feature/your-feature

# Open a pull request
```

### 📜 License
This project is licensed under the MIT License.
See the LICENSE file for full details.

### 📬 Contact
Have questions, feedback, or need support?

Open an issue

[Contact the me via whatsapp](https://wa.me/2348146290707)

### 🚚 Happy Shipping with Shipex!
Built for speed. Designed for simplicity. Delivered with precision.

