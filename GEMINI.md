# Gemini Context: mistertech

This file provides the necessary context and instructions for AI agents working on the **mistertech** project, a Laravel 13 web application.

## 🚀 Project Overview
**mistertech** is a modern web application built with the Laravel framework. It follows standard Laravel conventions and focuses on a high-quality, senior-level architecture.

### Core Technologies
- **Framework:** Laravel 13.x (PHP 8.3+)
- **Frontend:** Vite, Tailwind CSS 4.x
- **Database:** SQLite (Default)
- **Testing:** PHPUnit
- **Agent Tools:** Laravel Pao (Predictive Artisan Output), Laravel Pail (Advanced Logging)

---

## 🛠 Setup & Development

### Initial Setup
To get the project up and running for the first time:
```bash
composer setup
```
This command handles dependency installation (Composer & NPM), environment configuration, key generation, and migrations.

### Running the Development Environment
Start all necessary services (Server, Queue, Logs, Vite) concurrently:
```bash
composer dev
```

### Running Tests
Execute the test suite using PHPUnit via Artisan:
```bash
composer test
```

---

## 🏗 Architecture & Conventions

### Senior-Level Standards
As per project-specific rules (`.agents/rules/code-style-guide.md`):
- Implement code with the perspective of a **Senior Engineer (12+ years experience)**.
- Prioritize readability, maintainability, and clean abstractions.
- **Component-Based UI:** Structure frontend pages into reusable and logical components.

### Laravel Best Practices
- **PSR-12:** Follow PHP standards for naming and formatting.
- **Fat Models, Skinny Controllers:** Keep business logic in Models or dedicated Service classes.
- **Type Safety:** Use strict typing for function arguments and return types.
- **Migrations:** All database changes must be handled via Laravel migrations.

---

## 📁 Directory Structure
- `app/Models`: Eloquent models (e.g., `User.php`).
- `app/Http/Controllers`: Application controllers.
- `database/migrations`: Database schema definitions.
- `resources/views`: Blade templates and frontend assets.
- `routes/`: Route definitions (`web.php`, `console.php`).
- `tests/`: Feature and Unit tests.

---

## 🤖 Agent Integration
This project is optimized for agentic development. 
- Use `php artisan pail` (or `composer dev`) to monitor logs in real-time.
- `laravel/pao` is installed to enhance Artisan output for better agent parsing.
- Always refer to `.agents/rules/code-style-guide.md` for specific stylistic requirements.
