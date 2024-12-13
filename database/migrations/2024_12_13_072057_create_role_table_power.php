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
        DB::select("create table `role_table_power` (`user_id` bigint unsigned not null , `role` bigint unsigned not null , `created_at` timestamp null, `updated_at` timestamp null,foreign key(user_id) REFERENCES users(id)on delete cascade on update cascade,foreign key(role) references role(id)on delete cascade on update cascade);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_table_power');
    }
};
