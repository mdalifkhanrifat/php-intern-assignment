

## Prerequisites

- Git installed
- Composer installed
- Access to the GitHub repository

## Clone the Repository

Use `git clone` to clone the repo to your local machine:

```bash
git clone https://github.com/mdalifkhanrifat/php-intern-assignment.git
```

This will copy the entire repository contents to a new `php-intern-assignment` directory.

## Install Dependencies

Go into the project directory and install Composer dependencies:

```bash
cd php-intern-assignment/task-5/To-do
composer install
```

This will install all PHP packages defined in `composer.json`.

## Configure Environment

1. Copy `.env.example` to `.env`

2. Generate app key:

```
php artisan key:generate
``` 

3. Update `.env` with database and other credentials

4. Set `APP_ENV` and `APP_DEBUG` appropriately

## Migrate Database

Run database migrations to create the schema:

```
php artisan migrate
```

## Install Front-end Dependencies

If using NPM, install dependencies:

```
npm install
```

## Serve the Application

You can now run the app locally:

```
php artisan serve
```

The app will be accessible in the browser at `http://localhost:8000`.

And that's it! The GitHub repo is now cloned and set up locally.