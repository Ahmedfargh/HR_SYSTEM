<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        DB::select("alter table users add column role_id bigint(20)unsigned default null");
        DB::select("alter table users add foreign key(role_id) references roles(id)");
        DB::select("ALTER TABLE `hr_manager`.`role_has_permissions` ADD COLUMN `created_at` DATETIME NULL DEFAULT now() AFTER `role_id`,ADD COLUMN `updated_at` DATETIME NULL DEFAULT now() AFTER `created_at`;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
