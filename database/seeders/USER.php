<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class USER extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("users")->insert([
            "name"=>"ahmed farghly thabet",
            "email"=>"ahmedgits2001@gmail.com",
            "password"=>\Hash::make("ahmedahmed"),
        ]);
    }
}
