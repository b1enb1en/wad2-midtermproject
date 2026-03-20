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
<img width="1658" height="1032" alt="Image" src="https://github.com/user-attachments/assets/0eb1591e-f565-4ded-b84c-8138d516a1e9" />

### 2. Create (Add New Song)
A dedicated form allows users to input new track details with specific formatting for duration and date.
<img width="1658" height="1032" alt="Image" src="https://github.com/user-attachments/assets/b37baff9-2043-4c81-8a98-6f199f8cd4f6" />

### 3. Update (Edit Song)
Users can modify existing records through a pre-filled form that maintains data integrity.
<img width="1658" height="1032" alt="Image" src="https://github.com/user-attachments/assets/cea657f5-8682-4bf6-93d9-f6a56111f27b" />

### 4. Delete (Remove Song)
The system includes a deletion workflow with success notifications to confirm the record has been removed.
<img width="1658" height="1032" alt="Image" src="https://github.com/user-attachments/assets/459a715d-3bf4-4fe7-97d4-7306545528ba" />
---
