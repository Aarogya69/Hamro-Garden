<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin/category');
    }

    public function manage_category()
    {
        return view('admin/manage_category');
    }
    public function manage_category_process(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'category_slug'=>'required|unique:categories',

        ]);
        $model=new Category();
        $model->category_name=$request->post('category_name');
        $model->category_slug=$request->post('category_slug');
        $model->save();
        $model->session()->flash('message','category_inserted');
        return redirect('admin/category');
    }


}
