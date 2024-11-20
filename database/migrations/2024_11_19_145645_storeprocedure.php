<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::unprepared('
            CREATE PROCEDURE InsertOrUpdateUser(
    IN p_id INT,
    IN p_name VARCHAR(255),
    IN p_username VARCHAR(255),
    IN p_email VARCHAR(255),
    IN p_password VARCHAR(255),
    IN p_email_verified_at TIMESTAMP,
    IN p_remember_token VARCHAR(255),
    IN p_user_type INT,
    IN p_phone VARCHAR(10),
    IN p_is_active BOOLEAN
    IN p_image VARCHAR(255)
)
BEGIN
    -- Set default values if parameters are NULL
    IF p_user_type IS NULL THEN
        SET p_user_type = 1;
    END IF;

    IF p_is_active IS NULL THEN
        SET p_is_active = TRUE;
    END IF;

    IF p_id > 0 THEN
        UPDATE users
        SET 
            name = p_name,
            username = p_username,
            email = p_email,
            password = p_password,
            email_verified_at = p_email_verified_at,
            remember_token = p_remember_token,
            user_type = p_user_type,  -- This will use the parameter or default
            phone = p_phone,
            is_active = p_is_active,  -- This will use the parameter or default
            image = p_image
            updated_at = NOW()
        WHERE id = p_id;
    ELSE
        INSERT INTO users (name, username, email, password, email_verified_at, remember_token, user_type, phone, is_active, image,created_at, updated_at)
        VALUES (p_name, p_username, p_email, p_password, p_email_verified_at, p_remember_token, p_user_type, p_phone, p_is_active, p_image,NOW(), NOW());
    END IF;
END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP PROCEDURE IF EXISTS InsertOrUpdateUser');
    }
};
