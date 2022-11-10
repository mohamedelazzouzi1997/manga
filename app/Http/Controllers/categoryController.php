<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    public function index(){
        $categories = Category::latest()->paginate(10);
        return view('admin.category.index',compact('categories'));
    }
    public function create(){

        return view('admin.category.create');
    }

    public function store(Request $request){

        $validate = $request->validate([
            'name' => 'required',
        ]);

        if($validate){
            $category =  Category::create([
                'name' => $request->name,
            ]);
            if($category){
                session()->flash('status','category created');
                return redirect()->route('category.index');
            }else{
                session()->flash('status','category created faild');
                return redirect()->route('category.index');
            }
        }
    }

    public function edit($id){
        $category = Category::find($id);

        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request,$id){

        $validate = $request->validate([
            'name' => 'required',
        ]);
        $imageName = null;

        if($validate){
            $category = Category::find($id)->update([
                'name' => $request->name,
            ]);
            if($category){
                session()->flash('status','category updated');
                return redirect()->route('category.index');
            }else{
                session()->flash('status','category update faild');
                return redirect()->route('category.index');
            }

        }
    }

    public function delete($id){
        $category = Category::find($id)->delete();

        session()->flash('status','category deleted');
        return redirect()->route('category.index');
    }
}
