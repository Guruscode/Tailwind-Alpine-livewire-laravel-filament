<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\categoryFormRequest;

class CategoryController extends Controller
{
    public function index () {
        return view('admin.category.index');
    }
    public function create () {
        return view('admin.category.create');
    }
    public function store (categoryFormRequest $request) {
        $validatedData = $request->validated();


        $category = new Category;
        $category->name = $validatedData['name'];
         $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('upload/category', $filename);
            $category->image = $filename;
        }
       
        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];

        $category->status = $request->status == true ? '1':'0';
        $category->save();

        return redirect('admin/category')->with('message', 'Category Added successfully');
    }

    public function edit(Category $category) {
        return view('admin.category.edit', compact('category'));
    }

    public function update (categoryFormRequest $request, $category) {
        $validatedData = $request->validated();


        $category = Category::findOrFail($category);

        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];




        if ($request->hasFile('image')) {


            $path = 'upload/category/'. $category->image;
            if(File::exists($path)){
                File::delete();
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('upload/category', $filename);
            $category->image = $filename;
        }
        
        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];

        $category->status = $request->status == true ? '1' : '0';
        $category->update();

        return redirect('admin/category')->with('message', 'Category Updated successfully');
    }
}
