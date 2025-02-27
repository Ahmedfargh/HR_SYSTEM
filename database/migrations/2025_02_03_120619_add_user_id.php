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
        //
        Schema::table("Aggregation_values",function(Blueprint $table){
            $table->bigInteger("user_id")->unsigned()->nullable(true);
            $table->foreign("user_id")->references("id")->on("users")->onDelete("set null")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("Aggregation_values");

    }
};
