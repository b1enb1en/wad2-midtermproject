# 🎵 MelodyTrack: Song Management System

This project is a comprehensive Laravel-based CRUD application designed to manage a music library. It demonstrates fundamental web development concepts including **database migrations**, **Eloquent ORM**, **resourceful routing**, and **form validation**.

---

## 📊 Database Schema

The application manages a `songs` table with the following fields:

| Field | Type | Description |
| :--- | :--- | :--- |
| **Track Title** | String | The official title of the music track. |
| **Artist Name** | String | The name of the performing artist or band. |
| **Genre** | String | The category or style of music (e.g., Jazz, Pop, R&B). |
| **Duration** | String | The length of the track formatted as `mm:ss`. |
| **Release Date** | Date | The official date the track was published. |

---

## 📸 CRUD Operations Preview

The following sections demonstrate the functional Create, Read, Update, and Delete operations within the system.

### 1. Read (Displaying All Songs)
The main dashboard features a paginated list of all entries in the database, complete with action buttons for each record.

### 2. Create (Add New Song)
A dedicated form allows users to input new track details with specific formatting for duration and date.

### 3. Update (Edit Song)
Users can modify existing records through a pre-filled form that maintains data integrity.

### 4. Delete (Remove Song)
The system includes a deletion workflow with success notifications to confirm the record has been removed.

---

## 🚀 Getting Started

Follow these steps to get your local development environment up and running.

### 1. Clone the repository
```bash
git clone <your-repository-link>
cd song-management-system
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
1. Update your `.env` file with your local database credentials.
2. Run migrations and seeders:
```bash
php artisan migrate --seed
```

### 5. Launch the Application
You will need two terminal tabs running:

**Tab 1: Backend Server**
```bash
php artisan serve
```

**Tab 2: Frontend Assets**
```bash
npm run dev
```

### Your application will be available at: **[http://127.0.0.1:8000/songs](http://127.0.0.1:8000/songs)**
