<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Setting;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=Setting::first();
        $contacts=Contact::first();
        $sliders=Slider::all();
        return view('layouts.frontend.home.index', compact('settings','contacts','sliders'));
    }
}
