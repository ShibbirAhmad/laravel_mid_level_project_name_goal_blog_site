<?php

namespace App\Http\Controllers;

use Validator;
use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category=category::all();

        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data= $request->all();

         $validate=Validator::make($data,['categoryName' => 'required']);

         if ($validate->fails()) {
            
              return redirect()->back()->withErrors($validate)->withInput();

         }

        $up= category::create($data);
            if ($up) {
               
                 return redirect()->back()->with('success','New Category Inserted ');
            }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $category=category::find($id);
         $category->categoryName=$request->input('categoryName');
        
          if ($category->save()) {
              
               return redirect()->back()->with('success','This Category Updated ');
          }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del= category::find($id);
       $del->delete();

       return redirect()->back()->with('warning','one item Deleted!');
    }
}
