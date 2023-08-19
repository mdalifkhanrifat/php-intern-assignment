<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Todo;


class TodoControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test   */
    public function it_shows_list_of_todo(): void
    {
        // Arrange
        Todo::factory()->count(2)->create();

        // Act
        $data=$this->get(route('todo.index'));
        $count=0;
        foreach($data as $key => $value){
            $count++;
        }

        // Assert
        $this->assertEquals(2, $count);
    }
}
