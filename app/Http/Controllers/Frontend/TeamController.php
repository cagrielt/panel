<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class TeamController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function team()
    {
        return view('frontend.team');
    }
}
