<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table("users")->insert([
            'name' => 'Prasun Neupane',
            'username'=>'prasun',
            'email' => 'prasunneupane14@gmail.com',
            'phone' => '9860625433',
            //'birth_date' => '1990-01-01',
            //'is_active' => true,
            'password' => 'prasun123',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
