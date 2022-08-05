<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class BioController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function biography()
    {
        return view('frontend.biography');
    }
}
