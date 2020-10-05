<?php

namespace App\Http\Controllers;

use App\Preorder;
use Illuminate\Contracts\Support\Renderable;

class PreorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('preorders.index', [
            'preorders' => Preorder::query()->latest()->get(),
        ]);
    }
}
