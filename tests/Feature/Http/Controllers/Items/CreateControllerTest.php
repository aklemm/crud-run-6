<?php

namespace Tests\Feature\Http\Controllers\Items;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateControllerTest extends TestCase
{
    public function test_does_create_route_exist_and_load(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('items.create'));

        $response->assertStatus(200);
    }
}
