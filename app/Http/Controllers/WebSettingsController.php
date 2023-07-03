<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Carbon;
use Auth;
use Image;

class WebSettingsController extends Controller
{
    public function MainWebSetting() {
        $editData = DB::table('web_settings')->first();
        return view('backend.website_setting.index',compact('editData'));
    }

    public function UpdateWebSetting (Request $request, $id){
        $data = array();
        $data['address'] = $request->address;
         $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['updated_at'] = Carbon::now();


      $oldimage = $request->oldlogo;

        $image = $request->logo;
            if ($image) {
                $image_one = uniqid().'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(320,130)->save('upload/logo/'.$image_one);
                $data['logo'] = 'upload/logo/'.$image_one;
                DB::table('web_settings')->where('id',$id)->update($data);
                unlink($oldimage);

                $notification = array(
              'message' => 'Website Setting Updated Successfully',
              'alert-type' => 'success'
          );

          return Redirect()->route('websetting.settings')->with($notification);

            }else{
                $data['logo'] = $oldimage;
                DB::table('web_settings')->where('id',$id)->update($data);

                $notification = array(
              'message' => 'Website Updated Successfully',
              'alert-type' => 'success'
          );
          return Redirect()->route('websetting.settings')->with($notification);
            } // End Condition

     } // End Method


}
