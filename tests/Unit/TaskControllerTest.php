<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
class TaskControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     */


public function test_example()
{
    $user = User::factory()->create();
    $this->actingAs($user);

$response = $this->postJson('/api/v2/tasks', [
    'name' => 'Task title',
    'is_completed' => false,

]);

    $response->assertStatus(Response::HTTP_CREATED);
    $this->assertDatabaseHas('tasks', [
        'name' => 'Task title',
        'is_completed' => false,
    ]);
}

public function test_exampleUpdate()
{
    $user = User::factory()->create();
    $task = Task::factory()->create(['user_id' => $user->id]);
    $this->actingAs($user);

$response = $this->putJson("/api/v2/tasks/{$task->id}", [
    'name' => 'update Task title',

]);

    $response->assertStatus(Response::HTTP_OK);
    $this->assertDatabaseHas('tasks', [
        'id' => $task->id,
        'name' => 'update Task title',

    ]);
}
}
