<?php

namespace App\Http\Controllers\Backend\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function show()
    {
        return view("backend.home.index", compact("home"));

    }
}
