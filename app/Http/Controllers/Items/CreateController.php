<?php

namespace App\Http\Controllers\Items;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('items.create');
    }
}
