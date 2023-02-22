<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    protected $view = "admin.groups";

    public function index(){
        $groups = Group::get();

        return $this->view("index", compact(["groups"]));
    }

    public function create(){
        return $this->view("create");
    }

    public function store(Request $request){

        $group = new Group();

        $group->is_active = isset($request->is_active) ? 1 : 0;
        $group->is_show = isset($request->is_show) ? 1 : 0;

        $group->name = $request->name;
        $group->description = $request->description;
        $group->price = $request->price;
        $group->discount = $request->discount;

        $group->save();

        return redirect("/admin/groups");
    }

    public function edit($id){
        $group = Group::find($id);
        return $this->view("edit", compact(["group"]));
    }

    public function update(Request $request, $id){

        $group = Group::find($id);

        $group->is_active = isset($request->is_active) ? 1 : 0;
        $group->is_show = isset($request->is_show) ? 1 : 0;

        $group->name = $request->name;
        $group->description = $request->description;
        $group->price = $request->price;
        $group->discount = $request->discount;

        $group->save();

        return redirect("/admin/groups");
    }

    public function delete($id){
        Group::destroy($id);
        return redirect("/admin/groups");

    }
}
