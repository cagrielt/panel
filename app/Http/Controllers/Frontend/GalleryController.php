<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class GalleryController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function gallery()
    {
        return view('frontend.gallery');
    }
}
