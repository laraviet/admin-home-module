<?php

namespace Modules\AdminHome\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\Core\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('adminhome::home');
    }
}
