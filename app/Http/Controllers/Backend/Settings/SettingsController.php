<?php

namespace App\Http\Controllers\Backend\Settings;


use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function show()
    {
        $settings = Setting::all();
        return view("backend.home.index",compact("settings"));
    }

    public function update(Request $request)
    {
        $setting = Setting::where("key", $request->key)->update(["value"=>$request->value]);

        if ($setting){
            return "başarılı";
        }

        return "hatalı";
    }

    public function create(Request $request)
    {
        $setting = new Setting();

        $setting->key = $request->key;
        $setting->value = $request->value;

        if($setting->save()) {
            return ["status" => "success", "title" => "Başarılı", "message" => "Yeni ayar kaydedildi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yeni ayar kaydedilemedi"];
    }

    public function delete(Request $request)
    {
        $setting = Setting::where("key", $request->key)->delete();

        if ($setting){
            return ["status" => "success", "title" => "Başarılı", "message" => "Ayar silindi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Ayar silinemedi"];
    }
}
