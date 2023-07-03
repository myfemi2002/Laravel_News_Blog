<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Carbon;
use Auth;

class RoleController extends Controller
{
    public function RoleView (){
        $roles = DB::table('users')->where('type',0)->get();
        return view('backend.role.index', compact('roles'));
    }

    public function RoleAdd(){
    	return view('backend.role.add_role');
    }

    public function RoleStore(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm_password',
                ],
                [
                    'name.required' => 'Please Input name',
                    'email.required' => 'Please Input email',
                    'password.required' => 'Please Input password',
                ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['category'] = $request->category;
        $data['post'] = $request->post;
        $data['setting'] = $request->setting;
        $data['website'] = $request->website;
        $data['gallery'] = $request->gallery;
        $data['video'] = $request->video;
        $data['ads'] = $request->ads;
        $data['role'] = $request->role;
        $data['type'] = 0;
        $data['created_at'] = Carbon::now();

        // return response()->json($data);

        DB::table('users')->insert($data);

         $notification = array(
            'message' => 'Role Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->route('roles.view')->with($notification);

    }
    public function RoleEdit($id) {

        $editData = DB::table('users')->where('id',$id)->first();
        return view('backend.role.edit_role',compact('editData'));

    }
    public function RoleUpdate(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required',
            // 'email' => 'required|email|unique:users,email','.$id',
            // 'password' => 'required|same:confirm_password',
                ],
                [
                    'name.required' => 'Please Input name',
                    // 'email.required' => 'Please Input email',
                    // 'password.required' => 'Please Input password',
                ]);

        $data = array();
        $data['name'] = $request->name;
        // $data['email'] = $request->email;
        $data['category'] = $request->category;
        $data['post'] = $request->post;
        $data['setting'] = $request->setting;
        $data['website'] = $request->website;
        $data['gallery'] = $request->gallery;
        $data['video'] = $request->video;
        $data['ads'] = $request->ads;
        $data['role'] = $request->role;
        $data['updated_at'] = Carbon::now();


        DB::table('users')->where('id',$id)->update($data);
        $notification = array(
    	'message' => 'User Role Updated Successfully',
    	'alert-type' => 'info'
    	);
        return Redirect()->route('roles.view')->with($notification);

    }

    public function RoleDelete($id){
        DB::table('users')->where('id',$id)->delete();
        $notification = array(
                'message' => 'User & User Role Deleted Successfully',
                'alert-type' => 'error'
            );
            return Redirect()->route('roles.view')->with($notification);
    }

}
