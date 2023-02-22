<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index () {
//        return view("emails.info");

//        $arr = [
//            "bluelightcor@gmail.com",
//            "tatevike9@gmail.com",
//            "jaxinyan1991@gmail.com",
//            "Martiros.sahakyan.1992@gmail.com",
//            "e.soghomonyan98@gmail.com",
//            "gnikoghosyan98@gmail.com",
//            "simonyankhachik9@gmail.com",
//            "sirpetrosyan4@gmail.com",
//            "mher.janikyan01@gmail.com",
//            "armen.danelyan.85@gmail.com",
//            "erikgreyan777@gmail.com",
//            "arayik.asatryan10@gmail.com",
//            "aghajanyanarusyak@gmail.com",
//            "tigranav18@gmail.com",
//            "lewonhovsepyan@gmail.com",
//        ];
//
//        for($i = 0; $i<count($arr); $i++) {
//            Mail::send("emails.news", [], function ($message) use($arr, $i) {
//                $message->from("elizbaryan.martin@gmail.com", "Մարտին Էլիզբարյան");
//                $message->subject("Նորույթ | Հարցաշարեր");
//                $message->to($arr[$i]);
//            });
//        }

        Mail::send("emails.info", [], function ($message) {
            $message->from("elizbaryan.martin@gmail.com", "Մարտին Էլիզբարյան");
//            $message->subject("Նորույթ | Հարցաշարեր");
            $message->subject("Կայքի Ծանոթացում");

//            $message->to("martin.elizbaryan@gmail.com");
            $message->to("ashkapoghosyan@gmail.com");
            $message->to("anna.elizbaryan2000@gmail.com");
            $message->to("anahitkarapetyan075@gmail.com");
            $message->to("hamlet.moroyan.evistep@gmail.com");
        });

        Mail::send("emails.info", [], function ($message) {
            $message->from("elizbaryan.martin@gmail.com", "Martin Elizbaryan");
            $message->subject("inchvor subject");
            $message->to("anahitkarapetyan075@gmail.com");
        });
    }
}
