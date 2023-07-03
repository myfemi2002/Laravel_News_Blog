<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SinglePostController extends Controller
{
    public function SinglePost($id){
        $post = DB::table('posts')
                ->join('categories','posts.category_id','categories.id')
                ->join('subcategories','posts.subcategory_id','subcategories.id')
                ->join('users','posts.user_id','users.id')
                ->select('posts.*','categories.category','subcategories.subcategory','users.name')
                ->where('posts.id',$id)->first();
                return view('frontend.single_post',compact('post'));

     }

     public function CatPost($id, $category){
         $catposts = DB::table('posts')->where('category_id',$id)->orderBy('id','desc')->paginate(5);
         return view('frontend.allpost',compact('catposts'));
     }

     public function SubCatPost($id, $subcategory){
        $subcatposts = DB::table('posts')->where('subcategory_id',$id)->orderBy('id','desc')->paginate(5);
        return view('frontend.subpost',compact('subcatposts'));
    }
}
