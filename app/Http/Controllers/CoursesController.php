<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\GroupUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    protected $view = "pages.courses";

    public function show($id)
    {
        $course = Course::find($id);
//        dd($course->toArray());
        if($course != null){
            $groupId = $course->group_id;

            $gu = GroupUsers::where("user_id", Auth::id())->where("group_id", $groupId)->first();
            $toShow =$gu != null;

            if($gu != null || $course->is_free|| Auth::user()->is_admin){
                $group = Group::with(["courses" => function($q){
                    return $q->orderBy("order", "ASC")->where("is_active", 1);
                }])->find($groupId);

                return $this->view('show', compact(["group", "course", "toShow"]));
            }
        }

        return redirect("/");


    }
}
