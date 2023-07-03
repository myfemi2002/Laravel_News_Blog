<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function CategoryView (){
        $category = DB::table('categories')->orderBy('id', 'desc')->paginate(4);
        return view('backend.category.index', compact('category'));
    }

    public function CategoryAdd() {
        return view('backend.category.add_category');
    }

    public function CategoryStore(Request $request){

        $validateData = $request->validate([
            'category' => 'required|unique:categories|max:255',
                ],
                [
                    'category.required' => 'Please Input Category name',
        ]);
        // $data = array();
        // $data['category']= $request->category;
        // 'created_at' = Carbon::now();
        // DB::table('categories')->insert($data);

        Category::insert([
            'category' => $request->category,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('category.view')->with($notification);
    }

    public function CategoryEdit($id) {
        $editData = DB::table('categories')->where('id',$id)->first();
        // $editData = Category::find($id);
        return view('backend.category.edit_category', compact('editData'));
    }

    public function CategoryUpdate(Request $request, $id){
        $validateData = $request->validate([
            'category' =>  'required',
            ],
            [
                'category.required' => 'Please Input category name',
            ]);
            Category::findOrFail($id)->update([
                'category' => $request->category,
                'updated_at' => Carbon::now()
            ]);
            $notification = array(
                'message' => 'Category Updated Successfully',
                'alert-type' => 'success'
            );
            return Redirect()->route('category.view')->with($notification);
    }
    public function CategoryDelete($id) {
        // Delete from the Database
        Category::find($id)->delete();
        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('category.view')->with($notification);
    }
}
