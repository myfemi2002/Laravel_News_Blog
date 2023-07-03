<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    public function SocialSetting(){
    	$social = DB::table('socials')->first();
    	return view('backend.setting.social',compact('social'));
    }

    public function SocialUpdate(Request $request, $id){
        $data = array();
    	$data['facebook'] = $request->facebook;
    	$data['twitter'] = $request->twitter;
    	$data['youtube'] = $request->youtube;
    	$data['linkedin'] = $request->linkedin;
    	$data['instagram'] = $request->instagram;
        $data['created_at'] = Carbon::now();
    	DB::table('socials')->where('id',$id)->update($data);

    	$notification = array(
            'message' => 'Social Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('social.setting')->with($notification);
    }

    public function SeoSetting(){
    	$seo = DB::table('seos')->first();
    	return view('backend.setting.seo',compact('seo'));
    }
    public function SeoUpdate(Request $request, $id){

        $data = array();
        $data['meta_author'] = $request->meta_author;
        $data['meta_title'] = $request->meta_title;
        $data['meta_keyword'] = $request->meta_keyword;
        $data['meta_description'] = $request->meta_description;
        $data['google_analytics'] = $request->google_analytics;
        $data['google_verification'] = $request->google_verification;
        $data['alexa_analytics'] = $request->alexa_analytics;
        $data['created_at'] = Carbon::now();
        DB::table('seos')->where('id',$id)->update($data);
            $notification = array(
            'message' => 'Seo Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('seo.setting')->with($notification);
    }

    public function LivetvSetting(){
    	$livetv = DB::table('livetvs')->first();
    	return view('backend.setting.livetv',compact('livetv'));
    }

    public function LivetvUpdate(Request $request, $id){

        $data = array();
        $data['embed_code'] = $request->embed_code;
        $data['created_at'] = Carbon::now();
        DB::table('livetvs')->where('id',$id)->update($data);
            $notification = array(
            'message' => 'Live Tv Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('livetv.setting')->with($notification);
    }

    public function ActiveLivetvSettings(Request $request, $id){
        DB::table('livetvs')->where('id',$id)->update(['status'=>1]);

        $notification = array(
            'message' => 'Live Tv Active',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }
    public function DeactiveLivetvSettings(Request $request, $id){
        DB::table('livetvs')->where('id',$id)->update(['status'=>0]);

        $notification = array(
            'message' => 'Live Tv Deactive',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function NoticeSetting(){
    	$notice = DB::table('notices')->first();
    	return view('backend.setting.notice',compact('notice'));
    }

    public function NoticeUpdate(Request $request, $id){

        $data = array();
        $data['notice'] = $request->notice;
        $data['created_at'] = Carbon::now();
        DB::table('notices')->where('id',$id)->update($data);
            $notification = array(
            'message' => 'Notice Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('notice.setting')->with($notification);
    }

    public function ActiveNoticeSettings(Request $request, $id){
        DB::table('notices')->where('id',$id)->update(['status'=>1]);

        $notification = array(
            'message' => 'Notice Activated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }
    public function DeactiveNoticeSettings(Request $request, $id){
        DB::table('notices')->where('id',$id)->update(['status'=>0]);

        $notification = array(
            'message' => 'Notice Deactivated',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);

    }
    // public function WebsiteSetting(){
    // 	$website = DB::table('websites')->first();
    // 	return view('backend.setting.website',compact('website'));
    // }

    // public function WebsiteUpdate(Request $request, $id){
    //     $data = array();
    // 	$data['website_name'] = $request->website_name;
    // 	$data['website_link'] = $request->website_link;
    //     $data['created_at'] = Carbon::now();
    // 	DB::table('websites')->where('id',$id)->update($data);

    // 	$notification = array(
    //         'message' => 'website Setting Updated Successfully',
    //         'alert-type' => 'success'
    //     );
    //     return Redirect()->route('website.setting')->with($notification);
    // }

    public function WebsiteView(){
        $website =  DB::table('websites')->orderBy('id','desc')->paginate(5);
        return view('backend.setting.website.index',compact('website'));

    }

    public function WebsiteAdd(){
        return view('backend.setting.website.add_website');
    }

    public function WebsiteStore(Request $request){
        $data = array();
        $data['website_name'] = $request->website_name;
        $data['website_link'] = $request->website_link;
        $data['created_at'] = Carbon::now();
        DB::table('websites')->insert($data);

   	 $notification = array(
            'message' => 'Website Link Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('website.view')->with($notification);
    }

    public function WebsiteEdit($id) {
        $website = DB::table('websites')->where('id',$id)->first();
        return view('backend.setting.website.edit_website',compact('website'));
    }

    public function WebsiteUpdate(Request $request, $id){
        $data = array();
        $data['website_name'] = $request->website_name;
        $data['website_link'] = $request->website_link;
        $data['updated_at'] = Carbon::now();
        DB::table('websites')->where('id',$id)->update($data);
        $notification = array(
            'message' => 'website Link Updated Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('website.view')->with($notification);
    }

    public function WebsitesDelete($id){
        DB::table('websites')->where('id',$id)->delete();
        $notification = array(
                'message' => 'Website Link Deleted Successfully',
                'alert-type' => 'error'
            );
            return Redirect()->route('website.view')->with($notification);
    }




















}
