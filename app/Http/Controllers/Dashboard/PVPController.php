<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PVPController extends Controller
{
    protected $view = "dashboard.pvp";

    public function index(){

        return $this->view("index");

    }
}
