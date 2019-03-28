<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settingArr = [
            [
                "key" => "logo",
                "value" => null
            ],[
                "key" => "title",
                "value" => "Sepetteyim Grup Bilişim"
            ],[
                "key" => "description",
                "value" => null
            ],[
                "key" => "keywords",
                "value" => null
            ],[
                "key" => "author",
                "value" => null
            ],[
                "key" => "phone",
                "value" => null
            ],[
                "key" => "phone2",
                "value" => null
            ],[
                "key" => "mobile_phone",
                "value" => null
            ],[
                "key" => "address",
                "value" => null
            ],[
                "key" => "district",
                "value" => null
            ],[
                "key" => "whatsapp",
                "value" => null
            ],[
                "key" => "facebook",
                "value" => null
            ],[
                "key" => "instagram",
                "value" => null
            ],[
                "key" => "twitter",
                "value" => null
            ],[
                "key" => "youtube",
                "value" => null
            ],
            
        ];
        DB::table("settings")->insert($settingArr);
    }
}
