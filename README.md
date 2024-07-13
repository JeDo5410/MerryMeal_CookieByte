# MerryMeal_CookieByte

## Setup Instructions After Cloning

Follow these steps to set up the MerryMeal_CookieByte application on your local device after cloning the repository:

1. **Install Dependencies**
   Open a terminal in the project directory and run:
   ```
   composer install
   ```
   This will install all PHP dependencies.

2. **Install Node Modules** (if using npm)
   ```
   npm install
   ```

3. **Create Environment File**
   Copy the `.env.example` file to create a new `.env` file:
   ```
   cp .env.example .env
   ```

4. **Generate Application Key**
   ```
   php artisan key:generate
   ```

5. **Configure Database**
   Open the `.env` file and update the database configuration:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

6. **Run Migrations**
   Set up the database schema:
   ```
   php artisan migrate
   ```

7. **Start the Development Server**
   ```
   php artisan serve
   ```
   The application will be available at `http://localhost:8000`.



## Additional Notes
- Make sure you have PHP, Composer, and Node.js installed on your system.
- If you encounter any issues, please check the Laravel documentation or contact the project maintainer.

## Contributing
[Add any specific instructions for contributing to the project here]

## License
[Specify the license under which this project is released]

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
