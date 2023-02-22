<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            "name" => "Ներածություն",
            "slug" => "intro",
            "group_id" => "1",
            "duration" => "3:59",
            "video" => "1",
            "level" => "2",
            "order" => "2",
            "is_active" => true
        ]);


        DB::table('courses')->insert([
            "name" => "2rd das",
            "slug" => "2rd",
            "group_id" => "1",
            "duration" => "12:45",
            "level" => "4",
            "video" => "1",
            "order" => "1",
            "is_active" => true,
            "is_free" => true
        ]);


        DB::table('courses')->insert([
            "name" => "3rd das",
            "slug" => "3rd",
            "group_id" => "1",
            "duration" => "8:10",
            "level" => "5",
            "video" => "1",
            "order" => "3",
            "is_active" => true
        ]);


        DB::table('courses')->insert([
            "name" => "2temaji 1in das",
            "slug" => "2rd1in",
            "group_id" => "2",
            "duration" => "6:05",
            "level" => "1",
            "video" => "1",
            "order" => "1",
            "is_active" => true
        ]);


        DB::table('courses')->insert([
            "name" => "2temaji 2rd das",
            "slug" => "2rd2rd",
            "group_id" => "2",
            "duration" => "9:08",
            "level" => "3",
            "video" => "1",
            "order" => "2",
            "is_active" => true
        ]);
    }
}
