<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function gu()
    {
        return $this->hasMany(GroupUsers::class);
    }








    static function getActivesWithActiveCourses(){
        return Group::with(["courses" => function($query){
            return $query->where('courses.is_active', 1);
        }])->where('is_active', 1)->get();
    }
    static function getShowsWithActiveCourses(){
        return Group::with(["courses" => function($query){
            return $query->where('courses.is_active', 1);
        }])->where('is_active', 1)->where('is_show', 1)->get();
    }

    public function showPrice(){
        $price = $this->priceFormat($this->price);
        return "$price դր.";
    }

    public function showDiscount(){
        $price = $this->price - $this->price * $this->discount / 100;
        $price = $this->priceFormat($price);
        return "$price դր.";
    }


    public function priceFormat($price){
        $price = number_format($price,0,",",".");
        $price = str_replace("0","o",$price);
        return $price;
    }
}
