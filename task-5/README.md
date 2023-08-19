
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
./vendor/bin/phpunit --filter TodoControllerTest
```

Or specific test case:

```
./vendor/bin/phpunit --filter it_shows_list_of_todo
```

Let me know if you need any clarification or have additional questions!