<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tables = [
            // 'users' => 'tbl_users',
            // 'categories' => 'tbl_categories',
            // 'products' => 'tbl_products',
            'types' => 'tbl_types',
            'units' => 'tbl_units',
            'suppliers' => 'tbl_suppliers',
        ];

        foreach ($tables as $oldName => $newName) {
            Schema::rename($oldName, $newName);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            //'tbl_users' => 'users',
            //'tbl_types' => 'types',
            'tbl_units' => 'units',
            'tbl_suppliers'=> 'suppliers',
        ];

        foreach ($tables as $oldName => $newName) {
            Schema::rename($oldName, $newName);
        }
    }
};
