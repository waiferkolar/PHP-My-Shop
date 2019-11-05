<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        $cats = Category::all();
        return view("cat.home",compact('cats'));
    }

    function create()
    {
        return view("cat.create");
    }

    function store(Request $request)
    {
        $name = $request->get("name");
        $file = $request->file("image");
        $filename = uniqid() . "_" .  $file->getClientOriginalName();

        $savePath = public_path("imgs/uploads/");

        $file->move($savePath,$savePath."/$filename");

        $cat = new Category();

        $cat->name = $name;
        $cat->image = $filename;

        if($cat->save()){
            return redirect("/cat")->with('success','Category Created Successfully');
        }else{
            return redirect()->back()->with('success','Category Create Fail');
        }


    }

    function edit($id)
    {
        $cat = Category::whereId($id)->first();
        return view("cat.edit",compact('cat'));
    }

    function update(Request $request , $id)
    {
        $cat = Category::whereId($id)->first();

        $name = $request->get("name");
        $file = $request->file("image");

        $filename = $cat->image;

        if($file){
            $filename = uniqid() . "_" . $file->getClientOriginalName();
            $savePath = public_path("imgs/uploads/");

            $file->move($savePath,$savePath."/$filename");
        }

        $cat->name = $name;
        $cat->image = $filename;

        $cat->update();

        return redirect("/cat")->with('success',"Category Update Success!");

//        echo "<pre>".print_r($request->all(),true)."</pre>";
    }

    function delete($id)
    {

    }
}
