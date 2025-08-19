# Laravel Job Board

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

## 📦 Installation

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & npm
- SQLite (or your preferred database)

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd laravel-job-board
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   # Run migrations
   php artisan migrate
   
   # Seed the database (optional)
   php artisan db:seed
   ```

6. **Build frontend assets**
   ```bash
   # For development
   npm run dev
   
   # For production
   npm run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

The application will be available at `http://localhost:8000`

## 🗄 Database Schema

The application uses the following main entities:

- **Users**: Authentication and user management
- **Employers**: Company profiles linked to users
- **Jobs**: Job listings with filtering capabilities
- **Job Applications**: Applications submitted by users for specific jobs

### Key Relationships

- Users can have an Employer profile
- Employers can post multiple Jobs
- Users can submit multiple Job Applications
- Each Job Application belongs to one User and one Job

## 🎨 Frontend Development

### CSS Compilation
```bash
# Watch for changes during development
npm run tailwind-dev

# Build for production
npm run tailwind-build
```

### Available Scripts
- `npm run dev` - Start Vite development server
- `npm run build` - Build assets for production
- `npm run tailwind-dev` - Watch Tailwind CSS changes
- `npm run tailwind-build` - Build Tailwind CSS for production

## 🧪 Testing

Run the test suite using PHPUnit:

```bash
# Run all tests
php artisan test

# Run with coverage
vendor/bin/phpunit --coverage-html coverage
```

## 📁 Project Structure

```
app/
├── Http/Controllers/     # Application controllers
├── Models/              # Eloquent models
├── Policies/            # Authorization policies
└── Providers/           # Service providers

database/
├── factories/           # Model factories for testing
├── migrations/          # Database migrations
└── seeders/            # Database seeders

resources/
├── css/                # Stylesheet sources
├── js/                 # JavaScript sources
└── views/              # Blade templates

routes/
└── web.php             # Web routes definition
```

## 🔧 Configuration

### Database

The application is configured to use SQLite by default. To use a different database:

1. Update your `.env` file with the appropriate database credentials
2. Run `php artisan migrate` to set up the database schema

### File Storage

Job applications support CV uploads. Ensure the `storage/app/public` directory is properly linked:

```bash
php artisan storage:link
```

## 🚀 Deployment

### Production Checklist

1. Set `APP_ENV=production` in your `.env` file
2. Set `APP_DEBUG=false` in your `.env` file
3. Run `composer install --optimize-autoloader --no-dev`
4. Run `npm run build` to compile production assets
5. Run `php artisan config:cache`
6. Run `php artisan route:cache`
7. Run `php artisan view:cache`
8. Ensure proper file permissions on storage directories

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Code Style

This project uses Laravel Pint for code formatting:

```bash
./vendor/bin/pint
```

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🆘 Support

If you encounter any issues or have questions, please feel free to open an issue on the GitHub repository.
