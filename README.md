# 🍔 BiteSize – Personalized Food Delivery Platform

BiteSize is an innovative food delivery platform offering dine-in, takeout, and home delivery services with **personalized AI-driven recommendations**. It enhances user experience with dietary filters, FlavorBot suggestions, and a focus on local cuisines.

---

## ✨ Features

- 🍽 **Centralized Access**  
  Unified platform for dine-in, takeout, and delivery with dietary and allergen filters.  

- 🤖 **AI-Powered FlavorBot**  
  Personalized food recommendations and pairing suggestions based on preferences and history.  

- 🌮 **Local Flavors**  
  Dedicated sections for street food and regional delicacies to promote local vendors.  

- 🎨 **Engaging UI**  
  Intuitive design with animations and clean layouts for a delightful user journey.  

- 📅 **Pre-Ordering**  
  Schedule your meals in advance for planned events.  

---

## 🛠 Tech Stack

| Frontend          | Backend      | Database  |
|-------------------|--------------|-----------|
| HTML, CSS, JS     | PHP          | MySQL     |

---

## 🚀 Getting Started

Follow these steps to set up BiteSize on your local machine:

---

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/vrushalid0709/Bitesize.git
cd Bitesize
```
### 2️⃣ Set Up the Database

Import the SQL file into your MySQL server:

- Locate `database/bitesize.sql` in the project folder.
- Use a tool like phpMyAdmin or run:

```bash
mysql -u root -p your_database_name < database/bitesize.sql
``` 
Update your database credentials in:

```php
backend/config.php
```
### 3️⃣ Start the Server

- Place the project folder in your web server’s root directory (e.g., `htdocs` for XAMPP or `www` for WAMP).
- Start Apache and MySQL services from your control panel.
- Open your browser and visit:

```text
http://localhost/bitesize
``` 
