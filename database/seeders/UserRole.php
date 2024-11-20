<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tbl_userrole")->insert([
            [
                'user_role' => 'Super Admin',
                'description' => 'Has All Permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_role' => 'Admin',
                'description' => 'Has Admin Permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_role' => 'User',
                'description' => 'Has Limited Permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_role' => 'Office Admin',
                'description' => 'Has Office Admin Permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_role' => 'HR',
                'description' => 'Has HR Permission',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
