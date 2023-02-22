<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            "name" => "1in tema",
            "description" => "1in Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող",
            "price" => 15000,
            "is_active" => true,
            "is_show" => true,
        ]);

        DB::table('groups')->insert([
            "name" => "2rd tema tema",
            "description" => "2in Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող",
            "price" => 18000,
            "is_active" => true,
            "is_show" => true,
        ]);

        DB::table('groups')->insert([
            "name" => "3rd tema tema",
            "description" => "3in Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող",
            "price" => 5000,
            "is_active" => true,
            "is_show" => true,
        ]);

        DB::table('groups')->insert([
            "name" => "4rd tema tema",
            "description" => "4in Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող Հայերենով մի բան գրածա ստեղ ւ տենց մի քանի տող",
            "price" => 7000,
            "is_active" => true,
            "is_show" => true,
        ]);
    }
}
