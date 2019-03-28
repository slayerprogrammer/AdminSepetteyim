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
        return view("backend.home.settings",compact("settings"));
    }

    public function update(Request $request)
    {
        $setting = Setting::where("key", $request->key)->update(["value"=>$request->value]);
        if ($setting)
        {
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
            return ["status"=> "success", "message"=>"Yeni ayar kaydedildi."];
        }
        return ["status"=> "error", "message"=>"Ayarlar kaydedilemedi."];

    }

    public function delete(Request $request)
    {
        $setting = Setting::where ("key",$request->key)->delete();
        if($setting) {
            return ["status"=> "success", "message"=>"Silme İşlemi Gerçekleşti."];
        }
        return ["status"=> "error", "message"=>"Silme İşleminde Bir Hata Oluştu."];
    }
}
