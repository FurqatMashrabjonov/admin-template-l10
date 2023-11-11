
# Laravel Template with Metronic Admin

## Overview

This repository provides a Laravel template that seamlessly integrates with the Metronic Admin template. Metronic Admin is a powerful and feature-rich admin template, and this Laravel template makes it easy for developers to set up a sophisticated admin panel for their Laravel applications.

## Features

- **Metronic Integration:** This template comes pre-configured with Metronic Admin, offering a sleek and responsive user interface for your Laravel application.

- **Laravel Best Practices:** The template follows Laravel best practices, utilizing features such as Eloquent ORM, Blade templating engine, and Laravel Mix for asset compilation.

- **Authentication and Authorization:** The template includes a fully functional authentication system, with user registration, login, and password reset functionalities. Role-based authorization controls access to different sections of the admin panel.

- **CRUD Operations:** Perform CRUD (Create, Read, Update, Delete) operations easily with included templates and boilerplate code.

- **API Integration:** The template seamlessly works with Laravel's built-in API features, enabling the creation and consumption of APIs within your application.

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js and NPM (for asset compilation)

## Installation

1. **Clone the repository:**
    ```bash
    git clone https://github.com/your-username/your-laravel-metronic-template.git
    ```

2. **Navigate to the project directory:**
    ```bash
    cd your-laravel-metronic-template
    ```

3. **Install PHP dependencies:**
    ```bash
    composer install
    ```

4. **Install NPM dependencies:**
    ```bash
    npm install
    ```

5. **Copy the `.env.example` file to `.env` and configure your database settings.**

6. **Generate the application key:**
    ```bash
    php artisan key:generate
    ```

7. **Run migrations and seed the database:**
    ```bash
    php artisan migrate --seed
    ```

8. **Compile assets:**
    ```bash
    npm run dev
    ```

9. **Serve the application:**
    ```bash
    php artisan serve
    ```

Visit `http://localhost:8000` in your browser to access the application.

## Customization

The template is highly customizable. You can modify the views, controllers, and stylesheets to meet the specific requirements of your project. Refer to the [Metronic documentation](https://keenthemes.com/metronic/) for details on customizing the Metronic Admin template.

## Contribution

If you encounter any issues or have suggestions for improvements, feel free to open an issue or submit a pull request. Your contributions are highly welcome!

## License

This Laravel template with Metronic Admin is open-source software licensed under the [MIT license](LICENSE.md).
```
