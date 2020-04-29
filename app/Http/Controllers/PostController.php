<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\category;
use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postData = post::all();

        return view('admin.post.index',compact(['postData']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         $categoryList= category::all();

        return view('admin.post.create',compact(['categoryList'] ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $data = $r->all();
        $validate=Validator::make($data,[
             
               'title' => 'required',
               'categoryId' => 'required',
              
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $post= new post();
        $post->user_id=Auth::user()->id;
        $post->postTitle=$r->input('title');
        $post->category_id=$r->input('categoryId');
        $post->postDescription=$r->input('description');
        $post->postStatus=$r->input('status');
        $post->postDate=date('Y-m-d');

        if ($post->save()) {
           
             if ($r->hasFile('featureImage')) {
                  
                 $fileContainer=$r->file('featureImage');
                 $fileName=$post->id.".".$fileContainer->getClientOriginalExtension();
                 $fileContainer->move(getFeatureImagePath(),$fileName);

                 post::find($post->id)->update(['postImage' => $fileName]);


             }
        }
         
       return redirect()->back()->with('success','New Post Posted Successfully!!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $data=post::find($id);
         $categoryList = category::all();

         return view('admin.post.show',compact(['data','categoryList']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       $data=post::find($id);
            
            $categoryList= category::all();
            return view('admin.post.edit',compact(['data','categoryList']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $post= post::find($id);
 
        $post->postTitle=$r->input('title');
        $post->category_id=$r->input('categoryId');
        $post->postDescription=$r->input('description');
        $post->postStatus=$r->input('status');
     

        if ($post->save()) {
           
             if ($r->hasFile('featureImage')) {
                  
                 $fileContainer=$r->file('featureImage');
                 $fileName=$post->id.".".$fileContainer->getClientOriginalExtension();
                 $fileContainer->move(getFeatureImagePath(),$fileName);

                 post::find($post->id)->update(['postImage' => $fileName]);


             }
        }
         
       return redirect()->back()->with('success','This Post Updated Successfully!!'); 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delPost= post::findOrFail($id);
        $dlt=$delPost->delete();
        if ($dlt) {

           return redirect()->back()->with('warning','one post Deleted!');
        }
    }
}
