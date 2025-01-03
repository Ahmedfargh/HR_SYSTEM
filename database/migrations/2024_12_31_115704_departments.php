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
        Schema::create("departments",function(Blueprint $table){
            $table->id();
            $table->string("name",64);
            $table->timestamps();
            $table->bigInteger("super_visisor")->nullable()->unsigned();
            $table->foreign('super_visisor')->references('id')->on('users')->onDelete('set null')->onUpdate("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
