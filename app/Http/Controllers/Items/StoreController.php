<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Http\Requests\Items\StoreRequest;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        Item::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'created_by' => $request->user()->id,
        ]);

        return redirect()->route('items.index');
    }
}
