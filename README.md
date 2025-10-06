# ⚔️ ZENTRA - Task Management Application

A modern, retro-styled task management application built with Laravel, featuring a pixel-art inspired design with a neon green theme.

## 🚀 Features

- **Task Management**
  - Create new tasks with titles and optional descriptions
  - Mark tasks as completed/pending
  - Edit existing tasks
  - Delete tasks
  - Filter tasks by status (All/Pending/Completed)

- **Visual Statistics**
  - Real-time counter for pending tasks
  - Real-time counter for completed tasks
  - Total tasks counter

- **User Interface**
  - Retro-inspired design with "Press Start 2P" font
  - Responsive layout that works on both desktop and mobile
  - Smooth animations and hover effects
  - Modal-based task editing
  - Neon green accents with cyberpunk aesthetic

## 🛠️ Technologies Used

- **Backend**
  - Laravel (PHP Framework)
  - MySQL Database
  - Blade Template Engine

- **Frontend**
  - HTML5
  - CSS3
  - JavaScript (Vanilla)
  - Tailwind CSS
  - Google Fonts (Press Start 2P)

## 📦 Prerequisites

- PHP >= 8.1
- Composer
- MySQL
- Node.js & NPM

## 🔧 Installation

1. Clone the repository:
```bash
git clone https://github.com/carlreyyy/Zentra2.0.git
cd Zentra2.0
```

2. Install PHP dependencies:
```bash
composer install
```

3. Copy the example env file and make the required configuration changes in the .env file:
```bash
cp .env.example .env
```

4. Generate a new application key:
```bash
php artisan key:generate
```

5. Run the database migrations:
```bash
php artisan migrate
```

6. Start the local development server:
```bash
php artisan serve
```

You can now access the server at http://localhost:8000

## 💻 Usage

1. Add a new task by entering a title (and optional description) in the input form
2. Mark tasks as completed by clicking the status button
3. Edit tasks using the edit (✏️) button
4. Delete tasks using the delete (✕) button
5. Filter tasks using the ALL/PENDING/COMPLETED buttons
6. View your task statistics in the top boxes

## 🎨 Design Features

- Retro-futuristic user interface
- Neon green color scheme
- Pixel-perfect typography
- Smooth hover animations
- Responsive design for all screen sizes
- Interactive modal for task editing
- Status-based task styling

## 👤 Author

- Carl Rey
- GitHub: [@carlreyyy](https://github.com/carlreyyy)

## 📄 License

This project is open-sourced software licensed under the [MIT license](LICENSE).
