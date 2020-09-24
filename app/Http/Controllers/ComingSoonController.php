<?php

namespace App\Http\Controllers;


class ComingSoonController extends Controller
{
    /**
     * Show Coming Soon Page
     */
    public function __invoke()
    {
        return redirect()->action([LandingPageController::class]);
    }

}
