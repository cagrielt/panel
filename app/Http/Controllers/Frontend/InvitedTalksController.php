<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class InvitedTalksController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function invitedtalks()
    {
        return view('frontend.invited');
    }
}
