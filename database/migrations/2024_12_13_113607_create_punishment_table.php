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
        DB::select("CREATE TABLE punish(total_ int not null,emp_id int not null, at_ datetime default now(),created_at datetime default now(),updated_at datetime default now(),foreign key(emp_id) references employees(id)on delete cascade on update cascade);");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punishment');
    }
};
