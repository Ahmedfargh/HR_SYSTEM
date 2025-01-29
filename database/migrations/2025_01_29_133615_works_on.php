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
        DB::select("CREATE TABLE WORKS_IN(employees_id int not null,departments_id  bigint unsigned not null ,foreign key(employees_id)references employees(id)on delete cascade on update cascade,foreign key(departments_id)references departments(id)on delete cascade on update cascade);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
