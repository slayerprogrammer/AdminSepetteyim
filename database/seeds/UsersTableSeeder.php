<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Sepetteyim Admin',
            'username' => 'sepetteyim',
            'email' => 'info@sepetteyim.com',
            'password' => bcrypt('12345')
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Sepetteyim Destek',
            'username' => 'sepet',
            'email' => 'destek@sepetteyim.com',
            'password' => bcrypt('12345')
        ]);
    }
}
