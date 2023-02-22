<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups_courses')->insert([
            "user_id" => 2,
            "group_id" => 1,
        ]);
        DB::table('groups_courses')->insert([
            "user_id" => 2,
            "group_id" => 2,
        ]);
        DB::table('groups_courses')->insert([
            "user_id" => 3,
            "group_id" => 1,
        ]);
    }
}
