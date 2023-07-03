<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function PostView (){
        $post = DB::table('posts')
        ->join('categories','posts.category_id','categories.id')
        ->join('subcategories','posts.subcategory_id','subcategories.id')
        ->select('posts.*','categories.category','subcategories.subcategory')
        ->orderBy('id','desc')->paginate(5);
        return view('backend.post.index',compact('post'));
    }

    public function PostAdd() {
        $category = DB::table('categories')->get();
        return view('backend.post.add_post',compact('category'));
    }

    public function GetSubCategory($category_id){
        $sub = DB::table('subcategories')->where('category_id',$category_id)->get();
        return response()->json($sub);
    }

    public function PostStore(Request $request){
        $validateData = $request->validate(
            [
        'category_id' => 'required',
        'subcategory_id' => 'required',
    ],
            [
        'category_id.required' => 'Please Input Category name',
        'subcategory_id.required' => 'Please Input Sub Category name',
    ]
        );

        $data = array();
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['user_id'] = Auth::id();
        $data['tags'] = $request->tags;
        $data['details'] = $request->details;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date("F");
        $data['created_at'] = Carbon::now();

        $image = $request->image;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('upload/post_img/'.$image_one);
            $data['image'] = 'upload/post_img/'.$image_one;
            DB::table('posts')->insert($data);

            $notification = array(
      'message' => 'Post Inserted Successfully',
      'alert-type' => 'success'
  );

            return Redirect()->route('post.view')->with($notification);
        } else {
            return Redirect()->back();
        }// End Condition
    }// END Method


    public function PostEdit($id) {
        $post = DB::table('posts')->where('id',$id)->first();
        $category = DB::table('categories')->get();
        $sub = DB::table('subcategories')->where('category_id',$post->category_id)->get();
        return view('backend.post.edit_post',compact('post','category','sub'));
    }

    public function PostUpdate(Request $request, $id){

        $data = array();
        $data['title'] = $request->title;
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['user_id'] = Auth::id();
        $data['tags'] = $request->tags;
        $data['details'] = $request->details;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['bigthumbnail'] = $request->bigthumbnail;
        $data['post_date'] = date('d-m-Y');
        $data['post_month'] = date("F");
        $data['updated_at'] = Carbon::now();

        $oldimage = $request->oldimage;
        $image = $request->image;
            if ($image) {
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,300)->save('upload/post_img/'.$image_one);
                $data['image'] = 'upload/post_img/'.$image_one;
                DB::table('posts')->where('id',$id)->update($data);
                unlink($oldimage);

                $notification = array(
              'message' => 'Post Updated Successfully',
              'alert-type' => 'success'
          );

          return Redirect()->route('post.view')->with($notification);

            }else{
                $data['image'] = $oldimage;
                DB::table('posts')->where('id',$id)->update($data);

                $notification = array(
              'message' => 'Post Updated Successfully',
              'alert-type' => 'success'
          );
          return Redirect()->route('post.view')->with($notification);
            } // End Condition
   }  // End Method


 public function PostDelete($id){
    $post = DB::table('posts')->where('id',$id)->first();
    unlink($post->image);

    DB::table('posts')->where('id',$id)->delete();

    $notification = array(
            'message' => 'Post Deleted Successfully',
            'alert-type' => 'error'
        );

        return Redirect()->route('post.view')->with($notification);
}











}
