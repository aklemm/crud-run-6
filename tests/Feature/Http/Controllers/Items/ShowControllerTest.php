<?php

namespace Tests\Feature\Http\Controllers\Items;

use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowControllerTest extends TestCase
{
    public function test_example(): void
    {
        $item_id = Item::create([
            'created_by' => '1',
            'name'  => 'booyahh',
            'description' => 'stinking stinkface',
            ])->id;

        $response = $this->get('/items/' . $item_id);

        $response->assertStatus(200);

        $response->assertSeeText('1');
    }
}
