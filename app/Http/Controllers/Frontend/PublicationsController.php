<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class PublicationsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function publications()
    {
        return view('frontend.publications');
    }
}
