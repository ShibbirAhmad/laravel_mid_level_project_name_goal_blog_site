<?php

namespace App\Http\Controllers;

use Auth;
use App\Comment;
use App\category;
use App\post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home(){

       $data= post::with(['user','category'])->orderBy('id','desc')->where('postStatus','Published')->paginate(4);
       $category=category::with(['post'])->get();
        return view('site.home',compact(['data','category']));
    }


   
    public function single($id)
    {
         $post=post::with(['category','comments'])->find($id); 
        
         $category=category::with(['post'])->get();
         return view('site.single',compact(['post','category']));
    }



    public function category($id){

        $data= post::with(['user','category'])->orderBy('id','desc')->where('postStatus','Published')->where('category_id',$id)->paginate(4);
        $category=category::with(['post'])->get();
         return view('site.category',compact(['data','category']));
    }


     
    //this is for post post comment
    public function postComment(Request $request){

            $comment= new Comment();
            $comment->post_id=$request->input('post_id');
            $comment->user_id=getUserId();
            $comment->status='Pending';
            $comment->comment=$request->input('comment');

            if ($comment->save()) {
               
                return redirect()->back()->with('success','successfully submited your comment is pending now');
  
            }

            
              }





}
