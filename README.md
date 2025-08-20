# Job Board App

A modern job board application built with Laravel 10, featuring job listings, employer management, and job applications with a clean, responsive interface.

## 📋 Features

- **Job Listings**: Browse and search through available job positions
- **Advanced Filtering**: Filter jobs by:
  - Salary range (minimum/maximum)
  - Experience level (entry, intermediate, senior)
  - Category (IT, Marketing, Finance, Healthcare, Education)
  - Company name and job description search
- **User Authentication**: Secure login and registration system
- **Job Applications**: Authenticated users can apply for jobs with CV upload
- **Application Management**: Users can view and manage their job applications
- **Employer Profiles**: Company information and job posting capabilities
- **Responsive Design**: Built with Tailwind CSS and Alpine.js

## 🛠 Tech Stack

- **Backend**: Laravel 10 (PHP 8.1+)
- **Frontend**: Blade templates with Tailwind CSS and Alpine.js
- **Database**: SQLite (configurable)
- **Build Tools**: Vite for asset compilation
- **Development Tools**: Laravel Debugbar, Laravel Pint (code styling)

## � Quick Start

Want to run this locally? Here's how:

### What you need first
- PHP 8.1+ (download from php.net)
- Composer (for PHP packages)
- Node.js (for frontend stuff)

### Get it running
```bash
# 1. Get the code
git clone <your-repo-url>
cd job-board

# 2. Install everything
composer install
npm install

# 3. Set up environment and fill DB_DATABASE in .env file
cp .env.example .env
php artisan key:generate

# 4. Set up database
php artisan migrate
php artisan migrate:refresh --seed # Optional: adds some sample data
# Note: for any sample users the password is exactly 'password'

# 5. Build the frontend
npm run dev

# 6. Start the server
php artisan serve
```

That's it! Open http://localhost:8000 and you're good to go! 🎉

## 🎮 How to use

1. **Browse Jobs**: Just visit the homepage to see all available jobs
2. **Filter Jobs**: Use the search box and filters to find what you want
3. **Sign Up**: Create an account to apply for jobs
4. **Apply**: Click "Apply" on any job and upload your CV
5. **Post Jobs**: If you're a company, you can post new job listings

## 🛠 For Developers

### Useful commands
```bash
# Development server with hot reload
npm run dev

# Build for production
npm run build

# Run tests
php artisan test

## 📝 What's inside

The app has these main parts:
- **Users** - People looking for jobs
- **Employers** - Companies posting jobs  
- **Jobs** - The actual job listings
- **Applications** - When users apply for jobs

