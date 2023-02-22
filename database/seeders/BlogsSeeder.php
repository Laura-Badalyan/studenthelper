<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            "title" => "Մաթեմատիկան ծրագրավորման մեջ",
            "views" => 125,
            "description" => "
                <h4 class='block_title'>Esim inch</h4>
                <p>a iwdkiua wdkua wgdua guawg dkua gwdkuawg duka gwdku aukaku akuwd akuw dkua dukawd</p>
                <ul class='standard'>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                </ul>
                <img src='/img/adult_from_zero.png' width='100%' alt=''>
                <p>awdhawiku akuw dkuaw dkuaw dgukaw d <a href='/dashboard'>Go to</a></p>
            ",
            "img" => "/img/banner_courses.png",
            "author" => "Մարտին Էլիզբարյան",
            "date" => "Հունվարի 18, 2022",
            "is_active" => true,
        ]);
        DB::table('blogs')->insert([
            "title" => "Մաթեմատիկան ծրագրավորման մեջ",
            "views" => 125,
            "description" => "
                <h2 class='block_title'>Esim inch</h2>
                <p>a iwdkiua wdkua wgdua guawg dkua gwdkuawg duka gwdku aukaku akuwd akuw dkua dukawd</p>
                <ul class='standard'>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                </ul>
                <img src='/img/adult_from_zero.png' width='100%' alt=''>
                <p>awdhawiku akuw dkuaw dkuaw dgukaw d <a href='/dashboard'>Go to</a></p>
            ",
            "img" => "/img/banner_courses.png",
            "author" => "Մարտին Էլիզբարյան",
            "date" => "Հունվարի 18, 2022",
            "is_active" => false,
        ]);
        DB::table('blogs')->insert([
            "title" => "Մաթեմատիկան ծրագրավորման մեջ",
            "views" => 125,
            "description" => "
                <h2 class='block_title'>Esim inch</h2>
                <p>a iwdkiua wdkua wgdua guawg dkua gwdkuawg duka gwdku aukaku akuwd akuw dkua dukawd</p>
                <ul class='standard'>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                </ul>
                <img src='/img/adult_from_zero.png' width='100%' alt=''>
                <p>awdhawiku akuw dkuaw dkuaw dgukaw d <a href='/dashboard'>Go to</a></p>
            ",
            "img" => "/img/banner_courses.png",
            "author" => "Մարտին Էլիզբարյան",
            "date" => "Հունվարի 18, 2022",
            "is_active" => true,
        ]);
        DB::table('blogs')->insert([
            "title" => "Մաթեմատիկան ծրագրավորման մեջ",
            "views" => 125,
            "description" => "
                <h2 class='block_title'>Esim inch</h2>
                <p>a iwdkiua wdkua wgdua guawg dkua gwdkuawg duka gwdku aukaku akuwd akuw dkua dukawd</p>
                <ul class='standard'>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                    <li>awud akuwdgukawd</li>
                </ul>
                <img src='/img/adult_from_zero.png' width='100%' alt=''>
                <p>awdhawiku akuw dkuaw dkuaw dgukaw d <a href='/dashboard'>Go to</a></p>
            ",
            "img" => "/img/banner_courses.png",
            "author" => "Մարտին Էլիզբարյան",
            "date" => "Հունվարի 18, 2022",
            "is_active" => true,
        ]);
    }
}
