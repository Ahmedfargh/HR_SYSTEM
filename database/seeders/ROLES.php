<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ROLES extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // adding employee
        DB::table("role")->insert([
            "name"=>"اضافه موظف",
            "id"=>1,
        ]);
        //delete employee
        DB::table("role")->insert([
            "name"=>"مسح بيانات موظف",
            "id"=>2,
        ]);
        //update employee
        DB::table("role")->insert([
            "name"=>"تعديل بيانات موظف",
            "id"=>3,
        ]);
        //adding HR
        DB::table("role")->insert([
            "name"=>"اضافه موظف موارد بشريه",
            "id"=>4,
        ]);
        DB::table("role")->insert([
            "name"=>"تعديل بيانات موارد بشريه",
            "id"=>5,
        ]);
        DB::table("role")->insert([
            "name"=>"مسح بيانات موارد البشريه",
            "id"=>6,
        ]);
        DB::table("role")->insert([
            "name"=>"اضافه صلاحيات",
            "id"=>7,
        ]);
        DB::table("role")->insert([
            "name"=>"تعديل صلاحيات",
            "id"=>8
        ]);
        DB::table("role")->insert([
            "name"=>"كل الصلاحيات",
            "id"=>9
        ]);
    }
}
