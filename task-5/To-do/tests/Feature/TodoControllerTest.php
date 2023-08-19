<?php

namespace Tests\Feature;

use App\Models\Todo;
use App\Http\Controllers\TodoController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Tests\TestCase;


class TodoControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test   */
    public function it_shows_list_of_todo(): void
    {
        // Arrange
        Todo::factory()->count(2)->create();

        // Act
        $data = $this->get(route('todo.index'));
        $count = 0;
        foreach ($data as $key => $value) {
            $count++;
        }

        // Assert
        $this->assertEquals(2, $count);
    }


    /** @test */
    public function it_shows_a_single_data_of_todo()
    {
        // Arrange
        $todo = Todo::factory()->create([
            'title' => 'Its title',
            'description' => 'Its description',
            'is_completed' => 'Its is_completed',

        ]);

        // Act
        $getValue = (new TodoController)->show($todo);

        // Assert
        $this->assertEquals($todo->id, $getValue->id);
        $this->assertEquals('Its title', $getValue->title);
    }

    /** @test */
    public function it_shows_exception_if_wrong_individual_id_passed_of_todo()
    {
        // Arrange
        $id = 99;

        // Act
        $this->expectException(ModelNotFoundException::class);

        // Assert
        $todo = Todo::findOrFail($id);
    }

    /** @test */
    public function it_creates_a_new_data()
    {
        // Temporarily disable CSRF middleware for this test
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        // Arrange

        $this->assertDatabaseCount('todos', 0);

        $todo = [
            'title' => 'Its title',
            'description' => 'Its description',
            'is_completed' => 'ok',
        ];

        // Act

        $this->post(route('todo.store'), $todo);


        // Assert
        $this->assertDatabaseCount('todos', 1);
    }


    /** @test */
    public function it_update_a_specific_data()
    {
        // Temporarily disable CSRF middleware for this test
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        // Arrange
        $todo = Todo::create([
            'title' => 'Its title',
            'description' => 'Its description',
            'is_completed' => 'ok',
        ]);

        // New data for updating the post
        $updateData = [
            'title' => 'Its title updated',
            'description' => 'Its description updated',
            'is_completed' => 'No',
        ];

        // Act

        $this->put(route('todo.update', ['todo' => $todo->id]), $updateData);

        // Assert

        $this->assertDatabaseHas('todos', $updateData);
    }

    /** @test */
    public function it_deletes_a_specific_data()
    {
        // Arrange

        Todo::factory()->create();
        $deleteablePost = Todo::factory()->create();
        $this->assertDatabaseCount('todos', 2);

        // Act

        $data = (new TodoController)->destroy($deleteablePost);

        // Assert
        $this->assertDatabaseCount('todos', 1);
    }
}
