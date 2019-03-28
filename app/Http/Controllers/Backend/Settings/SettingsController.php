<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function show(){
        $settings = Setting::all();
        return view("backend.home.settings",compact("settings"));
    }
}
