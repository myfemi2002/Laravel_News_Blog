<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Image;

class AdsController extends Controller
{
    public function AdsView (){
        $ads = DB::table('ads')->orderBy('id', 'desc')->paginate(6);
        return view('backend.ads.index', compact('ads'));
    }
    public function AdsAdd(){
    	return view('backend.ads.add_ads');
    }

    public function AdsStore(Request $request){
        $data = array();
        $data['link'] = $request->link;
        $data['created_at'] = Carbon::now();

        if ($request->type == 2) {
            $image = $request->ads;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(970,90)->save('upload/ads/'.$image_one);
            $data['ads'] = 'upload/ads/'.$image_one;
            $data['type'] = 2;
            DB::table('ads')->insert($data);

            $notification = array(
                'message' => 'Horizontal Ads Inserted Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('ads.view')->with($notification);
        }else{

            $image = $request->ads;
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,500)->save('upload/ads/'.$image_one);
                $data['ads'] = 'upload/ads/'.$image_one;
                $data['type'] = 1;
                DB::table('ads')->insert($data);

                $notification = array(
                    'message' => 'Vertical Ads Inserted Successfully',
                    'alert-type' => 'info'
                );
                return Redirect()->route('ads.view')->with($notification);
            }
    }


    public function AdsEdit($id) {
        $edit_ads = DB::table('ads')->where('id',$id)->first();
        return view('backend.ads.edit_ads',compact('edit_ads'));
    }







    public function AdsUpdate(Request $request, $id){

        $validateData = $request->validate([
            'ads' => 'required',
                ],
                [
                    'ads.required' => 'Image required',
        ]);

        $data = array();
        $data['link'] = $request->link;
        // $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();


        // $image = $request->ads;

        if ($request->type == 2) {

            $oldimage = $request->oldimage;
            $image = $request->ads;
            $image_one = uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(970,90)->save('upload/ads/'.$image_one);
            $data['ads'] = 'upload/ads/'.$image_one;
            $data['type'] = 2;
            DB::table('ads')->where('id',$id)->update($data);
            unlink($oldimage);


            $notification = array(
                'message' => 'Horizontal Ads Inserted Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('ads.view')->with($notification);
        }elseif ($request->type == 1) {

            $oldimage = $request->oldimage;
            $image = $request->ads;
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(500,500)->save('upload/ads/'.$image_one);
                $data['ads'] = 'upload/ads/'.$image_one;
                $data['type'] = 1;
            DB::table('ads')->where('id',$id)->update($data);
            unlink($oldimage);

                $notification = array(
                    'message' => 'Vertical Ads Inserted Successfully',
                    'alert-type' => 'info'
                );
                return Redirect()->route('ads.view')->with($notification);

        }else{
            $data['ads'] = $oldimage;
            DB::table('ads')->where('id',$id)->update($data);

            $notification = array(
          'message' => 'ads Updated Successfully',
          'alert-type' => 'success'
      );
      return Redirect()->route('ads.view')->with($notification);
        } // End Condition

    }

    public function AdsDelete($id){

    $ads = DB::table('ads')->where('id',$id)->first();
    unlink($ads->ads);
    DB::table('ads')->where('id',$id)->delete();
    $notification = array(
            'message' => 'ads Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->route('ads.view')->with($notification);
}








}
