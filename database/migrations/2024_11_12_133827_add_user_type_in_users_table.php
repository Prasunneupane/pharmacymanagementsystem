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
        Schema::table('users', function (Blueprint $table) {
            $columns = [

                'user_type' => ['type' => 'integer','default' => 1,'after'=> 'email'],
                // Changing phone column to string with length of 10
                // 'phone' => ['type' => 'string', 'length' => 10, 'nullable' => true],
                    
                // // Changing birth_date to image column (string type with default value)
                // 'image' => ['type' => 'string', 'nullable' => true, 'default' => 'default.jpg'],
                
                // // Adding is_active column as boolean with default value of true
                // 'is_active' => ['type' => 'boolean', 'default' => true],
                // // 'is_active' => ['type' => 'boolean', 'default' => true],
               ];
    
               foreach($columns as $name =>$options){
                    if(!Schema::hasColumn('users',$name)){
                        // Define the column type dynamically
                        $column = $table->{$options['type']}($name, $options['length'] ?? null);
                        if (!empty($options['nullable'])) {
                            $column->nullable();
                        }
                        if (isset($options['default'])) {
                            $column->default($options['default']);
                        }
                        if (isset($options['after'])) {
                            $column->after($options['after']);
                        }
                    
                    }
               }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['user_type']);
        });
    }
};
