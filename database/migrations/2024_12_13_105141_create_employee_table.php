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
        DB::select("CREATE TABLE employees( name_ VARCHAR(128) NOT NULL, `id` INT NOT NULL AUTO_INCREMENT, gender VARCHAR(10), salary INT NOT NULL, phone VARCHAR(15) NOT NULL, email VARCHAR(30),address VARCHAR(128) NOT NULL, PRIMARY KEY(id), created_at DATETIME DEFAULT NOW(), updated_at DATETIME DEFAULT NOW() );");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
