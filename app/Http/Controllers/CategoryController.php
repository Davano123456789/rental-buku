<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::all();
        return view('category',['categories' => $categories]);
    }
    public function add(){
        return view('category-add');
    }
    public function store(Request $request){
        // validasi
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
        ]);
        // menambahkan ke data base
        $category = Category::create($request->all());
        return redirect('categories')->with('success', 'menambah data category sukses');   

    }
    
    public function edit($slug){
      $category = category::where('slug',$slug)->first();
return view('category-edit',['category'=> $category]);
    }
    public function update(Request $request,$slug){

      // validasi biar gk sama name nya 
      $validated = $request->validate([
        'name' => 'required|unique:categories|max:100',
    ]);
    $category = category::where('slug',$slug)->first();
    $category->slug = null;
    $category->update($request->all());
    return redirect('categories')->with('success', 'update data category sukses'); 
    }
    public function delete($slug){
       $category = category::where('slug',$slug)->first();
       return view('category-delete',['category'=>$category]);
    }
    public function destroy($slug){
       $category = category::where('slug',$slug)->first();
       $category->delete();
       return redirect('/categories')->with('success', 'data category sukses di hapus'); 
    }
    public function deletedCategory(){
        // melihat data yang kedelete aja
        $deletedCategories =category::onlyTrashed()->get();
    return view('category-deleted-list',['deletedCategories' => $deletedCategories]);
    }
    public function restore($slug){
 $category =category::withTrashed()->where('slug',$slug)->first();
 $category->restore();
 return redirect('/categories')->with('success', 'data category sukses di hapus'); 
    }

}
