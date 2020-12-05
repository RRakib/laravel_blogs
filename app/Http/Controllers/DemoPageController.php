<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class DemoPageController extends Controller {
    public function landing(){
        return view("demoPages.landing");
    }

    public function service(){

        return view("demoPages.service", [
            'services'=> Session::get("todoData"),
            'abc'=> 123
        ]);
    }

    public function serviceAddData(Request $request) {
        $todoList = [];

        if (Session::get("todoData")) {
            $todoList = Session::get("todoData");
        }

        array_push($todoList, $request->get("todo"));

        Session::put("todoData", $todoList);

//        Session::put("todoData", []);

        return redirect()->back();
    }


    public function about(){
        return view("demoPages.about");
    }
}
