<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class NewsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function news()
    {
        return view('frontend.news');
    }
}
