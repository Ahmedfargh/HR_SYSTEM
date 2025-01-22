<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permissions;
class permissionsSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Permissions::create([
            "guard_name"=>"web",
            "name"=>"view_candidates",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_candidates",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_candidates",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"delete_candidates",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"view_positions",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_positions",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_positions",
        ]);
        Permissions::create([
            
            "guard_name"=>"web",

            "name"=>"delete_positions",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"view_employees",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_employees",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_employees",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"delete_employees",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"view_departments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_departments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_departments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"delete_departments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"view_attendance",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_attendance",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_attendance",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"delete_attendance",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"view_punishments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_punishments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_punishments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"delete_punishments",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"view_rewards",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_rewards",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_rewards",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"delete_rewards",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"view_permissions",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"add_permissions",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"edit_permissions",
        ]);
        Permissions::create([
            "guard_name"=>"web",

            "name"=>"delete_permissions",
        ]);

    }
}
