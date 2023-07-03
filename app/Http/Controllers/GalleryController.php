<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\photo;
use Illuminate\Support\Carbon;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function PhotoGalleryView (){
        $photo = DB::table('photos')->orderBy('id', 'desc')->paginate(6);
        return view('backend.gallery.index', compact('photo'));
    }

    public function PhotoGalleryAdd(){
    	return view('backend.gallery.add_gallery');
    }

    public function PhotoGalleryStore(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        $data['created_at'] = Carbon::now();

        $image = $request->photo;
        if ($image) {
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('upload/photo_gallery/'.$image_one);
            $data['photo'] = 'upload/photo_gallery/'.$image_one;
            DB::table('photos')->insert($data);

            $notification = array(
                'message' => 'Photo Inserted Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('gallery.view')->with($notification);
        }else{
            return Redirect()->back();
        } // End Condition
    }// END Methods

    public function PhotoGalleryEdit($id) {
        $photo = DB::table('photos')->where('id',$id)->first();
        return view('backend.gallery.edit_gallery',compact('photo'));
    }

    public function PhotoGalleryUpdate(Request $request, $id){
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();

        $oldimage = $request->oldimage;
        $image = $request->photo;
            if ($image) {
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,300)->save('upload/photo_gallery/'.$image_one);
                $data['photo'] = 'upload/photo_gallery/'.$image_one;
                DB::table('photos')->where('id',$id)->update($data);
                unlink($oldimage);

                $notification = array(
              'message' => 'Photo  Updated Successfully',
              'alert-type' => 'success'
          );

          return Redirect()->route('gallery.view')->with($notification);

            }else{
                $data['photo'] = $oldimage;
                DB::table('photos')->where('id',$id)->update($data);

                $notification = array(
              'message' => 'Photo Updated Successfully',
              'alert-type' => 'success'
          );
          return Redirect()->route('gallery.view')->with($notification);
            } // End Condition
   }  // End Method


   public function PhotoGalleryDelete($id){

    $photo = DB::table('photos')->where('id',$id)->first();
    unlink($photo->photo);
    DB::table('photos')->where('id',$id)->delete();
    $notification = array(
            'message' => 'photo Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->route('gallery.view')->with($notification);
}





}
