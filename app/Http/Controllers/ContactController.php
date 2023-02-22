<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessagesRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{

    protected $view = "pages.contact";

    public function create(){
        return $this->view("create");
    }

    public function store(MessagesRequest $request){
        $contact = new Message();
        $contact->user_id = Auth::check() ? Auth::id() : null;
        $contact->name = $request->name;
        $contact->surname = $request->surname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->save();

        return redirect()->back()->with(["success" => "Ես կպատասխանեմ Ձեզ հնարավորինս շուտ "]);
    }
}
