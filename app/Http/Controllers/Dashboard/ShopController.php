<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    protected $view = "dashboard.shop";

    public function index(){

        $products = [
            ["name" => "Վիդեո դասընթացի <br> 15% Ձեղչ", "price" => "400"],
            ["name" => "Վիդեո դասընթացի <br> 25% Ձեղչ", "price" => "700"],
            ["name" => "Դասընթացի <br> 10% Ձեղչ", "price" => "400"],
            ["name" => "Դասընթացի <br> 20% Ձեղչ", "price" => "700"],
            ["name" => "Անվճար <br> Խորհրդատվություն", "price" => "300"],
        ];

        return $this->view("index", compact("products"));
    }
}
