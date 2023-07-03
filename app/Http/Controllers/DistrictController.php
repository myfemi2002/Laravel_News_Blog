<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use Illuminate\Support\Carbon;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{
    public function DistrictView (){
        $district = DB::table('districts')->orderBy('id', 'desc')->paginate(4);
        return view('backend.district.index', compact('district'));
    }

    public function DistrictAdd() {
        return view('backend.district.add_district');
    }

    public function DistrictStore(Request $request){
        
        $validateData = $request->validate([
            'district' => 'required|unique:districts|max:255',
                ],
                [
                    'district.required' => 'Please Input District name',
        ]);
        // $data = array();
        // $data['category']= $request->category;
        // 'created_at' = Carbon::now();
        // DB::table('categories')->insert($data);

        District::insert([
            'district' => $request->district,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'District Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('district.view')->with($notification);
    }
    
    public function DistrictEdit($id) {
        $district = DB::table('districts')->where('id',$id)->first();
        // $editData = Category::find($id);
        return view('backend.district.edit_district', compact('district'));
    }

    public function DistrictUpdate(Request $request, $id){
        $validateData = $request->validate([
            'district' =>  'required',
            ],
            [
                'district.required' => 'Please Input district name',
            ]);
            District::findOrFail($id)->update([
                'district' => $request->district,
                'created_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'District Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('district.view')->with($notification);
    }
    public function DistrictDelete($id) {
        // Delete from the Database
        District::find($id)->delete();
        $notification = array(
            'message' => 'District Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('district.view')->with($notification);
    }
}
