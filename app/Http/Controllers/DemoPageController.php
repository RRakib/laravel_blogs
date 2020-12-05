<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class DemoPageController extends Controller {
    public function landing(){
        return view("demoPages.landing");
    }

    public function service(){

        return view("demoPages.service");
    }

    public function serviceAddData(Request $request) {

        Session::put("")

//        return view("demoPages.service", compact(' services', $services));
        return view("demoPages.service", [
            'services'=> $this->services,
            'abc'=> 123
        ]);
    }


    public function about(){
        return view("demoPages.about");
    }
}
