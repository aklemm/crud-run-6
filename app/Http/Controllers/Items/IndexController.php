<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class IndexController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('items.index', [
            'items' => Item::get(),
        ]);
    }
}
