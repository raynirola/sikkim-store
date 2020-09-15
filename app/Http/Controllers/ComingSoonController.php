<?php

namespace App\Http\Controllers;


class ComingSoonController extends Controller
{
    /**
     * Show Coming Soon Page
     */
    public function __invoke()
    {
        return view('front-end.comingsoon.index');
    }

}
