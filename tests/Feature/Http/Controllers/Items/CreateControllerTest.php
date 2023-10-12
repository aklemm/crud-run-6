<?php

namespace Tests\Feature\Http\Controllers\Items;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateControllerTest extends TestCase
{
    public function test_does_create_route_exist_and_load(): void
    {
        $response = $this->get('/items/create');

        $response->assertStatus(200);
    }
}
