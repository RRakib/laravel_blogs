<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;


class BlogController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createBlog(){
        return view("blogPages.createBlogs");
    }

    public function blogDetails($id){

        $blog = Blogs::where("id", "=", $id)->get()[0];

        return view("blogPages.blogDetails", [
            "blog"=>$blog
        ]);
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

    public function blogEdit($id){

        $blog = Blogs::where("id", "=", $id)->get()[0];

        return view("blogPages.createBlogs", [
            "blog"=>$blog
        ]);
    }

    public function updateBlog(Request $request, $id){

        $createData = Blogs::find($id);

        $createData->title = $request->get("title");
        $createData->body = $request->get("body");
        $createData->save();

        return redirect()->route("blogs");
    }


    public function about(){
        return view("blogPages.about");
    }
}
