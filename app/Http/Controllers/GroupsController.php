<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupsController extends Controller
{
    protected $view = "pages.groups";

    public function index()
    {
        $groups = Group::getActivesWithActiveCourses();
//        return response()->json(["groups" => $groups]);
        return $this->view('index', compact(["groups"]));
    }

    public function show($id)
    {
        $group = Group::with(["courses" => function($q){
            return $q->orderBy("order", "ASC")->where("is_active", 1);
        }])->find($id);

        $gu = GroupUsers::where("user_id", Auth::id())->where("group_id", $id)->first();
        $toShow =$gu != null;
//        dd($toShow);
//        dd($group->toArray());

        return $this->view('show', compact(["group", "toShow"]));
    }
}
