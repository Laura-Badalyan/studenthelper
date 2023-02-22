<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Group;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    protected $view = "admin.courses";

    public function group($id){
        $courses = Course::where("group_id", $id)->orderBy("order", "ASC")->get();
        $group = Group::find($id);
        return $this->view("group", compact(["courses", "group"]));
    }
}
