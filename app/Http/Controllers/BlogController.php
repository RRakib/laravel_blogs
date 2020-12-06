<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;


class BlogController extends Controller {

    public function landing(){
        return view("blogPages.landing");
    }

    public function createBlog(){
        return view("blogPages.createBlogs");
    }

    public function blogs(){

        $blogs = Blogs::get();

        return view("blogPages.blogs", [
            'blogs'=> $blogs,
            'abc'=> 123
        ]);
    }

    public function submitBlogs(Request $request) {

        $createData = new Blogs();

        $createData->title = $request->get("title");
        $createData->body = $request->get("body");
        $createData->save();
        return redirect()->route("blogs");
    }


    public function blogDelete(Request $request){

        Blogs::destroy($request->get("id"));

        return redirect()->back();
    }

    public function blogEdit(Request $request){

        Blogs::destroy($request->get("id"));


        return redirect()->back();
    }


    public function about(){
        return view("blogPages.about");
    }
}
