<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoPageController extends Controller
{
    public function landing(){
        return view("demoPages.landing");
    }

    public function service(){

        $services = ["Quix", "ThriveDesk", "Brisby", "Wordpress", "React"];

//        return view("demoPages.service", compact(' services', $services));
        return view("demoPages.service", [
            'services'=> $services,
            'abc'=> 123
        ]);
    }

    public function about(){
        return view("demoPages.about");
    }
}
