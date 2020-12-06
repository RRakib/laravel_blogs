<?php

namespace App\Http\Controllers;

use App\Models\TodoModel;
use Illuminate\Http\Request;


class DemoPageController extends Controller {
    public function landing(){
        return view("demoPages.landing");
    }

    public function service(){

        $services = TodoModel::get();

        return view("demoPages.service", [
            'services'=> $services,
            'abc'=> 123
        ]);
    }

    public function serviceAddData(Request $request) {

        $createData = new TodoModel();

        $createData->todo = $request->get("todo");
        $createData->save();
        return redirect()->back();
    }


    public function todoDelete(Request $request){

        TodoModel::destroy($request->get("id"));

        return redirect()->back();
    }

    public function todoEdit(Request $request){

        TodoModel::destroy($request->get("id"));


        return redirect()->back();
    }


    public function about(){
        return view("demoPages.about");
    }
}
