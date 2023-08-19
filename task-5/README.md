Here are the steps to clone a Laravel project from GitHub:

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

## Serve the Application

You can now run the app locally:

```
php artisan serve
```

The app will be accessible in the browser at `http://localhost:8000`.

And that's it! The GitHub repo is now cloned and set up locally./
<br/>
<br/>
<br/>

#   Test Driven Development
This laravel To-do project are following TDD. Test Driven Development (TDD) is a programming style that can help you write well-designed and error-free code.

# TodoController Test Cases

This file contains test cases for the `TodoController` using PHPUnit in Laravel.

## Test Cases

- `it_shows_list_of_todo` - Tests getting all todos
- `it_shows_a_single_data_of_todo` - Tests getting a single todo by ID
- `it_shows_exception_if_wrong_individual_id_passed_of_todo` - Tests exception handling for invalid ID
- `it_creates_a_new_data` - Tests creating a new todo
- `it_update_a_specific_data` - Tests updating an existing todo 
- `it_deletes_a_specific_data` - Tests deleting a todo

## Setup 

- Uses Laravel's `RefreshDatabase` trait to reset database before each test
- Creates todo factory for generating test data
- Disables CSRF middleware as needed to allow POST/PUT/DELETE requests

## Assertions

Uses Laravel assertion methods:

- `assertDatabaseCount` to check expected rows in table
- `assertDatabaseHas` to verify database contains expected data
- `assertEquals` to compare expected vs actual values
- `expectException` to expect exception thrown

## Running Tests

From project root:

```
./vendor/bin/phpunit
```

Or 

```
php artisan test
```

Or specific test case:

```
./vendor/bin/phpunit --filter it_shows_list_of_todo
```

Let me know if you need any clarification or have additional questions!