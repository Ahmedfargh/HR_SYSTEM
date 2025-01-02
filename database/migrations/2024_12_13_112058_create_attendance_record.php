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
        DB::select("CREATE TABLE ATTENDANCE(check_in datetime default now(),check_out datetime default now(),employee_id int not null,created_at datetime default now(),updated_at datetime default now() ,foreign key(employee)references employees(id)on delete cascade on update cascade);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_record');
    }
};
