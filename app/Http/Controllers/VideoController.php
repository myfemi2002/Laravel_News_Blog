<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
use Illuminate\Support\Carbon;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function videoView (){
        $video = DB::table('videos')->orderBy('id', 'desc')->paginate(6);
        return view('backend.video.index', compact('video'));
    }

    public function videoAdd(){
    	return view('backend.video.add_video');
    }

    public function videoStore(Request $request){
        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        $data['created_at'] = Carbon::now();
        DB::table('videos')->insert($data);

   	 $notification = array(
            'message' => 'Video Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('video.view')->with($notification);
    }

    public function videoEdit($id) {
        $video = DB::table('videos')->where('id',$id)->first();
        return view('backend.video.edit_video',compact('video'));
    }

    public function videoUpdate(Request $request, $id){
        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;
        $data['updated_at'] = Carbon::now();
        DB::table('videos')->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Video Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('video.view')->with($notification);
    }

    public function videoDelete($id){
        DB::table('videos')->where('id',$id)->delete();
        $notification = array(
                'message' => 'video Deleted Successfully',
                'alert-type' => 'error'
            );
            return Redirect()->route('video.view')->with($notification);
    }








}
