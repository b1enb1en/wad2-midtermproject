# 🚀 Portfolio Web Application

This project demonstrates core Laravel fundamentals, including **installation**, **routing**, **controllers**, and **Blade templating**, applied to a multi-page portfolio application.

---

## 📸 Project Previews

<div align="center">
  <img src="https://github.com/user-attachments/assets/70ac1368-b293-4929-8a03-efa523879de1" width="30%" alt="Home Page" />
  <img src="https://github.com/user-attachments/assets/37502131-368e-4e09-95b6-6389904c4416" width="30%" alt="About Page" />
  <img src="https://github.com/user-attachments/assets/09eca3ca-53a0-4a0f-8f9f-c46335fd6cc8" width="30%" alt="Goals Page" />
</div>

---

## 🚀 Getting Started

Follow these steps to get your local development environment up and running.

### 1. Clone the repository

```bash
git clone https:https://github.com/b1enb1en/laravel-porfolio-lab3.git
cd laravel-portfolio-lab3.git

```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Frontend dependencies
npm install

```

### 3. Environment Setup

```bash
# Create your .env file
cp .env.example .env

# Generate application key
php artisan key:generate

```

### 4. Database Configuration

1. Create a new database on your local machine (MySQL/PostgreSQL).
2. Open the `.env` file and update the `DB_` credentials:
```env
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

```

3. Run migrations and seeders:
```bash
php artisan migrate --seed

```

### 5. Launch the Application

You will need two terminal tabs running:

**Tab 1: Backend Server**

```bash
php artisan serve

```

**Tab 2: Frontend Assets (Vite)**

```bash
npm run dev

```

### Your application will be available at: **[http://127.0.0.1:8000](http://127.0.0.1:8000)**
**Or copy-paste the links below into your browser:
```bash
    📂 Navigation LinksPageURL Path
    - 🏠 Home  http://127.0.0.1:8000/home
    - 👤 About  http://127.0.0.1:8000/about
    - 🎯 Goals  http://127.0.0.1:8000/goals
---
