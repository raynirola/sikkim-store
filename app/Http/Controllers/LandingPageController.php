<?php

namespace App\Http\Controllers;

use App\Preorder;

class LandingPageController extends Controller
{
    public function __invoke()
    {
        return view('landing.index')->with(['users' => Preorder::query()->count()]);
    }

}
