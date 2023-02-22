<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $view = "pages.home";

    public function index()
    {
//        $json = file_get_contents('https://jsonplaceholder.typicode.com/todos');
//        $obj = json_decode($json);
//        dd($obj);
        $groups = Group::getShowsWithActiveCourses();

        return $this->view('index', compact(["groups"]));
    }
}
