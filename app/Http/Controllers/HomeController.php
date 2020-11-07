<?php

namespace App\Http\Controllers;

use App\Preorder;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    public function index(): Renderable
    {
        return view('home.index', [
            'users' => Preorder::query()->count()
        ]);
    }
}
