<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function SubcategoryView (){
        $subcategory = DB::table('subcategories')
        ->join('categories' , 'subcategories.category_id' , 'categories.id')
        ->select('subcategories.*' , 'categories.category')
        ->orderBy('id', 'desc')->paginate(4);
        return view('backend.subcategory.index', compact('subcategory'));
    }

    public function SubCategoryAdd() {
        $category = DB::table('categories')->get();
        return view('backend.subcategory.add_subcategory',compact('category'));
    }

    public function SubCategoryStore(Request $request){

        $validateData = $request->validate([
            'subcategory' => 'required',
            'category_id' => 'required',
                ],
                [
                    'subcategory.required' => 'Please Input Sub Category name',
                    'category_id.required' => 'Please Input Category name',

        ]);
        // $data = array();
        // $data['category']= $request->category;
        // 'created_at' = Carbon::now();
        // DB::table('categories')->insert($data);

        Subcategory::insert([
            'subcategory' => $request->subcategory,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Subcategory Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('subcategory.view')->with($notification);
    }

    public function SubCategoryEdit($id) {
        $subcategory = DB::table('subcategories')->where('id',$id)->first();
        $category = DB::table('categories')->get();

        return view('backend.subcategory.edit_subcategory', compact('subcategory','category'));
    }

    public function SubCategoryUpdate(Request $request, $id){
        $validateData = $request->validate([
            'subcategory' => 'required',
            'category_id' => 'required',
            ],
            [
                'subcategory.required' => 'Please Input Sub Category name',
                'category_id.required' => 'Please Input Category name',
            ]);
            Subcategory::findOrFail($id)->update([
                'subcategory' => $request->subcategory,
                'category_id' => $request->category_id,
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'SubCategory Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('subcategory.view')->with($notification);
    }

    public function SubCategoryDelete($id) {
        // Delete from the Database
        Subcategory::find($id)->delete();
        $notification = array(
            'message' => 'Subcategory Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('subcategory.view')->with($notification);
    }
}
