<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }
}
