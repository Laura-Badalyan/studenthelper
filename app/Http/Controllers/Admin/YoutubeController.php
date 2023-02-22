<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Youtube;

class YoutubeController extends Controller
{
	protected $view = "admin.youtube";

	public function index(){
		$youtube=Youtube::get();
		// dd($youtube->toArray());
		return $this->view("index",compact(['youtube']));
	}
	public function edit($id){
		dd($id);
	}
    //
}
